<?php

// error_reporting(E_ALL & ~E_NOTICE);
// error_log("There is something wrong!", 0);

require_once 'libs/Smarty.class.php';


$tpl      = new Smarty;
$tpl->force_compile  = true;
// YOUR SERVER PATH MAIN FOLDER WHERE THE SCRIPT IS UPLOADED TO, REPLACE IF NEEDED $MAINSERVER PATH TO
// WHATEVER YOUR SERVERPATH IS EG. /var/www/yourusername/public_html. It's recommended to leave it like
// this, to let the server figure it out by itself. Only if unexpected error occurs modify $mainserverpath 
//= "" with your server path to public_html or www (where you uploaded the script)
$mainserverpath = $_SERVER['DOCUMENT_ROOT'];
$tpl->template_dir  = '$mainserverpath';


// SMARTY TEMPLATE DIRECTORY, LEAVE IT UNCHANGED
$tpl->compile_dir  = './templates_c';


// YOUR WEBSITE TITLE
$defaulttitle = 'MegaTorrents';
$tpl->assign('mytitle', $defaulttitle);


// YOUR WEBSITE URL
$domain = $_SERVER['HTTP_HOST'];
$website = "$domain";
$tpl->assign('yourwebsite', $website);



$lasttorrent = 1;
$torrno = 1;
$maxnotorrent = 1;



// !Note - you can choose if the torrents on the main page are created using titles.txt or rss feed by 
// choosing in home.tpl what other templates to load in it from homepage_template eg. 
// applications_section.tpl which will use titles.txt or applicationsRSS_section.tpl to choose the rss
// feed bellow. 

// YOUR TORRENT FEED URL FOR HOMEPAGE
$applicationsmainRSS_url = 'https://thepiratebay.party/rss/top100/301';
$gamesmainRSS_url = 'https://thepiratebay.party/rss/top100/401';
$moviesmainRSS_url = 'https://thepiratebay.party/rss/top100/202';
$tvshowsmainRSS_url = 'https://thepiratebay.party/rss/top100/205';
$musicmainRSS_url = 'https://thepiratebay.party/rss/top100/101';
$xxxmainRSS_url = 'https://thepiratebay.party/rss/top100/502';




// file with the name of the torrents to be created
// FRANK will take the names from this text file (titles\names separated by new lines) and create a download page and a torrent for them
// For applications section ->
$applicationse_file = './applications/data/titles.txt';
// For games section ->
$gamese_file = './games/data/titles.txt';
// For movie section ->
$moviese_file = './movies/data/titles.txt';
// For music section ->
$musice_file = './music/data/titles.txt';
// For tvshow section ->
$tvshowse_file = './tv-shows/data/titles.txt';
// For xxx section ->
$xxxe_file = './xxx/data/titles.txt';



//avatar image location
$authorImageLocation = './applications/product';
$lastpic = 170;
$picsperpage = 7;
$maxpic = 170;


//sidebar links and link text - put the links in affiliates.txt one per line, and random link with random text from tittleaffiliates.txt will show. You can change here from which file the software should choose the links and link text. If you don't want random links, put just one link the the file of your choosing.
$affiliateFileName = "./data/affiliates.txt";
$affiliatefilenameTitle = "./data/titleaffiliates.txt";

// the random link you want to send your visitors too when clicking "Hide your ip! Protect yourself" on the downloads page. One per line.
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
