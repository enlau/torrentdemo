<?php
/* Smarty version 4.3.2, created on 2026-06-24 10:55:39
  from '/home/rbgvtenu/torrentdemo.enlau.dev/applications/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6a3bb7ab55f6e7_65879899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '659f801f24a1ea2509f1fc24a59cc00773117a21' => 
    array (
      0 => '/home/rbgvtenu/torrentdemo.enlau.dev/applications/home.tpl',
      1 => 1780921471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a3bb7ab55f6e7_65879899 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $_smarty_tpl->tpl_vars['mytitle']->value;?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['mytitle']->value;?>
">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['mytitle']->value;?>
 torrents">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../resources/main.css">
<link rel="stylesheet" href="../resources/flaticon.css">



<link rel="shortcut icon" href="../favicon.ico">
  <!--[if lt IE 9]><?php echo '<script'; ?>
 src = "../resources/html5shiv.js"><?php echo '</script'; ?>
><![endif]-->


</head>
<body>
<div class="mobile-menu"></div>
<div class="top-bar">
<div class="container">
<ul class="top-bar-nav">
</ul>
</div>
</div>
<header>
<div class="container">
<div class="clearfix">
<div class="logo"><a href="/../index.php"><img alt="logo" src="../resources/images/logo.png"></a></div>
<a href="#" class="navbar-menu"><span></span><span></span><span></span></a>
<div class="search-box">
<form id="search-form" method="get" action="search.php">
<input type="text"  id="autocomplete" name="key" class="ui-autocomplete-input form-control" autocomplete="off">
<button type="submit" class="btn btn-search"><i class="flaticon-search"></i><span>Search</span></button>
<div class="choose-search"><?php echo $_smarty_tpl->tpl_vars['searchbar1']->value;?>
</div>

</form>
</div>
</div>
<nav>
<ul class="main-navigation">
<li><a href="/../" title="Go to Home">Home</a></li>
<li class="active"><a href="/applications/" title="Software Applications">Applications</a></li>
<li><a href="/games/" title="Games">Games</a></li>
<li><a href="/movies/" title="Movies">Movies</a></li>
<li><a href="/xxx/" title="Adult XXX">Adult XXX</a></li>
</ul>
</nav>
</div>
</header>
<main class="container">
<div class="row">
<aside class="col-3 pull-right">
<div class="list-box">
<h2>Browse torrents</h2>
<ul>
<li><a href="index.php" title="Applications"><i class="flaticon-apps"></i> Applications</a></li>
<li><a href="/games/" title="Games"><i class="flaticon-games"></i> Games</a></li>
<li><a href="/xxx/" title="XXX"><i class="flaticon-xxx"></i> XXX</a></li>
<li><a href="/tv-shows/" title="New TV Episodes"><i class="flaticon-tv"></i> New TV Episodes</a></li>
<li><a href="./verified.php" title="Verified Torrents"><i class="flaticon-mark"></i> Verified Torrents</a></li>
<li><a href="/movies/"><i class="flaticon-movies"></i> Movies</a></li>
<li><a href="/movies/page2.php" title="Movie Library"><i class="flaticon-movie-library"></i> Movie library</a></li>
<li><a href="/music/" title="Movies"><i class="flaticon-music"></i> Music</a></li>
<li><a href="/tv-shows/page2.php" title="Television"><i class="flaticon-tv"></i> Television</a></li>

</ul>
</div>
<div class="list-box hidden-sm">
<h2>Friends</h2>
<ul class="list">
<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['affiliate1']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['affiliateTitle1']->value;?>
</a></li>
<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['affiliate2']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['affiliateTitle2']->value;?>
</a></li>
<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['affiliate3']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['affiliateTitle3']->value;?>
</a></li>
<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['affiliate4']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['affiliateTitle4']->value;?>
</a></li>
<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['affiliate5']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['affiliateTitle5']->value;?>
</a></li>
<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['affiliate6']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['affiliateTitle6']->value;?>
</a></li>
<li><a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['affiliate7']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['affiliateTitle7']->value;?>
</a></li>
</ul>
</div>
</aside>
<div class="col-9 page-content trending-torrent-explore">
<div class="box-info filter-list small-list">
<div class="box-info-heading clearfix no-bottom-radius">
<h2> <?php echo $_smarty_tpl->tpl_vars['mytitle']->value;?>
 </h2>
</div>
<div class="box-info-detail">
<div class="black-box">
<ul class="clearfix">
<li>Hottest Torrents in the last 24 hours</li>
</ul>
</div>
</div>
</div>
<div class="box-info trending">
<div class="box-info-heading clearfix">
<h1><span class="featured-icon"><i class="flaticon-apps"></i></span> Windows Software List </h1>

</div>
</div>
<div class="featured-list">
<div class="table-list-wrap">
<table class="table-list table table-responsive table-striped">
<thead>
<tr>
<th class="coll-1 name">name</th>
<th class="coll-2">se</th>
<th class="coll-3">le</th>
<th class="coll-date">time</th>
<th class="coll-4">uploader</th>
</tr>
</thead>
<tbody>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl0']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl0']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent0']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent0']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm21']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm21']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time1']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name1']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl1']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl1']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent1']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent1']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm1']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm1']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time2']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name2']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl2']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl2']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent2']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm2']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm2']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time3']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name3']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl3']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl3']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent3']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent3']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm3']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm3']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time4']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name4']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl4']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl4']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent4']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent4']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm4']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm4']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time5']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name5']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl5']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl5']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent5']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent5']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm5']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm5']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time6']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name6']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl6']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl6']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent6']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent6']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm6']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm6']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time7']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name7']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl7']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl7']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent7']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent7']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm7']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm7']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time8']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name8']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl8']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl8']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent8']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent8']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm8']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm8']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time9']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name9']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl9']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl9']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent9']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent9']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm9']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm9']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time10']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name10']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl10']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl10']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent10']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent10']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm10']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm10']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time11']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name11']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl11']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl11']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent11']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent11']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm11']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm11']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time12']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name12']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl12']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl12']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent12']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent12']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm12']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm12']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time13']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name13']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl13']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl13']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent13']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent13']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm13']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm13']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time14']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name14']->value;?>
</td>
 </tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl14']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl14']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent14']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent14']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm14']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm14']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time15']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name15']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl15']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl15']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent15']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent15']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm15']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm15']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time16']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name16']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl16']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl16']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent16']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent16']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm16']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm16']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time17']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name17']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl17']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl17']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent17']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent17']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm17']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm17']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time18']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name18']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl18']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl18']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent18']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent18']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm18']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm18']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time19']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name19']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl19']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl19']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent19']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent19']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm19']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm19']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time20']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name20']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl20']->value;?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['rsstorrentl20']->value;?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['rsstorrent20']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['rsstorrent20']->value;?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm20']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm20']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time21']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name21']->value;?>
</td>
</tr>
</tbody>
</table>
</div>
<div class="pagination">
<ul>
<li class="active"><a href="index.php">1</a></li>
<li><a href="page2.php">2</a></li>
<li><a href="page3.php">3</a></li>
<li><a href="page4.php">4</a></li>
<li><a href="page5.php">5</a></li>
<li><a href="page6.php">6</a></li>
<li><a href="page7.php">7</a></li>
<li><a href="page8.php">&gt;&gt;</a></li>
<li class="last"><a href="page10.php">Last</a></li>
</ul>
</div>
<br>



</div>
</div>
</div>
</main>
<footer>

<a class="scroll-top" href="#"><i class="flaticon-up"></i></a>
<ul>
<li><a href="/../index.php">Home</a></li>
<li class="active"><a href="./torrent-archive1.html">Archive</a></li>

</ul>
<p class="info"><?php echo $_smarty_tpl->tpl_vars['yourwebsite']->value;?>
 - 2019</p>
</footer>

<?php echo '<script'; ?>
 src="../resources/jquery-1.11.0.min.js"><?php echo '</script'; ?>
><?php echo '<script'; ?>
>


<?php echo '</script'; ?>
>

</body>
</html><?php }
}
