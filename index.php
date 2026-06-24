<?php


error_reporting(E_ALL);
ini_set('display_errors', 0);

header("HTTP/1.1 200 OK");
require_once 'applications_functions.php';
require_once 'games_functions.php';
require_once 'movies_functions.php';
require_once 'music_functions.php';
require_once 'xxx_functions.php';
require_once 'tvshows_functions.php';


set_default_applicationse();
set_default_gamese();
set_default_moviese();
set_default_tvshowse();
set_default_musice();
set_default_xxxe();

$tpl->display('home.tpl');
