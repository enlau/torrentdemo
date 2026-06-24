<?php
require("../configlicense.php");
register_globals();
require_once 'default.php';
function register_globals($order = 'egpcs')
{
	// define a subroutine
	if (!function_exists('register_global_array')) {
		function register_global_array(array $superglobal)
		{
			foreach ($superglobal as $varname => $value) {
				global $$varname;
				$$varname = $value;
			}
		}
	}

	$order = explode("\r\n", trim(chunk_split($order, 1)));
	foreach ($order as $k) {
		switch (strtolower($k)) {
			case 'e':
				register_global_array($_ENV);
				break;
			case 'g':
				register_global_array($_GET);
				break;
			case 'p':
				register_global_array($_POST);
				break;
			case 'c':
				register_global_array($_COOKIE);
				break;
			case 's':
				register_global_array($_SERVER);
				break;
		}
	}
}


function unregister_globals()
{
	if (ini_get(register_globals)) {
		$array = array('_REQUEST', '_SESSION', '_SERVER', '_ENV', '_FILES');
		foreach ($array as $value) {
			foreach ($GLOBALS[$value] as $key => $var) {
				if ($var === $GLOBALS[$key]) {
					unset($GLOBALS[$key]);
				}
			}
		}
	}
}


// BEGINING L

function popeye_check_license($licensekey, $localkey = '')
{


	$whmcsurl = 'https://www.getfrank.app/members/';
	$licensing_secret_key = 'OTg3eXQ0M2dod3JlZmRzOTc2ZnJ2MjR0NzM0OTBqb3RybjRmag';
	$localkeydays = 15;
	$allowcheckfaildays = 5;

	$check_token = time() . md5(mt_rand(100000000, mt_getrandmax()) . $licensekey);
	$checkdate = date("Ymd");
	$domain = $_SERVER['SERVER_NAME'];
	$usersip = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : $_SERVER['LOCAL_ADDR'];
	$dirpath = dirname(__FILE__);
	$verifyfilepath = 'modules/servers/licensing/verify.php';
	$localkeyvalid = false;
	if ($localkey) {
		$localkey = str_replace("\n", '', $localkey); # Remove the line breaks
		$localdata = substr($localkey, 0, strlen($localkey) - 32); # Extract License Data
		$md5hash = substr($localkey, strlen($localkey) - 32); # Extract MD5 Hash
		if ($md5hash == md5($localdata . $licensing_secret_key)) {
			$localdata = strrev($localdata); # Reverse the string
			$md5hash = substr($localdata, 0, 32); # Extract MD5 Hash
			$localdata = substr($localdata, 32); # Extract License Data
			$localdata = base64_decode($localdata);
			$localkeyresults = json_decode($localdata, true);
			$originalcheckdate = $localkeyresults['checkdate'];
			if ($md5hash == md5($originalcheckdate . $licensing_secret_key)) {
				$localexpiry = date("Ymd", mktime(0, 0, 0, date("m"), date("d") - $localkeydays, date("Y")));
				if ($originalcheckdate > $localexpiry) {
					$localkeyvalid = true;
					$results = $localkeyresults;
					$validdomains = explode(',', $results['validdomain']);
					if (!in_array($_SERVER['SERVER_NAME'], $validdomains)) {
						$localkeyvalid = false;
						$localkeyresults['status'] = "Invalid";
						$results = array();
					}
					$validips = explode(',', $results['validip']);
					if (!in_array($usersip, $validips)) {
						$localkeyvalid = false;
						$localkeyresults['status'] = "Invalid";
						$results = array();
					}
					$validdirs = explode(',', $results['validdirectory']);
					if (!in_array($dirpath, $validdirs)) {
						$localkeyvalid = false;
						$localkeyresults['status'] = "Invalid";
						$results = array();
					}
				}
			}
		}
	}
	if (!$localkeyvalid) {
		$responseCode = 0;
		$postfields = array(
			'licensekey' => $licensekey,
			'domain' => $domain,
			'ip' => $usersip,
			'dir' => $dirpath,
		);
		if ($check_token) $postfields['check_token'] = $check_token;
		$query_string = '';
		foreach ($postfields as $k => $v) {
			$query_string .= $k . '=' . urlencode($v) . '&';
		}
		if (function_exists('curl_exec')) {
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $whmcsurl . $verifyfilepath);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $query_string);
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$data = curl_exec($ch);
			$responseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
		} else {
			$responseCodePattern = '/^HTTP\/\d+\.\d+\s+(\d+)/';
			$fp = @fsockopen($whmcsurl, 80, $errno, $errstr, 5);
			if ($fp) {
				$newlinefeed = "\r\n";
				$header = "POST " . $whmcsurl . $verifyfilepath . " HTTP/1.0" . $newlinefeed;
				$header .= "Host: " . $whmcsurl . $newlinefeed;
				$header .= "Content-type: application/x-www-form-urlencoded" . $newlinefeed;
				$header .= "Content-length: " . @strlen($query_string) . $newlinefeed;
				$header .= "Connection: close" . $newlinefeed . $newlinefeed;
				$header .= $query_string;
				$data = $line = '';
				@stream_set_timeout($fp, 20);
				@fputs($fp, $header);
				$status = @socket_get_status($fp);
				while (!@feof($fp) && $status) {
					$line = @fgets($fp, 1024);
					$patternMatches = array();
					if (
						!$responseCode
						&& preg_match($responseCodePattern, trim($line), $patternMatches)
					) {
						$responseCode = (empty($patternMatches[1])) ? 0 : $patternMatches[1];
					}
					$data .= $line;
					$status = @socket_get_status($fp);
				}
				@fclose($fp);
			}
		}
		if ($responseCode != 200) {
			$localexpiry = date("Ymd", mktime(0, 0, 0, date("m"), date("d") - ($localkeydays + $allowcheckfaildays), date("Y")));
			if ($originalcheckdate > $localexpiry) {
				$results = $localkeyresults;
			} else {
				$results = array();
				$results['status'] = "Invalid";
				$results['description'] = "Remote Check Failed";
				return $results;
			}
		} else {
			preg_match_all('/<(.*?)>([^<]+)<\/\\1>/i', $data, $matches);
			$results = array();
			foreach ($matches[1] as $k => $v) {
				$results[$v] = $matches[2][$k];
			}
		}
		if (!is_array($results)) {
			die("Invalid License Server Response");
		}
		if ($results['md5hash']) {
			if ($results['md5hash'] != md5($licensing_secret_key . $check_token)) {
				$results['status'] = "Invalid";
				$results['description'] = "MD5 Checksum Verification Failed";
				return $results;
			}
		}
		if ($results['status'] == "Active") {
			$results['checkdate'] = $checkdate;
			$data_encoded = json_encode($results);
			$data_encoded = base64_encode($data_encoded);
			$data_encoded = md5($checkdate . $licensing_secret_key) . $data_encoded;
			$data_encoded = strrev($data_encoded);
			$data_encoded = $data_encoded . md5($data_encoded . $licensing_secret_key);
			$data_encoded = wordwrap($data_encoded, 80, "\n", true);
			$results['localkey'] = $data_encoded;
		}
		$results['remotecheck'] = true;
	}
	unset($postfields, $data, $matches, $whmcsurl, $licensing_secret_key, $checkdate, $usersip, $localkeydays, $allowcheckfaildays, $md5hash);
	return $results;
}


if (0 == filesize($licfile)) {
	$locallicensefile = fopen("$licfile", "w");
	$results = popeye_check_license($licensekey, $localkey);
	$getThekey = $results['localkey'];
	fwrite($locallicensefile, $getThekey);
	fclose($locallicensefile);
} else {

	$locallicensefile = file_get_contents("$licfile");
	$localkey = $locallicensefile;
}

$results = popeye_check_license($licensekey, $localkey);


// Interpret response
switch ($results['status']) {
	case "Active":


		function set_default()
		{

			global $tpl, $url, $mkw, $kwl, $kwsp, $track_id;
			$kw = get_keywords();

			for ($i = 0; $i < 28; $i++) {

				$a1 = "link$i";
				$a2 = "tlink$i";
				$tpl->assign($a1, str_replace(' ', '-', $kw[$i]) . '.html');
				$tpl->assign($a2, $kw[$i]);
			}



			$tpl->assign('keyword', $mkw);
			$tpl->assign('title', $mkw);
			$tpl->assign('kw', str_replace(' ', '-', $mkw));
			//added
			$removeHyphen = str_replace('%27', '', $mkw);
			$dotted = str_replace(' ', '.', $removeHyphen);
			$tpl->assign('dottedlink', str_replace('%20', '.', $dotted));
			$tpl->assign('metacnt', $mkw);
			$tpl->assign('metakw', $mkw);
			$tpl->assign('kwl', $kwl);
			$tpl->assign('kwsp', $kwsp);


			if (preg_match("/ other info/", $mkw)) {

				$kwrel = str_replace('-other-info', '', str_replace(' ', '-', $mkw));
				$keywordrel = str_replace(' other info', '', $mkw);
			} elseif (preg_match("/ resources/", $mkw)) {

				$kwrel = str_replace('-resources', '', str_replace(' ', '-', $mkw));
				$keywordrel = str_replace(' resources', '', $mkw);
			} elseif (preg_match("/ free tips/", $mkw)) {

				$kwrel = str_replace('-free-tips', '', str_replace(' ', '-', $mkw));
				$keywordrel = str_replace(' free tips', '', $mkw);
			} else {

				$kwrel = str_replace(' ', '-', $mkw);
				$keywordrel = $mkw;
			}

			$tpl->assign('kwrel', $kwrel);
			$tpl->assign('keywordrel', $keywordrel);
		}

		function show_archive_old()
		{

			global $tpl, $url, $keyword_file;
			$tpl->assign('title', 'Torrent Archive');
			$contents = '';
			$contents = rf($keyword_file);
			$kw = explode("\n", $contents);
			$max = count($kw);
			$x = array();
			$j = 0;

			for ($i = 0; $i < 100; $i++) {

				if ($kw[$i]) {

					$x[$j]['kw'] = $kw[$i];
					$x[$j]['title'] = $kw[$i];
					$x[$j]['lnk'] = str_replace(' ', '-', $kw[$i] . '.html');
					$j++;
				}
			}

			$tpl->assign('sm', $x);
		}

		function show_archive()
		{

			global $tpl, $url, $keyword_file;
			$archive = preg_match("#torrent-archive(.+).html#si", $url[2], $matches);
			$archive = $matches[1];
			$tpl->assign('title', 'Torrent Archive ' . $archive);
			$contents = rf($keyword_file);
			$kw = explode("\n", $contents);
			$max = count($kw);
			$x = array();
			$j = 0;
			for ($i = 200 * ($archive - 1); $i < 2000 * $archive; $i++) {

				if ($kw[$i]) {
					$x[$j]['kw'] = $kw[$i];
					$x[$j]['title'] = $kw[$i];
					$x[$j]['lnk'] = str_replace(' ', '-', $kw[$i]);
					$j++;
				}
			}

			$tpl->assign('sm', $x);
			$tpl->assign('keyword', 'Torrent Archive ' . $archive);
			$tpl->assign('kw', 'Torrent Archive');
			$tpl->assign('metacnt', 'Torrent Archive');
			$tpl->assign('metakw', 'Torrent Archive');
		}
		function set_keywords()
		{

			global $tpl, $url, $keyword_file;
			$kw = get_keywords();
			$url = str_replace('-', ' ', $url[2]);
			$url = str_replace('.html', '', $url);
			$tpl->assign('kwlnk', str_replace(' ', '-', $kw[0]) . '.html');
			$tpl->assign('kw', $url);
			$tpl->assign('kwalt', $url);
			$tpl->assign('kwimg', str_replace(' ', '-', $url) . '.torrent');



			for ($i = 1; $i <= 6; $i++) {

				$tpl->assign('altkw' . $i, $kw[$i]);
				$tpl->assign('img' . $i, str_replace(' ', '-', $kw[$i]) . '.torrent');
				$tpl->assign('lnk' . $i, str_replace(' ', '-', $kw[$i]) . '.html');
			}



			for ($i = 7; $i <= 11; $i++) {

				$tpl->assign('kwtxt' . ($i - 6), $kw[$i]);
				$tpl->assign('kwtitle' . ($i - 6), $kw[$i]);
				$tpl->assign('kwlnk' . ($i - 6), str_replace(' ', '-', $kw[$i]) . '.html');
			}
		}

		function get_keywords()
		{

			global $keyword_file;
			$contents = '';
			$contents = rf($keyword_file);

			$round1 = str_replace("]", "", $contents);
			$round2 = str_replace("[", " ", $round1);
			$round3 = str_replace("{", " ", $round2);
			$round4 = str_replace("}", " ", $round3);
			$round5 = str_replace("#", " ", $round4);
			$round6 = str_replace("/", " ", $round5);
			$round7 = str_replace("\\", " ", $round6);
			$round8 = str_replace("<", " ", $round7);
			$round9 = str_replace(">", " ", $round8);
			$roundten = filter_var($round9, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

			$kw = explode("\n", $roundten);
			$max = count($kw);
			srand((float)microtime() * 1000000);
			$k = array();
			$x = array();
			$i = 0;

			while ($i < 28) {

				$rnd = rand() % $max;

				if (!in_array($rnd, $k)) {
					array_push($k, $rnd);
					$i++;
				}
			}

			for ($i = 0; $i < 28; $i++) $x[$i] = $kw[$k[$i]];
			return $x;
		}

		$cudate = date('j M Y');
		$tpl->assign('date', $cudate);
		//Making Numbered time
		for ($tm = 0; $tm < 28; $tm++) {

			$start = strtotime("9 January 2019");
			$end = strtotime($cudate);
			$timestamp = mt_rand($start, $end);
			//echo date("Y-m-d", $timestamp);

			$day[$tm] = date('M jS. g:i', $timestamp);

			//$tpl->assign('time', $day);
			$tpl->assign('time' . $tm, $day[$tm]);
		}

		function getUserIpAddr()
		{
			if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
				//ip from share internet
				$ip = $_SERVER['HTTP_CLIENT_IP'];
			} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
				//ip pass from proxy
				$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
			} else {
				$ip = $_SERVER['REMOTE_ADDR'];
			}
			return $ip;
		}
		$tpl->assign('userIP', getUserIpAddr());

		$verified = rand(12, 37);
		$tpl->assign('verified', $verified);
		//UPLOADERS NAMES
		$fnickt = fopen($nickname, "r");
		$twonick = fread($fnickt, filesize($nickname));
		$brest = explode("\n", $twonick);
		fclose($fnickt);
		//Making numbered uploaders names
		for ($rnk = 0; $rnk < 28; $rnk++) {
			srand((float)microtime() * 1000000);
			$not = (rand(1, sizeof($brest)) - 1);
			$nt[$rnk] = $brest[$not];
			$tpl->assign('name' . $rnk, $nt[$rnk]);
		}

		//AFFILIATE LINKS
		$openAffiliateFileForReading = fopen($affiliateFileName, "r");
		$readAffiliateFile = fread($openAffiliateFileForReading, filesize($affiliateFileName));
		$affiliateLines = explode("\n", $readAffiliateFile);
		fclose($openAffiliateFileForReading);
		//Making numbered affiliate links
		for ($affiliateLOOPNumber = 0; $affiliateLOOPNumber < 8; $affiliateLOOPNumber++) {
			srand((float)microtime() * 1000000);
			$randomaffiliatelineNumber = (rand(1, sizeof($affiliateLines)) - 1);
			$thisloopAffiliate[$affiliateLOOPNumber] = $affiliateLines[$randomaffiliatelineNumber];
			$tpl->assign('affiliate' . $affiliateLOOPNumber, $thisloopAffiliate[$affiliateLOOPNumber]);
		}

		//affiliate titles

		$openTitleAffiliateFileForReading = fopen($affiliatefilenameTitle, "r");
		$readTitleAffiliateFile = fread($openTitleAffiliateFileForReading, filesize($affiliatefilenameTitle));
		$TitleAffiliateLines = explode("\n", $readTitleAffiliateFile);
		fclose($openTitleAffiliateFileForReading);
		//Making numbered affiliate titles
		for ($TitleAffiliateLOOPNumber = 0; $TitleAffiliateLOOPNumber < 8; $TitleAffiliateLOOPNumber++) {
			srand((float)microtime() * 1000000);
			$randomTitleAffiliatelineNumber = (rand(1, sizeof($TitleAffiliateLines)) - 1);
			$thisloopTitleAffiliate[$TitleAffiliateLOOPNumber] = $TitleAffiliateLines[$randomTitleAffiliatelineNumber];
			$tpl->assign('affiliateTitle' . $TitleAffiliateLOOPNumber, $thisloopTitleAffiliate[$TitleAffiliateLOOPNumber]);
		}
		// random seeds
		for ($seeders = 0; $seeders < 28; $seeders++) {
			$rdm = rand(11, 431);
			$tpl->assign('rdm' . $seeders, $rdm);
		}

		// random leeches
		for ($leeches = 0; $leeches < 28; $leeches++) {
			$lrdm = rand(7, 71);
			$tpl->assign('lrdm' . $leeches, $lrdm);
		}

		// randomhour

		for ($timeago = 0; $timeago < 28; $timeago++) {
			$randomhour = rand(1, 23);
			$tpl->assign('randomhour' . $timeago, $randomhour);
		}

		// number of comments
		for ($iteratornoOfcomments = 0; $iteratornoOfcomments < 28; $iteratornoOfcomments++) {
			$randomnoOfcomments = rand(7, 14);
			$tpl->assign('noComments' . $iteratornoOfcomments, $randomnoOfcomments);
		}
		// making random vpnaffiliate

		$openvpnaffiliatefileforreading = fopen($vpnaffiliategroupFile, "r");
		$readthevpnaffiliatefile = fread($openvpnaffiliatefileforreading, filesize($vpnaffiliategroupFile));
		$vpnaffiliatelines = explode("\n", $readthevpnaffiliatefile);
		fclose($openvpnaffiliatefileforreading);
		for ($vpnaffiliateiterator = 0; $vpnaffiliateiterator < 28; $vpnaffiliateiterator++) {
			srand((float)microtime() * 1000000);
			$vpnaffiliatenumberoflines = (rand(1, sizeof($vpnaffiliatelines)) - 1);
			$vpnaffiliatedump[$vpnaffiliateiterator] = $vpnaffiliatelines[$vpnaffiliatenumberoflines];
			$tpl->assign('vpnaffiliate' . $vpnaffiliateiterator, $vpnaffiliatedump[$vpnaffiliateiterator]);
		}
		// making random comments

		$opencommentsfileforreading = fopen($commentsFile, "r");
		$readthecommentsfile = fread($opencommentsfileforreading, filesize($commentsFile));
		$commentslines = explode("\n", $readthecommentsfile);
		fclose($opencommentsfileforreading);
		for ($commentsiterator = 0; $commentsiterator < 28; $commentsiterator++) {
			srand((float)microtime() * 1000000);
			$commentsnumberoflines = (rand(1, sizeof($commentslines)) - 1);
			$commentsdump[$commentsiterator] = $commentslines[$commentsnumberoflines];
			$tpl->assign('authorcomment' . $commentsiterator, $commentsdump[$commentsiterator]);
		}

		// making random randomhash
		$openrandomhashfileforreading = fopen($randomhashFile, "r");
		$readtherandomhashfile = fread($openrandomhashfileforreading, filesize($randomhashFile));
		$randomhashlines = explode("\n", $readtherandomhashfile);
		fclose($openrandomhashfileforreading);
		for ($randomhashiterator = 0; $randomhashiterator < 28; $randomhashiterator++) {
			srand((float)microtime() * 1000000);
			$randomhashnumberoflines = (rand(1, sizeof($randomhashlines)) - 1);
			$randomhashdump[$randomhashiterator] = $randomhashlines[$randomhashnumberoflines];
			$tpl->assign('randomhash' . $randomhashiterator, strtoupper($randomhashdump[$randomhashiterator]));
		}

		// making random downloadaffiliate

		$opendownloadaffiliatefileforreading = fopen($downloadaffiliategroupFile, "r");
		$readthedownloadaffiliatefile = fread($opendownloadaffiliatefileforreading, filesize($downloadaffiliategroupFile));
		$downloadaffiliatelines = explode("\n", $readthedownloadaffiliatefile);
		fclose($opendownloadaffiliatefileforreading);
		for ($downloadaffiliateiterator = 0; $downloadaffiliateiterator < 28; $downloadaffiliateiterator++) {
			srand((float)microtime() * 1000000);
			$downloadaffiliatenumberoflines = (rand(1, sizeof($downloadaffiliatelines)) - 1);
			$downloadaffiliatedump[$downloadaffiliateiterator] = $downloadaffiliatelines[$downloadaffiliatenumberoflines];
			$tpl->assign('downloadaffiliate' . $downloadaffiliateiterator, $downloadaffiliatedump[$downloadaffiliateiterator]);
		}

		// making random tv groups

		$opentvfileforreading = fopen($tvgroupFile, "r");
		$readthetvfile = fread($opentvfileforreading, filesize($tvgroupFile));
		$tvlines = explode("\n", $readthetvfile);
		fclose($opentvfileforreading);
		for ($tviterator = 0; $tviterator < 28; $tviterator++) {
			srand((float)microtime() * 1000000);
			$tvnumberoflines = (rand(1, sizeof($tvlines)) - 1);
			$tvdump[$tviterator] = $tvlines[$tvnumberoflines];
			$tpl->assign('tvgroup' . $tviterator, $tvdump[$tviterator]);
		}

		// making random xxx groups

		$openxxxfileforreading = fopen($xxxgroupFile, "r");
		$readthexxxfile = fread($openxxxfileforreading, filesize($xxxgroupFile));
		$xxxlines = explode("\n", $readthexxxfile);
		fclose($openxxxfileforreading);
		for ($xxxiterator = 0; $xxxiterator < 28; $xxxiterator++) {
			srand((float)microtime() * 1000000);
			$xxxnumberoflines = (rand(1, sizeof($xxxlines)) - 1);
			$xxxdump[$xxxiterator] = $xxxlines[$xxxnumberoflines];
			$tpl->assign('xxxgroup' . $xxxiterator, $xxxdump[$xxxiterator]);
		}

		// making random riptype

		$openriptypefileforreading = fopen($riptypegroupFile, "r");
		$readtheriptypefile = fread($openriptypefileforreading, filesize($riptypegroupFile));
		$riptypelines = explode("\n", $readtheriptypefile);
		fclose($openriptypefileforreading);
		for ($riptypeiterator = 0; $riptypeiterator < 28; $riptypeiterator++) {
			srand((float)microtime() * 1000000);
			$riptypenumberoflines = (rand(1, sizeof($riptypelines)) - 1);
			$riptypedump[$riptypeiterator] = $riptypelines[$riptypenumberoflines];
			$tpl->assign('riptype' . $riptypeiterator, $riptypedump[$riptypeiterator]);
		}

		// making random games groups

		$opengamesfileforreading = fopen($gamesgroupFile, "r");
		$readthegamesfile = fread($opengamesfileforreading, filesize($gamesgroupFile));
		$gameslines = explode("\n", $readthegamesfile);
		fclose($opengamesfileforreading);
		for ($gamesiterator = 0; $gamesiterator < 28; $gamesiterator++) {
			srand((float)microtime() * 1000000);
			$gamesnumberoflines = (rand(1, sizeof($gameslines)) - 1);
			$gamesdump[$gamesiterator] = $gameslines[$gamesnumberoflines];
			$tpl->assign('gamesgroup' . $gamesiterator, $gamesdump[$gamesiterator]);
		}

		// making random app groups

		$openappfileforreading = fopen($appgroupFile, "r");
		$readtheappfile = fread($openappfileforreading, filesize($appgroupFile));
		$applines = explode("\n", $readtheappfile);
		fclose($openappfileforreading);
		for ($appiterator = 0; $appiterator < 28; $appiterator++) {
			srand((float)microtime() * 1000000);
			$appnumberoflines = (rand(1, sizeof($applines)) - 1);
			$appdump[$appiterator] = $applines[$appnumberoflines];
			$tpl->assign('appgroup' . $appiterator, $appdump[$appiterator]);
		}
		// making random musicgroups

		$openmusicfileforreading = fopen($musicgroupFile, "r");
		$readthemusicfile = fread($openmusicfileforreading, filesize($musicgroupFile));
		$musiclines = explode("\n", $readthemusicfile);
		fclose($openmusicfileforreading);
		for ($musiciterator = 0; $musiciterator < 28; $musiciterator++) {
			srand((float)microtime() * 1000000);
			$musicnumberoflines = (rand(1, sizeof($musiclines)) - 1);
			$musicdump[$musiciterator] = $musiclines[$musicnumberoflines];
			$tpl->assign('musicgroup' . $musiciterator, $musicdump[$musiciterator]);
		}
		// making random moviegroups

		$openmoviefileforreading = fopen($moviegroupFile, "r");
		$readthemoviefile = fread($openmoviefileforreading, filesize($moviegroupFile));
		$movielines = explode("\n", $readthemoviefile);
		fclose($openmoviefileforreading);
		for ($movieiterator = 0; $movieiterator < 28; $movieiterator++) {
			srand((float)microtime() * 1000000);
			$movienumberoflines = (rand(1, sizeof($movielines)) - 1);
			$moviedump[$movieiterator] = $movielines[$movienumberoflines];
			$tpl->assign('moviegroup' . $movieiterator, $moviedump[$movieiterator]);
		}

		$manainda = '
<input type="radio" name="ans" value="ans1" checked onclick="window.location=\'/applications/\'" />Applications

 

<input type="radio" name="ans" value="ans2"  onclick="window.location=\'/games/\'" />  Games

<input type="radio" name="ans" value="ans3" onclick="window.location=\'/music/\'" />  Music
<br>
<input type="radio" name="ans" value="ans4" onclick="window.location=\'/xxx/\'" />  XXX

<input type="radio" name="ans" value="ans5" onclick="window.location=\'/movies/\'" />  Movies

<input type="radio" name="ans" value="ans6" onclick="window.location=\'/tv-shows/\'" />  Tv Series

';

		$tpl->assign('searchbar1', $manainda);

		$manainds = '

<input type="radio" name="ans" value="ans1" onclick="window.location=\'/applications/\'" />Applications

 

<input type="radio" name="ans" value="ans2" checked onclick="window.location=\'/games/\'" />  Games

<input type="radio" name="ans" value="ans3" onclick="window.location=\'/music/\'" />  Music
<br>
<input type="radio" name="ans" value="ans4" onclick="window.location=\'/xxx/\'" />  XXX

<input type="radio" name="ans" value="ans5" onclick="window.location=\'/movies/\'" />  Movies

<input type="radio" name="ans" value="ans6" onclick="window.location=\'/tv-shows/\'" />  Tv Series

';

		$tpl->assign('searchbar2', $manainds);

		$manaindf = '
<input type="radio" name="ans" value="ans1" onclick="window.location=\'/applications/\'" />Applications

 

<input type="radio" name="ans" value="ans2"  onclick="window.location=\'/games/\'" />  Games

<input type="radio" name="ans" value="ans3" checked onclick="window.location=\'/music/\'" />  Music
<br>
<input type="radio" name="ans" value="ans4" onclick="window.location=\'/xxx/\'" />  XXX

<input type="radio" name="ans" value="ans5" onclick="window.location=\'/movies/\'" />  Movies

<input type="radio" name="ans" value="ans6" onclick="window.location=\'/tv-shows/\'" />  Tv Series

';

		$tpl->assign('searchbar3', $manaindf);
		$manaindg = '

<input type="radio" name="ans" value="ans1" onclick="window.location=\'/applications/\'" />Applications

 

<input type="radio" name="ans" value="ans2"  onclick="window.location=\'/games/\'" />  Games

<input type="radio" name="ans" value="ans3" onclick="window.location=\'/music/\'" />  Music
<br>
<input type="radio" name="ans" value="ans4" checked onclick="window.location=\'/xxx/\'" />  XXX

<input type="radio" name="ans" value="ans5" onclick="window.location=\'/movies/\'" />  Movies

<input type="radio" name="ans" value="ans6" onclick="window.location=\'/tv-shows/\'" />  Tv Series

';

		$tpl->assign('searchbar4', $manaindg);

		$manaindh = '

<input type="radio" name="ans" value="ans1" onclick="window.location=\'/applications/\'" />Applications

 

<input type="radio" name="ans" value="ans2"  onclick="window.location=\'/games/\'" />  Games

<input type="radio" name="ans" value="ans3" onclick="window.location=\'/music/\'" />  Music
<br>
<input type="radio" name="ans" value="ans4" onclick="window.location=\'/xxx/\'" />  XXX

<input type="radio" name="ans" value="ans5" checked onclick="window.location=\'/movies/\'" />  Movies

<input type="radio" name="ans" value="ans6" onclick="window.location=\'/tv-shows/\'" />  Tv Series

';

		$tpl->assign('searchbar5', $manaindh);

		$manaindl = '

<input type="radio" name="ans" value="ans1" onclick="window.location=\'/applications/\'" />Applications

 

<input type="radio" name="ans" value="ans2"  onclick="window.location=\'/games/\'" />  Games

<input type="radio" name="ans" value="ans3" onclick="window.location=\'/music/\'" />  Music
<br>
<input type="radio" name="ans" value="ans4" onclick="window.location=\'/xxx/\'" />  XXX

<input type="radio" name="ans" value="ans5" onclick="window.location=\'/movies/\'" />  Movies

<input type="radio" name="ans" value="ans6" checked onclick="window.location=\'/tv-shows/\'" />  Tv Series

';

		$tpl->assign('searchbar6', $manaindl);

		ob_start();

		$rss_tags = array(
			'title',

		);
		$rss_item_tag = 'item';

		function rss_to_array($tag, $array, $url)
		{
			global $tpl, $rss_tags, $rss_item_tag, $rss_to_array, $rssfeed, $rss_url, $rss_array, $items, $item;

			$doc = new DOMdocument();
			$doc->load($url);
			$rss_array = array();
			$items = array();
			foreach ($doc->getElementsByTagName($tag) as $node) {
				foreach ($array as $key => $value) {
					$items[$value] = $node->getElementsByTagName($value)->item(0)->nodeValue;
				}
				array_push($rss_array, $items);
			}
		}
		$rssfeed = rss_to_array($rss_item_tag, $rss_tags, $rss_url);
		print_r($rssfeed);
		function cleanRss($targetrss, $targetvar)
		{
			$round1 = str_replace("]", "", $targetrss);
			$round2 = str_replace("[", "", $round1);
			$round3 = str_replace("{", "", $round2);
			$round4 = str_replace("}", "", $round3);
			$round5 = str_replace("#", "", $round4);
			$round6 = str_replace("/", "", $round5);
			$round7 = str_replace("\\", "", $round6);
			$round8 = str_replace("<", "", $round7);
			$round9 = str_replace(">", "", $round8);
			$roundten = filter_var($round9, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
			$targetvar = $roundten;
			return $targetvar;
		}

		for ($rssparser = 0; $rssparser < 26; $rssparser++) {
			$tors = 'tors';

			${$tors . $rssparser} = $rss_array[$rssparser]['title'];

			$tpl->assign('rsstorrent' . $rssparser, cleanRss(${$tors . $rssparser}, ${$tors . $rssparser}));

			$cleanLink = cleanRss(${$tors . $rssparser}, ${$tors . $rssparser});

			$tpl->assign('rsstorrentl' . $rssparser, str_replace(" ", "-", $cleanLink));
		}

		ob_clean();

		// finished torrent rss

		function get_rnd()
		{

			global $kwr;
			$n = count($kwr);
			$r = rand(0, $n - 1);
			return $kwr[$r];
		}

		function rf($file)
		{

			$contents = '';
			$fp = fopen($file, 'r');
			if ($fp) {
				while (!feof($fp)) {
					$contents .= fread($fp, 1024);
				}
			}
			fclose($fp);
			return $contents;
		}
		// set right footer button
		$r = $_SERVER['REQUEST_URI'];
		$r = explode('/', $r);
		$r = array_filter($r);
		$r = array_merge($r, array());
		$r = preg_replace('/\?.*/', '', $r);

		$endofurl = $r[1];

		switch ($endofurl) {

				// PAGE.PHP FOOTER BUTTON

			case 'page2.php':
				$activeButton = '
<li><a href="index.php">1</a></li>
<li class="active"><a href="page2.php">2</a></li>
<li><a href="page3.php">3</a></li>
<li><a href="page4.php">4</a></li>
<li><a href="page5.php">5</a></li>
<li><a href="page6.php">6</a></li>
<li><a href="page7.php">7</a></li>
<li><a href="page7.php">8</a></li>
<li><a href="page9.php">&gt;&gt;</a></li>
<li class="last"><a href="page10.php">Last</a></li>
';

				$tpl->assign('activeButton', $activeButton);
				break;

			case 'page3.php':
				$activeButton = '
<li><a href="index.php">1</a></li>
<li><a href="page2.php">2</a></li>
<li class="active"><a href="page3.php">3</a></li>
<li><a href="page4.php">4</a></li>
<li><a href="page5.php">5</a></li>
<li><a href="page6.php">6</a></li>
<li><a href="page7.php">7</a></li>
<li><a href="page8.php">8</a></li>
<li><a href="page9.php">&gt;&gt;</a></li>
<li class="last"><a href="page10.php">Last</a></li>
';

				$tpl->assign('activeButton', $activeButton);
				break;

			case 'page4.php':
				$activeButton = '
<li><a href="index.php">1</a></li>
<li><a href="page2.php">2</a></li>
<li><a href="page3.php">3</a></li>
<li class="active"><a href="page4.php">4</a></li>
<li><a href="page5.php">5</a></li>
<li><a href="page6.php">6</a></li>
<li><a href="page7.php">7</a></li>
<li><a href="page8.php">8</a></li>
<li><a href="page9.php">&gt;&gt;</a></li>
<li class="last"><a href="page10.php">Last</a></li>
';

				$tpl->assign('activeButton', $activeButton);
				break;

			case 'page5.php':
				$activeButton = '
<li><a href="index.php">1</a></li>
<li><a href="page2.php">2</a></li>
<li><a href="page3.php">3</a></li>
<li><a href="page4.php">4</a></li>
<li class="active"><a href="page5.php">5</a></li>
<li><a href="page6.php">6</a></li>
<li><a href="page7.php">7</a></li>
<li><a href="page8.php">8</a></li>
<li><a href="page9.php">&gt;&gt;</a></li>
<li class="last"><a href="page10.php">Last</a></li>
';

				$tpl->assign('activeButton', $activeButton);
				break;
			case 'page6.php':
				$activeButton = '
<li><a href="index.php">1</a></li>
<li><a href="page2.php">2</a></li>
<li><a href="page3.php">3</a></li>
<li><a href="page4.php">4</a></li>
<li><a href="page5.php">5</a></li>
<li class="active"><a href="page6.php">6</a></li>
<li><a href="page7.php">7</a></li>
<li><a href="page8.php">8</a></li>
<li><a href="page9.php">&gt;&gt;</a></li>
<li class="last"><a href="page10.php">Last</a></li>
';

				$tpl->assign('activeButton', $activeButton);
				break;
			case 'page7.php':
				$activeButton = '
<li><a href="index.php">1</a></li>
<li><a href="page2.php">2</a></li>
<li><a href="page3.php">3</a></li>
<li><a href="page4.php">4</a></li>
<li><a href="page5.php">5</a></li>
<li><a href="page6.php">6</a></li>
<li class="active"><a href="page7.php">7</a></li>
<li><a href="page8.php">8</a></li>
<li><a href="page9.php">&gt;&gt;</a></li>
<li class="last"><a href="page10.php">Last</a></li>
';

				$tpl->assign('activeButton', $activeButton);
				break;
			case 'page8.php':
				$activeButton = '
<li><a href="index.php">1</a></li>
<li><a href="page2.php">2</a></li>
<li><a href="page3.php">3</a></li>
<li><a href="page4.php">4</a></li>
<li><a href="page5.php">5</a></li>
<li><a href="page6.php">6</a></li>
<li><a href="page7.php">7</a></li>
<li class="active"><a href="page8.php">8</a></li>
<li><a href="page9.php">&gt;&gt;</a></li>
<li class="last"><a href="page10.php">Last</a></li>
';

				$tpl->assign('activeButton', $activeButton);
				break;

			case 'page9.php':
				$activeButton = '
<li><a href="index.php">1</a></li>
<li><a href="page2.php">2</a></li>
<li><a href="page3.php">3</a></li>
<li><a href="page4.php">4</a></li>
<li><a href="page5.php">5</a></li>
<li><a href="page6.php">6</a></li>
<li><a href="page7.php">7</a></li>
<li><a href="page8.php">8</a></li>
<li class="active"><a href="page9.php">&gt;&gt;</a></li>
<li class="last"><a href="page10.php">Last</a></li>
';

				$tpl->assign('activeButton', $activeButton);
				break;
			case 'page10.php':
				$activeButton = '
<li><a href="index.php">1</a></li>
<li><a href="page2.php">2</a></li>
<li><a href="page3.php">3</a></li>
<li><a href="page4.php">4</a></li>
<li><a href="page5.php">5</a></li>
<li><a href="page6.php">6</a></li>
<li><a href="page7.php">7</a></li>
<li><a href="page8.php">8</a></li>
<li<a href="page9.php">&gt;&gt;</a></li>
<li class="active">><a href="page10.php">Last</a></li>
';

				$tpl->assign('activeButton', $activeButton);
				break;
				//VERIFIED PAGE FOOTER BUTTON

			case 'verified.php':
				$activeButton = '
<li class="active"><a href="verified.php">1</a></li>
<li><a href="vpage2.php">2</a></li>
<li><a href="vpage3.php">3</a></li>
<li><a href="vpage4.php">4</a></li>
<li><a href="vpage5.php">5</a></li>
<li><a href="vpage6.php">6</a></li>
<li><a href="vpage7.php">7</a></li>
<li><a href="vpage7.php">8</a></li>
<li><a href="vpage9.php">&gt;&gt;</a></li>
<li class="last"><a href="vpage10.php">Last</a></li>
';
				$pagenumber = ' Page 1';
				$tpl->assign('pnumber', $pagenumber);

				$tpl->assign('activeButton', $activeButton);
				break;
			case 'vpage2.php':
				$activeButton = '
<li><a href="verified.php">1</a></li>
<li class="active"><a href="vpage2.php">2</a></li>
<li><a href="vpage3.php">3</a></li>
<li><a href="vpage4.php">4</a></li>
<li><a href="vpage5.php">5</a></li>
<li><a href="vpage6.php">6</a></li>
<li><a href="vpage7.php">7</a></li>
<li><a href="vpage7.php">8</a></li>
<li><a href="vpage9.php">&gt;&gt;</a></li>
<li class="last"><a href="vpage10.php">Last</a></li>
';
				$pagenumber = ' Page 2';
				$tpl->assign('pnumber', $pagenumber);
				$tpl->assign('activeButton', $activeButton);
				break;

			case 'vpage3.php':
				$activeButton = '
<li><a href="verified.php">1</a></li>
<li><a href="vpage2.php">2</a></li>
<li class="active"><a href="vpage3.php">3</a></li>
<li><a href="vpage4.php">4</a></li>
<li><a href="vpage5.php">5</a></li>
<li><a href="vpage6.php">6</a></li>
<li><a href="vpage7.php">7</a></li>
<li><a href="vpage8.php">8</a></li>
<li><a href="vpage9.php">&gt;&gt;</a></li>
<li class="last"><a href="vpage10.php">Last</a></li>
';
				$pagenumber = ' Page 3';
				$tpl->assign('pnumber', $pagenumber);
				$tpl->assign('activeButton', $activeButton);
				break;

			case 'vpage4.php':
				$activeButton = '
<li><a href="verified.php">1</a></li>
<li><a href="vpage2.php">2</a></li>
<li><a href="vpage3.php">3</a></li>
<li class="active"><a href="vpage4.php">4</a></li>
<li><a href="vpage5.php">5</a></li>
<li><a href="vpage6.php">6</a></li>
<li><a href="vpage7.php">7</a></li>
<li><a href="vpage8.php">8</a></li>
<li><a href="vpage9.php">&gt;&gt;</a></li>
<li class="last"><a href="vpage10.php">Last</a></li>
';
				$pagenumber = ' Page 4';
				$tpl->assign('pnumber', $pagenumber);
				$tpl->assign('activeButton', $activeButton);
				break;

			case 'vpage5.php':
				$activeButton = '
<li><a href="verified.php">1</a></li>
<li><a href="vpage2.php">2</a></li>
<li><a href="vpage3.php">3</a></li>
<li><a href="vpage4.php">4</a></li>
<li class="active"><a href="vpage5.php">5</a></li>
<li><a href="vpage6.php">6</a></li>
<li><a href="vpage7.php">7</a></li>
<li><a href="vpage8.php">8</a></li>
<li><a href="vpage9.php">&gt;&gt;</a></li>
<li class="last"><a href="vpage10.php">Last</a></li>
';
				$pagenumber = ' Page 5';
				$tpl->assign('pnumber', $pagenumber);
				$tpl->assign('activeButton', $activeButton);
				break;
			case 'vpage6.php':
				$activeButton = '
<li><a href="verified.php">1</a></li>
<li><a href="vpage2.php">2</a></li>
<li><a href="vpage3.php">3</a></li>
<li><a href="vpage4.php">4</a></li>
<li><a href="vpage5.php">5</a></li>
<li class="active"><a href="vpage6.php">6</a></li>
<li><a href="vpage7.php">7</a></li>
<li><a href="vpage8.php">8</a></li>
<li><a href="vpage9.php">&gt;&gt;</a></li>
<li class="last"><a href="vpage10.php">Last</a></li>
';
				$pagenumber = ' Page 6';
				$tpl->assign('pnumber', $pagenumber);
				$tpl->assign('activeButton', $activeButton);
				break;
			case 'vpage7.php':
				$activeButton = '
<li><a href="verified.php">1</a></li>
<li><a href="vpage2.php">2</a></li>
<li><a href="vpage3.php">3</a></li>
<li><a href="vpage4.php">4</a></li>
<li><a href="vpage5.php">5</a></li>
<li><a href="vpage6.php">6</a></li>
<li class="active"><a href="vpage7.php">7</a></li>
<li><a href="vpage8.php">8</a></li>
<li><a href="vpage9.php">&gt;&gt;</a></li>
<li class="last"><a href="vpage10.php">Last</a></li>
';
				$pagenumber = ' Page 7';
				$tpl->assign('pnumber', $pagenumber);
				$tpl->assign('activeButton', $activeButton);
				break;
			case 'vpage8.php':
				$activeButton = '
<li><a href="verified.php">1</a></li>
<li><a href="vpage2.php">2</a></li>
<li><a href="vpage3.php">3</a></li>
<li><a href="vpage4.php">4</a></li>
<li><a href="vpage5.php">5</a></li>
<li><a href="vpage6.php">6</a></li>
<li><a href="vpage7.php">7</a></li>
<li class="active"><a href="vpage8.php">8</a></li>
<li><a href="vpage9.php">&gt;&gt;</a></li>
<li class="last"><a href="vpage10.php">Last</a></li>
';
				$pagenumber = ' Page 8';
				$tpl->assign('pnumber', $pagenumber);
				$tpl->assign('activeButton', $activeButton);
				break;

			case 'vpage9.php':
				$activeButton = '
<li><a href="verified.php">1</a></li>
<li><a href="vpage2.php">2</a></li>
<li><a href="vpage3.php">3</a></li>
<li><a href="vpage4.php">4</a></li>
<li><a href="vpage5.php">5</a></li>
<li><a href="vpage6.php">6</a></li>
<li><a href="vpage7.php">7</a></li>
<li><a href="vpage8.php">8</a></li>
<li class="active"><a href="vpage9.php">&gt;&gt;</a></li>
<li class="last"><a href="vpage10.php">Last</a></li>
';
				$pagenumber = ' Page 9';
				$tpl->assign('pnumber', $pagenumber);
				$tpl->assign('activeButton', $activeButton);
				break;
			case 'vpage10.php':
				$activeButton = '
<li><a href="verified.php">1</a></li>
<li><a href="vpage2.php">2</a></li>
<li><a href="vpage3.php">3</a></li>
<li><a href="vpage4.php">4</a></li>
<li><a href="vpage5.php">5</a></li>
<li><a href="vpage6.php">6</a></li>
<li><a href="vpage7.php">7</a></li>
<li><a href="vpage8.php">8</a></li>
<li<a href="vpage9.php">&gt;&gt;</a></li>
<li class="active">><a href="vpage10.php">Last</a></li>
';
				$pagenumber = ' Page 10';
				$tpl->assign('pnumber', $pagenumber);
				$tpl->assign('activeButton', $activeButton);
				break;
		}

		break;
	case "Invalid":
		die("License key is Invalid");
		break;
	case "Expired":
		die("License key is Expired");
		break;
	case "Suspended":
		die("License key is Suspended");
		break;
	default:
		die("Invalid Response");
		break;
}
