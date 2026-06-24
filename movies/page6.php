<?php

header("HTTP/1.1 200 OK");

require_once 'functions.php';



$url = explode("/",$REQUEST_URI);















if(preg_match("/-page-/",$url[3])) {

	$mkw = preg_match("#(.+)-page-#si",$url[3],$matches);

	$mkw = str_replace('-',' ',$matches[3]);

} else {

	$mkw = preg_match("#(.+).html#si",$url[3],$matches);

	$mkw = str_replace('-',' ',$matches[3]);

}



$pag = preg_match("#-page-(.+).html#si",$url[3],$matches);

$pag = $matches[3];

if($pag =='') $pag=1;





if($mkw == '') {

	$mkw = $default_kw;

	$pag = 1;

}



if(preg_match("/.torrent/",$url[3]) || $url[3] == 'images') {

	show_rnd_image();die;

} 





if(preg_match('/torrent-archive/',$url[3])) {

	show_archive();

	$tpl->display('archive.tpl');

	die;	

}


$pagenumber = ' Page 6';
$tpl->assign('pnumber', $pagenumber);
set_default();



$tpl->display('phome.tpl');
