<pre>
<?php

///////////// DO NOT MODIFY PAST THIS  //////////////////

require_once "config.php";


// = $_SERVER['DOCUMENT_ROOT'];
/* direct object methods */
require_once "ftp.class.php";
$ftp = new FTP();
if ($ftp->connect($ftp_server)) {
	if ($ftp->login($ftp_user, $ftp_passwd)) {
		echo "\n" . $ftp->sysType() . "\n";
		echo $ftp->pwd() . "\n";
		echo $ftp->raw("SYST") . "\n";



		$ftpfile = "/franklicense.lic";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/defaultmaster.php";
		$ftp->chmod(777, "$ftpfile");


		$ftpfile = "/templates_c";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/applications/default.php";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/movies/default.php";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/games/default.php";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/tv-shows/default.php";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/xxx/default.php";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/music/default.php";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/templates_c";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/applications";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/applications/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/applications/data/data.torrent";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/applications/data/titles.txt";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/applications/templates_c";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/applications/torrents";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/applications/torrents/1.torrent";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/games";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/games/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/games/data/data.torrent";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/games/data/titles.txt";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/games/templates_c";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/games/torrents";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/games/torrents/1.torrent";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/movies";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/movies/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/movies/data/data.torrent";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/movies/data/titles.txt";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/movies/templates_c";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/movies/torrents";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/movies/torrents/1.torrent";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/music";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/music/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/music/data/data.torrent";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/music/data/titles.txt";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/music/templates_c";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/music/torrents";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/music/torrents/1.torrent";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/tv-shows";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/tv-shows/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/tv-shows/data/data.torrent";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/tv-shows/data/titles.txt";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/tv-shows/templates_c";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/tv-shows/torrents";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/tv-shows/torrents/1.torrent";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "/xxx";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/xxx/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/xxx/data/data.torrent";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/xxx/data/titles.txt";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/xxx/templates_c";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/xxx/torrents";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "/xxx/torrents/1.torrent";
		$ftp->chmod(777, "$ftpfile");

	} else {
		echo "login failed: ";
		print_r($ftp->error_no);
		print_r($ftp->error_msg);
	}
	$ftp->disconnect();
	print_r($ftp->lastLines);
} else {
	echo "connection failed: ";
	print_r($ftp->error_no);
	print_r($ftp->error_msg);
}

include "initr.php";

echo " desk@getfrank.app . You can now delete the 'setup' folder.";

php?>
</pre>