<?php
require_once 'defaultmaster.php';

/*
|--------------------------------------------------------------------------
| Section-specific URL helpers
|--------------------------------------------------------------------------
| Intentionally prefixed with "musice_" so they do not collide with
| helpers from other root section files.
|--------------------------------------------------------------------------
*/
if (!function_exists('musice_request_uri')) {
    function musice_request_uri()
    {
        return $_SERVER['REQUEST_URI'] ?? '';
    }
}

if (!function_exists('musice_request_path')) {
    function musice_request_path()
    {
        $path = parse_url(musice_request_uri(), PHP_URL_PATH);
        return is_string($path) ? $path : '';
    }
}

if (!function_exists('musice_path_parts')) {
    function musice_path_parts()
    {
        $path = trim(musice_request_path(), '/');

        if ($path === '') {
            return array();
        }

        return array_values(array_filter(explode('/', $path), 'strlen'));
    }
}

if (!function_exists('musice_last_segment')) {
    function musice_last_segment()
    {
        $parts = musice_path_parts();

        if (empty($parts)) {
            return '';
        }

        return end($parts);
    }
}

/*
|--------------------------------------------------------------------------
| Missing file reader helper
|--------------------------------------------------------------------------
*/
if (!function_exists('rf_musice')) {
    function rf_musice($file)
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
}

/*
|--------------------------------------------------------------------------
| Main section helpers
|--------------------------------------------------------------------------
*/
function set_default_musice()
{
    global $tpl, $url, $mkw, $kwl, $kwsp, $track_id, $defaulttitle;

    $mkw  = (string)($mkw ?? ($defaulttitle ?? ''));
    $kwl  = (string)($kwl ?? '');
    $kwsp = (string)($kwsp ?? '');

    $kw = get_musice_keywords();

    for ($i = 0; $i < 28; $i++) {
        $a1 = "musiclink$i";
        $a2 = "musictlink$i";
        $tpl->assign($a1, '/music/' . str_replace(' ', '-', $kw[$i] ?? '') . '.html');
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

function show_archive_musice_old()
{
    global $tpl, $url, $musice_file;

    $tpl->assign('title', 'Torrent Archive');

    $contents = rf_musice($musice_file);
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

function show_archive_musice()
{
    global $tpl, $url, $musice_file;

    $segment = musice_last_segment();

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

    $contents = rf_musice($musice_file);
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

function set_keywords_musice()
{
    global $tpl, $url, $musice_file;

    $kw = get_musice_keywords();
    $segment = musice_last_segment();

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

function get_musice_keywords()
{
    global $musice_file;

    $contents = rf_musice($musice_file);

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

     // deprecated

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
     // deprecated
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
     // deprecated
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
     // deprecated
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
     // deprecated
    $vpnaffiliatenumberoflines = (rand(1, max(1, sizeof($vpnaffiliatelines))) - 1);
    $vpnaffiliatedump[$vpnaffiliateiterator] = $vpnaffiliatelines[$vpnaffiliatenumberoflines] ?? '';
    $tpl->assign('vpnaffiliate' . $vpnaffiliateiterator, $vpnaffiliatedump[$vpnaffiliateiterator]);
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
