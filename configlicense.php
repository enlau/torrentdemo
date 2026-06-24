<?php

// enter your license here between "", you find your license in your account
// the license is per domain, if you want to install it on another domain
// you must push Reissue License in your account
$licensekey = "domainlicense-4c83b0acd8aee9c58a2c2c98e";
$pathtoscript = $_SERVER['DOCUMENT_ROOT'];
// this is your local license file generated automatically, this makes sure that 
// if our site is down your website will still continue to function properly and your
// license will validate (for a period of time). You can put this outside of yourwebroot, you 
// just need to specify the full path to it eg. /var/www/youruser/mylicense.ext
// if you want to leave it as it is, be sure it's not accessible by the browser by puttin this
// into your .htaccess file : 
// <Files franklicense.lic>
//  order allow,deny
//  deny from all
// </Files>

$licfile = "$pathtoscript/franklicense.lic";
