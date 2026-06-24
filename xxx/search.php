<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once('functions.php');

/*
|--------------------------------------------------------------------------
| Temporary KW file keyed by session ID 
|--------------------------------------------------------------------------
*/
$sessionKey = preg_replace('/[^a-zA-Z0-9_-]/', '', session_id());
$temporaryFile = "templates_c/search_" . $sessionKey . ".txt";

/*
|--------------------------------------------------------------------------
| Read and sanitize search input
|--------------------------------------------------------------------------
*/
$q = $_GET['key'] ?? '';
$q = str_replace('/', '', $q);
$q = trim(strip_tags($q));

if ($q !== '') {

    /*
    |--------------------------------------------------------------------------
    | Optional cleanup: remove any stale temp file from a previous search
    |--------------------------------------------------------------------------
    */
    if (file_exists($temporaryFile)) {
        unlink($temporaryFile);
    }

    $handle = @fopen($keyword_file, "r");
    $foundSomething = false;

    if ($handle) {
        while (!feof($handle)) {
            $buffer = fgets($handle, 4096);
            $bufone = is_string($buffer) ? trim($buffer) : '';

            /*
            |--------------------------------------------------------------------------
            | Safe substring search instead of regex injection risk
            |--------------------------------------------------------------------------
            */
            if ($bufone !== '' && stripos($bufone, $q) !== false) {
                $foundSomething = true;

                $fkxh = fopen($temporaryFile, 'a') or die("chmod directory to 777");
                fwrite($fkxh, $bufone . PHP_EOL);
                fclose($fkxh);
            }
        }

        fclose($handle);
    }

    /*
    |--------------------------------------------------------------------------
    | If nothing found, append new search term and show newresult.tpl
    |--------------------------------------------------------------------------
    */
    if (!$foundSomething) {
        $fh = fopen($keyword_file, 'a') or die("can't open file");
        $stringData = "\n" . $q;
        fwrite($fh, $stringData);
        fclose($fh);

        $tpl->assign('newentry', $q);
        $tpl->display('newresult.tpl');
        exit;
    }
}

/*
|--------------------------------------------------------------------------
| If temp result file exists, render result.tpl
|--------------------------------------------------------------------------
*/
if (file_exists($temporaryFile) && filesize($temporaryFile) > 0) {

    $opentempfileforreading = fopen($temporaryFile, "r");
    $readthetempfile = '';

    if ($opentempfileforreading) {
        $readthetempfile = fread($opentempfileforreading, filesize($temporaryFile));
        fclose($opentempfileforreading);
    }

    $templines = explode("\n", $readthetempfile);

    for ($tempiterator = 0; $tempiterator < 28; $tempiterator++) {
        srand((double)microtime() * 1000000);
        $tempnumberoflines = (rand(1, sizeof($templines)) - 1);
        $tempdump[$tempiterator] = $templines[$tempnumberoflines] ?? '';
        $tpl->assign('torrent' . $tempiterator, $tempdump[$tempiterator]);
    }
    $tpl->assign('torrent', $q);
    $tpl->display('result.tpl');

    unlink($temporaryFile);
}

?>