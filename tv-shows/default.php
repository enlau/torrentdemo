<?php

#error_reporting(0);


require_once '../libs/Smarty.class.php';



$tpl			= new Smarty;

$tpl->force_compile	= true;
$tpl->template_dir	= $_SERVER['DOCUMENT_ROOT'] . '/tv-shows';
$tpl->compile_dir	= $_SERVER['DOCUMENT_ROOT'] . '/tv-shows/templates_c';   


// names of torrents to be created
$keyword_file = $_SERVER['DOCUMENT_ROOT'] . '/tv-shows/data/titles.txt';

$defaulttitle = 'TV Show Torrents';
$tpl->assign('mytitle', $defaulttitle);

// your website url
$domain = $_SERVER['HTTP_HOST'];
$website = "$domain";
$tpl->assign('yourwebsite', $website);

// your torrent feed url for tv-shows
$rss_url = 'https://www.limetorrents.lol/rss/20/'; 

$lasttorrent = 1;

$torrno = 1;

$maxnotorrent = 1;

$torrentlocation = $_SERVER['DOCUMENT_ROOT'] . '/tv-shows/torrents';

$torrentl = $_SERVER['DOCUMENT_ROOT'] . '/tv-shows/torrents';



//avatar image location
$authorImageLocation = $_SERVER['DOCUMENT_ROOT'] . '/tv-shows/product';
$lastpic = 170;
$picsperpage = 7;
$maxpic = 170;


//sidebar links and link text - put the links in affiliates.txt one per line, and random link with random text from tittleaffiliates.txt will show. You can change here from which file the software should choose the links and link text. If you don't want random links, put just one link the the file of your choosing.
$affiliateFileName = "./data/affiliates.txt"; 
$affiliatefilenameTitle = "./data/titleaffiliates.txt"; 

// the random link you want to send your visitors too when clicking "Hide your ip! Protect yourself" on the downloads page.
$vpnaffiliategroupFile = "./data/vpnaffiliates.txt"; 

// the links you to send your visitors too when clicking the two bellow "Torrent Download" buttons - eg. Direct Download, Anonymous Download.
$downloadaffiliategroupFile = "./data/downloadaffiliates.txt"; 

// The comments file showing comments on the downloads page, one comment per line
$commentsFile = "./data/comments.txt"; 

//uploaders nicknames
$nickname = "./data/uploaders.txt"; 


$randomhashFile = "./data/randomhash.txt"; 
$tvgroupFile = "./data/tvshowgroups.txt"; 
$xxxgroupFile = "./data/xxxgroups.txt"; 
$riptypegroupFile = "./data/riptype.txt"; 
$gamesgroupFile = "./data/gamesgroups.txt"; 
$appgroupFile = "./data/appgroups.txt"; 
$musicgroupFile = "./data/musicgroups.txt"; 
$moviegroupFile = "./data/moviegroups.txt";
