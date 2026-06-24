<?php

header("HTTP/1.1 200 OK");

require_once 'functions.php';
require_once 'td.php';


$url = explode("/",$REQUEST_URI);
$torrent = new Torrent( './data/data.torrent');
$parts = preg_split("/(?<![\\\])\./", $_SERVER["REQUEST_URI"], -1, 
PREG_SPLIT_NO_EMPTY);
$heina = explode("/", $parts[0]);
$mnhd = str_replace("%20", " ", $heina[3]);

// getting rid or extension and dots in torrent comment
$torrentnameWithoutExtension = explode(".torrent", $url[3]);
$torrentnameWithoutDots = str_replace("."," ", $torrentnameWithoutExtension); // normal letters
$torrentname = strtoupper($torrentnameWithoutDots[0]); // torrent comment in caps


$torrent->comment("$torrentnameWithoutDots[0]");
$torrent->save('torrents/1.torrent'); // save to disk


if(preg_match("/.torrent/",$url[3])) {
	global $url,$_c,$torrentlocation,$maxnotorrent,$kw;
    $fp=fopen("$torrentlocation/1.torrent",'r');
    $dest = fopen("$torrentlocation/$url[3]", 'w');  
    echo stream_copy_to_stream($fp, $dest);
    $myspecialfilename = "$torrentlocation/$url[3]";
    fclose ($fp);
    fclose($dest); 
	header('Location: '.$url[3]);
	exit;
	die;

} 


if(preg_match("/-page-/",$url[2])) {

	$mkw = preg_match("#(.+)-page-#si",$url[2],$matches);

	$mkw = str_replace('-',' ',$matches[1]);

} else {

	$mkw = preg_match("#(.+).html#si",$url[2],$matches);

	$mkw = str_replace('-',' ',$matches[1]);

}

if(preg_match("/.jpg/",$url[3]))  {

	global $url,$_c,$authorImageLocation,$maxpic;
	srand((double)microtime()*1000000);
	$rnd = rand() % $maxpic + 1;
	$contents = '';
    $fp=fopen("$authorImageLocation/$rnd.jpg",'r');
    if($fp) {while(!feof($fp)) {$contents.=fread($fp,1024);}}
    fclose ($fp); 
	header('Content-type: image/jpeg');
	echo $contents;


	die;
} 


$pag = preg_match("#-page-(.+).html#si",$url[2],$matches);

$pag = $matches[1];

if($pag =='') $pag=1;



if($mkw == '') {

	$mkw = $default_kw;

	$pag = 1;

}


if(preg_match('/torrent-archive/',$url[2])) {

	show_archive();

	$tpl->display('archive.tpl');

	die;	

}

set_default();

$tpl->display('download.tpl');

?>