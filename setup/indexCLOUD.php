<pre>
<?php

///////////// DO NOT MODIFY PAST THIS  //////////////////

require_once "config.php";


$mypathchmod = $_SERVER['DOCUMENT_ROOT'];
/* direct object methods */
require_once "ftp.class.php";
$ftp = new FTP();
if ($ftp->connect($ftp_server)) {
	if ($ftp->login($ftp_user, $ftp_passwd)) {
		echo "\n" . $ftp->sysType() . "\n";
		echo $ftp->pwd() . "\n";
		echo $ftp->raw("SYST") . "\n";



		$ftpfile = "$mypathchmod/franklicense.lic";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/defaultmaster.php";
		$ftp->chmod(777, "$ftpfile");


		$ftpfile = "$mypathchmod/templates_c";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/applications/default.php";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/movies/default.php";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/games/default.php";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/tv-shows/default.php";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/xxx/default.php";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/music/default.php";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/templates_c";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/applications";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/applications/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/applications/data/data.torrent";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/applications/data/titles.txt";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/applications/templates_c";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/applications/torrents";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/applications/torrents/1.torrent";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/games";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/games/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/games/data/data.torrent";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/games/data/titles.txt";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/games/templates_c";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/games/torrents";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/games/torrents/1.torrent";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/movies";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/movies/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/movies/data/data.torrent";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/movies/data/titles.txt";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/movies/templates_c";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/movies/torrents";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/movies/torrents/1.torrent";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/music";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/music/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/music/data/data.torrent";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/music/data/titles.txt";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/music/templates_c";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/music/torrents";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/music/torrents/1.torrent";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/tv-shows";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/tv-shows/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/tv-shows/data/data.torrent";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/tv-shows/data/titles.txt";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/tv-shows/templates_c";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/tv-shows/torrents";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/tv-shows/torrents/1.torrent";
		$ftp->chmod(777, "$ftpfile");

		$ftpfile = "$mypathchmod/xxx";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/xxx/data";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/xxx/data/data.torrent";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/xxx/data/titles.txt";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/xxx/templates_c";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/xxx/torrents";
		$ftp->chmod(777, "$ftpfile");
		$ftpfile = "$mypathchmod/xxx/torrents/1.torrent";
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