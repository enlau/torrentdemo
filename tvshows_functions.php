<?php
require_once 'defaultmaster.php';

/*
|--------------------------------------------------------------------------
| Section-specific URL helpers
|--------------------------------------------------------------------------
| Intentionally prefixed with "tvshowse_" so they do not collide with
| helpers from other root section files.
|--------------------------------------------------------------------------
*/
if (!function_exists('tvshowse_request_uri')) {
    function tvshowse_request_uri()
    {
        return $_SERVER['REQUEST_URI'] ?? '';
    }
}

if (!function_exists('tvshowse_request_path')) {
    function tvshowse_request_path()
    {
        $path = parse_url(tvshowse_request_uri(), PHP_URL_PATH);
        return is_string($path) ? $path : '';
    }
}

if (!function_exists('tvshowse_path_parts')) {
    function tvshowse_path_parts()
    {
        $path = trim(tvshowse_request_path(), '/');

        if ($path === '') {
            return array();
        }

        return array_values(array_filter(explode('/', $path), 'strlen'));
    }
}

if (!function_exists('tvshowse_last_segment')) {
    function tvshowse_last_segment()
    {
        $parts = tvshowse_path_parts();

        if (empty($parts)) {
            return '';
        }

        return end($parts);
    }
}

/*
|--------------------------------------------------------------------------
| Main section helpers
|--------------------------------------------------------------------------
*/
function set_default_tvshowse()
{
    global $tpl, $url, $mkw, $kwl, $kwsp, $track_id, $defaulttitle;

    $mkw  = (string)($mkw ?? ($defaulttitle ?? ''));
    $kwl  = (string)($kwl ?? '');
    $kwsp = (string)($kwsp ?? '');

    $kw = get_tvshowse_keywords();

    for ($i = 0; $i < 28; $i++) {
        $a1 = "tvshowslink$i";
        $a2 = "tvshowstlink$i";
        $tpl->assign($a1, '/tv-shows/' . str_replace(' ', '-', $kw[$i] ?? '') . '.html');
        $tpl->assign($a2, $kw[$i] ?? '');
    }

    $tpl->assign('keyword', $mkw);
    $tpl->assign('title', $mkw);
    $tpl->assign('kw', str_replace(' ', '-', $mkw));

    $removeHyphen = str_replace('%27', '', $mkw);
    $dotted = str_replace(' ', '.', $removeHyphen);
    $tpl->assign('dottedlink', str_replace('%20', '.', $dotted));

    $tpl->assign('metacnt', $mkw);
    $tpl->assign('metakw', $mkw);
    $tpl->assign('kwl', $kwl);
    $tpl->assign('kwsp', $kwsp);

    if ($mkw !== '' && preg_match("/ other info/", $mkw)) {
        $kwrel = str_replace('-other-info', '', str_replace(' ', '-', $mkw));
        $keywordrel = str_replace(' other info', '', $mkw);
    } elseif ($mkw !== '' && preg_match("/ resources/", $mkw)) {
        $kwrel = str_replace('-resources', '', str_replace(' ', '-', $mkw));
        $keywordrel = str_replace(' resources', '', $mkw);
    } elseif ($mkw !== '' && preg_match("/ free tips/", $mkw)) {
        $kwrel = str_replace('-free-tips', '', str_replace(' ', '-', $mkw));
        $keywordrel = str_replace(' free tips', '', $mkw);
    } else {
        $kwrel = str_replace(' ', '-', $mkw);
        $keywordrel = $mkw;
    }

    $tpl->assign('kwrel', $kwrel);
    $tpl->assign('keywordrel', $keywordrel);
}

function show_archive_tvshowse_old()
{
    global $tpl, $url, $tvshowse_file;

    $tpl->assign('title', 'Torrent Archive');

    $contents = rf_tvshowse($tvshowse_file);
    $kw = explode("\n", $contents);

    $x = array();
    $j = 0;

    for ($i = 0; $i < 100; $i++) {
        if (!empty($kw[$i])) {
            $x[$j]['kw'] = $kw[$i];
            $x[$j]['title'] = $kw[$i];
            $x[$j]['lnk'] = str_replace(' ', '-', $kw[$i] . '.html');
            $j++;
        }
    }

    $tpl->assign('sm', $x);
}

function show_archive_tvshowse()
{
    global $tpl, $url, $tvshowse_file;

    $segment = tvshowse_last_segment();

    preg_match("#torrent-archive(.+)\.html#si", $segment, $matches);
    $archive = $matches[1] ?? '1';

    if ($archive === '') {
        $archive = '1';
    }

    $archiveNumber = (int)preg_replace('/\D+/', '', $archive);
    if ($archiveNumber < 1) {
        $archiveNumber = 1;
    }

    $tpl->assign('title', 'Torrent Archive ' . $archiveNumber);

    $contents = rf_tvshowse($tvshowse_file);
    $kw = explode("\n", $contents);

    $x = array();
    $j = 0;

    for ($i = 200 * ($archiveNumber - 1); $i < 2000 * $archiveNumber; $i++) {
        if (!empty($kw[$i])) {
            $x[$j]['kw'] = $kw[$i];
            $x[$j]['title'] = $kw[$i];
            $x[$j]['lnk'] = str_replace(' ', '-', $kw[$i]);
            $j++;
        }
    }

    $tpl->assign('sm', $x);
    $tpl->assign('keyword', 'Torrent Archive ' . $archiveNumber);
    $tpl->assign('kw', 'Torrent Archive');
    $tpl->assign('metacnt', 'Torrent Archive');
    $tpl->assign('metakw', 'Torrent Archive');
}

function set_keywords_tvshowse()
{
    global $tpl, $url, $tvshowse_file;

    $kw = get_tvshowse_keywords();
    $segment = tvshowse_last_segment();

    $segment = str_replace('-', ' ', $segment);
    $segment = str_replace('.html', '', $segment);

    $tpl->assign('kwlnk', str_replace(' ', '-', ($kw[0] ?? '')) . '.html');
    $tpl->assign('kw', $segment);
    $tpl->assign('kwalt', $segment);
    $tpl->assign('kwimg', str_replace(' ', '-', $segment) . '.torrent');

    for ($i = 1; $i <= 6; $i++) {
        $tpl->assign('altkw' . $i, $kw[$i] ?? '');
        $tpl->assign('img' . $i, str_replace(' ', '-', ($kw[$i] ?? '')) . '.torrent');
        $tpl->assign('lnk' . $i, str_replace(' ', '-', ($kw[$i] ?? '')) . '.html');
    }

    for ($i = 7; $i <= 11; $i++) {
        $tpl->assign('kwtxt' . ($i - 6), $kw[$i] ?? '');
        $tpl->assign('kwtitle' . ($i - 6), $kw[$i] ?? '');
        $tpl->assign('kwlnk' . ($i - 6), str_replace(' ', '-', ($kw[$i] ?? '')) . '.html');
    }
}

function get_tvshowse_keywords()
{
    global $tvshowse_file;

    $contents = rf_tvshowse($tvshowse_file);

    $round1 = str_replace("]", "", $contents);
    $round2 = str_replace("[", " ", $round1);
    $round3 = str_replace("{", " ", $round2);
    $round4 = str_replace("}", " ", $round3);
    $round5 = str_replace("#", " ", $round4);
    $round6 = str_replace("/", " ", $round5);
    $round7 = str_replace("\\", " ", $round6);
    $round8 = str_replace("<", " ", $round7);
    $round9 = str_replace(">", " ", $round8);

    /*
    |--------------------------------------------------------------------------
    | PHP 8-safe replacement for FILTER_SANITIZE_STRING
    |--------------------------------------------------------------------------
    */
    $roundten = trim(strip_tags($round9));

    $kw = explode("\n", $roundten);
    $max = count($kw);

    srand((float)microtime() * 1000000);

    $k = array();
    $x = array();
    $i = 0;

    while ($i < 28 && $max > 0) {
        $rnd = rand() % $max;

        if (!in_array($rnd, $k)) {
            array_push($k, $rnd);
            $i++;
        }
    }

    for ($i = 0; $i < 28; $i++) {
        $x[$i] = $kw[$k[$i]] ?? '';
    }

    return $x;
}

/*
|--------------------------------------------------------------------------
| Shared template assignments
|--------------------------------------------------------------------------
*/
$cudate = date('j M Y');
$tpl->assign('date', $cudate);

for ($tm = 0; $tm < 28; $tm++) {
    $start = strtotime("9 January 2019");
    $end = strtotime($cudate);
    $timestamp = mt_rand($start, $end);

    $day[$tm] = date('M jS. g:i', $timestamp);
    $tpl->assign('time' . $tm, $day[$tm]);
}

$verified = rand(12, 37);
$tpl->assign('verified', $verified);

/*
|--------------------------------------------------------------------------
| Uploaders names
|--------------------------------------------------------------------------
*/
$twonick = '';
if (is_string($nickname) && $nickname !== '' && file_exists($nickname)) {
    $fnickt = fopen($nickname, "r");
    $twonick = $fnickt ? fread($fnickt, filesize($nickname)) : '';
    if ($fnickt) {
        fclose($fnickt);
    }
}
$brest = explode("\n", $twonick);

for ($rnk = 0; $rnk < 28; $rnk++) {
    srand((float)microtime() * 1000000);
    $not = (rand(1, max(1, sizeof($brest))) - 1);
    $nt[$rnk] = $brest[$not] ?? '';
    $tpl->assign('name' . $rnk, $nt[$rnk]);
}

/*
|--------------------------------------------------------------------------
| Affiliate links
|--------------------------------------------------------------------------
*/
$readAffiliateFile = '';
if (is_string($affiliateFileName) && $affiliateFileName !== '' && file_exists($affiliateFileName)) {
    $openAffiliateFileForReading = fopen($affiliateFileName, "r");
    $readAffiliateFile = $openAffiliateFileForReading ? fread($openAffiliateFileForReading, filesize($affiliateFileName)) : '';
    if ($openAffiliateFileForReading) {
        fclose($openAffiliateFileForReading);
    }
}
$affiliateLines = explode("\n", $readAffiliateFile);

for ($affiliateLOOPNumber = 0; $affiliateLOOPNumber < 8; $affiliateLOOPNumber++) {
    srand((float)microtime() * 1000000);
    $randomaffiliatelineNumber = (rand(1, max(1, sizeof($affiliateLines))) - 1);
    $thisloopAffiliate[$affiliateLOOPNumber] = $affiliateLines[$randomaffiliatelineNumber] ?? '';
    $tpl->assign('affiliate' . $affiliateLOOPNumber, $thisloopAffiliate[$affiliateLOOPNumber]);
}

/*
|--------------------------------------------------------------------------
| Affiliate titles
|--------------------------------------------------------------------------
*/
$readTitleAffiliateFile = '';
if (is_string($affiliatefilenameTitle) && $affiliatefilenameTitle !== '' && file_exists($affiliatefilenameTitle)) {
    $openTitleAffiliateFileForReading = fopen($affiliatefilenameTitle, "r");
    $readTitleAffiliateFile = $openTitleAffiliateFileForReading ? fread($openTitleAffiliateFileForReading, filesize($affiliatefilenameTitle)) : '';
    if ($openTitleAffiliateFileForReading) {
        fclose($openTitleAffiliateFileForReading);
    }
}
$TitleAffiliateLines = explode("\n", $readTitleAffiliateFile);

for ($TitleAffiliateLOOPNumber = 0; $TitleAffiliateLOOPNumber < 8; $TitleAffiliateLOOPNumber++) {
    srand((float)microtime() * 1000000);
    $randomTitleAffiliatelineNumber = (rand(1, max(1, sizeof($TitleAffiliateLines))) - 1);
    $thisloopTitleAffiliate[$TitleAffiliateLOOPNumber] = $TitleAffiliateLines[$randomTitleAffiliatelineNumber] ?? '';
    $tpl->assign('affiliateTitle' . $TitleAffiliateLOOPNumber, $thisloopTitleAffiliate[$TitleAffiliateLOOPNumber]);
}

/*
|--------------------------------------------------------------------------
| Random seeds / leeches / hours
|--------------------------------------------------------------------------
*/
for ($seeders = 0; $seeders < 28; $seeders++) {
    $rdm = rand(11, 431);
    $tpl->assign('rdm' . $seeders, $rdm);
}

for ($leeches = 0; $leeches < 28; $leeches++) {
    $lrdm = rand(7, 71);
    $tpl->assign('lrdm' . $leeches, $lrdm);
}

for ($timeago = 0; $timeago < 28; $timeago++) {
    $randomhour = rand(1, 23);
    $tpl->assign('randomhour' . $timeago, $randomhour);
}

/*
|--------------------------------------------------------------------------
| VPN affiliate
|--------------------------------------------------------------------------
*/
$readthevpnaffiliatefile = '';
if (is_string($vpnaffiliategroupFile) && $vpnaffiliategroupFile !== '' && file_exists($vpnaffiliategroupFile)) {
    $openvpnaffiliatefileforreading = fopen($vpnaffiliategroupFile, "r");
    $readthevpnaffiliatefile = $openvpnaffiliatefileforreading ? fread($openvpnaffiliatefileforreading, filesize($vpnaffiliategroupFile)) : '';
    if ($openvpnaffiliatefileforreading) {
        fclose($openvpnaffiliatefileforreading);
    }
}
$vpnaffiliatelines = explode("\n", $readthevpnaffiliatefile);

for ($vpnaffiliateiterator = 0; $vpnaffiliateiterator < 28; $vpnaffiliateiterator++) {
    srand((float)microtime() * 1000000);
    $vpnaffiliatenumberoflines = (rand(1, max(1, sizeof($vpnaffiliatelines))) - 1);
    $vpnaffiliatedump[$vpnaffiliateiterator] = $vpnaffiliatelines[$vpnaffiliatenumberoflines] ?? '';
    $tpl->assign('vpnaffiliate' . $vpnaffiliateiterator, $vpnaffiliatedump[$vpnaffiliateiterator]);
}

/*
|--------------------------------------------------------------------------
| Download affiliate
|--------------------------------------------------------------------------
*/
$readthedownloadaffiliatefile = '';
if (is_string($downloadaffiliategroupFile) && $downloadaffiliategroupFile !== '' && file_exists($downloadaffiliategroupFile)) {
    $opendownloadaffiliatefileforreading = fopen($downloadaffiliategroupFile, "r");
    $readthedownloadaffiliatefile = $opendownloadaffiliatefileforreading ? fread($opendownloadaffiliatefileforreading, filesize($downloadaffiliategroupFile)) : '';
    if ($opendownloadaffiliatefileforreading) {
        fclose($opendownloadaffiliatefileforreading);
    }
}
$downloadaffiliatelines = explode("\n", $readthedownloadaffiliatefile);

for ($downloadaffiliateiterator = 0; $downloadaffiliateiterator < 28; $downloadaffiliateiterator++) {
    srand((float)microtime() * 1000000);
    $downloadaffiliatenumberoflines = (rand(1, max(1, sizeof($downloadaffiliatelines))) - 1);
    $downloadaffiliatedump[$downloadaffiliateiterator] = $downloadaffiliatelines[$downloadaffiliatenumberoflines] ?? '';
    $tpl->assign('downloadaffiliate' . $downloadaffiliateiterator, $downloadaffiliatedump[$downloadaffiliateiterator]);
}

/*
|--------------------------------------------------------------------------
| RSS block
|--------------------------------------------------------------------------
*/
ob_start();

$rss_tags = array('title');
$rss_item_tag = 'item';

function rss_fetch_content_tvshowse($url)
{
    if (function_exists('curl_init')) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 RSS Reader');

        $data = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($data !== false && trim($data) !== '' && $httpCode < 400) {
            return $data;
        }
    }

    if (ini_get('allow_url_fopen')) {
        $data = @file_get_contents($url);
        if ($data !== false && trim($data) !== '') {
            return $data;
        }
    }

    return false;
}

function rss_to_array_tvshowse($tag, $array, $url)
{
    $rss_array = array();

    $rssContent = rss_fetch_content_tvshowse($url);

    if ($rssContent === false || trim($rssContent) === '') {
        return $rss_array;
    }

    libxml_use_internal_errors(true);

    $doc = new DOMDocument();
    $loaded = $doc->loadXML($rssContent);

    if (!$loaded) {
        libxml_clear_errors();
        return $rss_array;
    }

    libxml_clear_errors();

    foreach ($doc->getElementsByTagName($tag) as $node) {
        $items = array();

        foreach ($array as $value) {
            $element = $node->getElementsByTagName($value)->item(0);
            $items[$value] = $element ? $element->nodeValue : '';
        }

        $rss_array[] = $items;
    }

    return $rss_array;
}

function cleanRss_tvshowse($targetrss, $targetvar)
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

    $roundten = trim(strip_tags($round9));
    $targetvar = $roundten;
    return $targetvar;
}

$rss_array = rss_to_array_tvshowse($rss_item_tag, $rss_tags, $tvshowsmainRSS_url);

for ($rssparser = 0; $rssparser < 26; $rssparser++) {
    $title = $rss_array[$rssparser]['title'] ?? '';

    if ($title === '') {
        $tpl->assign('tvshowsrsstorrentlink' . $rssparser, '');
        $tpl->assign('tvshowsrsstorrent' . $rssparser, '');
        continue;
    }

    $cleanTitle = cleanRss_tvshowse($title, $title);

    $tpl->assign('tvshowsrsstorrentlink' . $rssparser, '/tv-shows/' . $cleanTitle);
    $tpl->assign('tvshowsrsstorrent' . $rssparser, $cleanTitle);
}

ob_clean();

/*
|--------------------------------------------------------------------------
| Utility helpers
|--------------------------------------------------------------------------
*/
function get_tvshowse_rnd()
{
    global $kwr;
    $n = count($kwr);
    $r = rand(0, $n - 1);
    return $kwr[$r];
}

function rf_tvshowse($file)
{
    $contents = '';

    if (!is_string($file) || $file === '' || !file_exists($file)) {
        return $contents;
    }

    $fp = fopen($file, 'r');

    if ($fp) {
        while (!feof($fp)) {
            $contents .= fread($fp, 1024);
        }
        fclose($fp);
    }

    return $contents;
}

/*
|--------------------------------------------------------------------------
| Footer/current URL block
|--------------------------------------------------------------------------
*/
$r = $_SERVER['REQUEST_URI'] ?? '';
$r = explode('/', $r);
$r = array_filter($r);
$r = array_merge($r, array());
$r = preg_replace('/\?.*/', '', $r);
?>