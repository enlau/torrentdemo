<?php

header("HTTP/1.1 200 OK");

require_once 'functions.php';
require_once 'td.php';

/*
|--------------------------------------------------------------------------
| Safe URL handling
|--------------------------------------------------------------------------
| Old code used:
|   $url = explode("/", $REQUEST_URI);
|   $url[2], $url[3], $heina[3]
|
| That breaks when path depth changes (subdomain, folder move, etc.)
*/
$default_kw = $default_kw ?? 'home';
$segment = app_last_segment();
$segment = is_string($segment) ? $segment : '';

$pathInfo = pathinfo(app_request_path());
$mnhd = urldecode($pathInfo['filename'] ?? '');

/*
|--------------------------------------------------------------------------
| Torrent object setup
|--------------------------------------------------------------------------
*/
$torrent = new Torrent('./data/data.torrent');

/*
|--------------------------------------------------------------------------
| Build torrent comment safely from requested .torrent name
|--------------------------------------------------------------------------
| Old code tried to use:
|   $url[3]
*/
$torrentBaseName = preg_replace('/\.torrent$/i', '', urldecode($segment));
$torrentnameWithoutDots = str_replace('.', ' ', $torrentBaseName);
$torrentname = strtoupper($torrentnameWithoutDots);

$torrent->comment($torrentnameWithoutDots);
$torrent->save('torrents/1.torrent'); // save to disk

/*
|--------------------------------------------------------------------------
| Handle .torrent request
|--------------------------------------------------------------------------
*/
if ($segment !== '' && preg_match('/\.torrent$/i', $segment)) {
    global $_c, $torrentlocation, $maxnotorrent, $kw;

    $requestedTorrent = basename($segment);
    $sourceTorrent = $torrentlocation . '/1.torrent';
    $targetTorrent = $torrentlocation . '/' . $requestedTorrent;

    $fp = fopen($sourceTorrent, 'r');
    $dest = fopen($targetTorrent, 'w');

    if ($fp && $dest) {
        stream_copy_to_stream($fp, $dest);
        fclose($fp);
        fclose($dest);

        header('Location: ' . $requestedTorrent);
        exit;
    }

    if ($fp) {
        fclose($fp);
    }
    if ($dest) {
        fclose($dest);
    }

    die('Could not create torrent file.');
}

/*
|--------------------------------------------------------------------------
| Extract keyword + page safely
|--------------------------------------------------------------------------
| Old code used $url[2]
*/
list($mkw, $pag) = app_extract_keyword_and_page($segment, $default_kw);

/*
|--------------------------------------------------------------------------
| Handle .jpg request
|--------------------------------------------------------------------------
*/
if ($segment !== '' && preg_match('/\.jpg$/i', $segment)) {
    global $_c, $authorImageLocation, $maxpic;

    srand((double)microtime() * 1000000);
    $rnd = rand() % $maxpic + 1;

    $contents = '';
    $fp = fopen("$authorImageLocation/$rnd.jpg", 'r');

    if ($fp) {
        while (!feof($fp)) {
            $contents .= fread($fp, 1024);
        }
        fclose($fp);
    }

    header('Content-type: image/jpeg');
    echo $contents;
    die;
}

/*
|--------------------------------------------------------------------------
| Archive handling
|--------------------------------------------------------------------------
*/
if ($segment !== '' && preg_match('/torrent-archive/i', $segment)) {
    show_archive();
    $tpl->display('archive.tpl');
    die;
}

/*
|--------------------------------------------------------------------------
| Normal page rendering
|--------------------------------------------------------------------------
*/
set_default();
$tpl->assign('currentPage', $pag);
$tpl->display('download.tpl');
?>
