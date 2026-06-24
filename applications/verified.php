<?php

header("HTTP/1.1 200 OK");

require_once 'functions.php';

/*
|--------------------------------------------------------------------------
| Safe URL handling
|--------------------------------------------------------------------------
*/
$default_kw = $default_kw ?? 'home';
$segment = app_last_segment();

/*
|--------------------------------------------------------------------------
| Extract keyword + page safely
|--------------------------------------------------------------------------
*/
list($mkw, $pag) = app_extract_keyword_and_page($segment, $default_kw);

/*
|--------------------------------------------------------------------------
| Handle special requests
|--------------------------------------------------------------------------
*/
if ($segment !== '' && preg_match('/\.torrent$/i', $segment)) {
    if (function_exists('show_rnd_image')) {
        show_rnd_image();
    }
    die;
}

if ($segment === 'images') {
    if (function_exists('show_rnd_image')) {
        show_rnd_image();
    }
    die;
}

if ($segment !== '' && preg_match('/torrent-archive/i', $segment)) {
    if (function_exists('show_archive')) {
        show_archive();
    }
    $tpl->display('archive.tpl');
    die;
}

/*
|--------------------------------------------------------------------------
| Normal verified page rendering
|--------------------------------------------------------------------------
*/
set_default();
$tpl->assign('currentPage', $pag);
$tpl->display('verified.tpl');
?>