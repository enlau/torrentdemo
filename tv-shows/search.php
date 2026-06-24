<?php

require_once('functions.php');

$ip = isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
$temporaryFile = "templates_c/$ip.txt";

if ($q = $_GET["key"])


{

$q = filter_var(str_replace("/","",$q), FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
$handle = @fopen($keyword_file, "r");

if ($handle) {

    while (!feof($handle)) {

        $buffer = fgets($handle, 4096);
        $bufone = $buffer;

if (preg_match("/$q/i", "$bufone")) {

        $rezultat = $bufone; 
        $gol = $rezultat;
		$fkxh = fopen($temporaryFile, 'a') or die("chmod directory to 777");
		$stringdata = $rezultat;
		fwrite($fkxh, $stringdata);
		fclose($fkxh);

}

    }


if (empty($gol)) {

$fh = fopen($keyword_file, 'a') or die("can't open file");
$stringData = "\n" . $q;
fwrite($fh, $stringData);
fclose($fh);
$tpl->assign('newentry', $q);
$tpl->display('newresult.tpl');

}
}
}


if (file_exists($temporaryFile)) {


$opentempfileforreading = fopen($temporaryFile, "r");   
$readthetempfile = fread($opentempfileforreading, filesize($temporaryFile));
$templines = explode("\n",$readthetempfile);  
fclose($opentempfileforreading);   
for($tempiterator=0;$tempiterator<28;$tempiterator++) {
srand((double)microtime()*1000000);  
$tempnumberoflines = (rand(1, sizeof($templines)) - 1); 
$tempdump[$tempiterator] = $templines[$tempnumberoflines];
$tpl->assign('torrent'.$tempiterator, $tempdump[$tempiterator]);
}


$tpl->display('result.tpl');

unlink($temporaryFile);

	

}

?>