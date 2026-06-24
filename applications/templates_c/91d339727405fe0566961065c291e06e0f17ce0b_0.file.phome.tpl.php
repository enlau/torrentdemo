<?php
/* Smarty version 4.3.2, created on 2026-06-23 12:35:17
  from '/home/rbgvtenu/torrentdemo.enlau.dev/applications/phome.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6a3a7d85279696_14369771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91d339727405fe0566961065c291e06e0f17ce0b' => 
    array (
      0 => '/home/rbgvtenu/torrentdemo.enlau.dev/applications/phome.tpl',
      1 => 1780921471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a3a7d85279696_14369771 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo $_smarty_tpl->tpl_vars['mytitle']->value;
echo $_smarty_tpl->tpl_vars['pnumber']->value;?>
</title>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['mytitle']->value;
echo $_smarty_tpl->tpl_vars['pnumber']->value;?>
">
<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['mytitle']->value;
echo $_smarty_tpl->tpl_vars['pnumber']->value;?>
">
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
<li><a href="/movies/verified.php" title="Movie Library"><i class="flaticon-movie-library"></i> Movie library</a></li>
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
<h2> <?php echo $_smarty_tpl->tpl_vars['mytitle']->value;
echo $_smarty_tpl->tpl_vars['pnumber']->value;?>
</h2>
</div>
<div class="box-info-detail">
<div class="black-box">
<ul class="clearfix">
<li>The most active torrents this past week</li>
</ul>
</div>
</div>
</div>
<div class="box-info trending">
<div class="box-info-heading clearfix">
<h1><span class="featured-icon"><i class="flaticon-apps"></i></span> Windows Software List  </h1>

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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link0']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link0']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink0']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink0']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link1']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link1']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink1']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink1']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link2']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link2']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink2']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink2']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link3']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link3']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink3']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink3']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link4']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link4']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink4']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink4']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link5']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link5']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink5']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink5']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link6']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link6']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink6']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink6']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link7']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link7']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink7']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink7']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link8']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link8']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink8']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink8']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link9']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link9t']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink9']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink9']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link10']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link10']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink10']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink10']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link11']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link11']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink11']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink11']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link12']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link12']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink12']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink12']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link13']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link14']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink13']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink13']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link14']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link14']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink14']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink14']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link15']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link15']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink15']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink15']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link16']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link16']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink16']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink16']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link17']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link17']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink17']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink17']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link18']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link18']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink18']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink18']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link19']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link19']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink19']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink19']->value;?>
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
<td class="coll-1 name"><a href="<?php echo $_smarty_tpl->tpl_vars['link20']->value;?>
" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo $_smarty_tpl->tpl_vars['link20']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['tlink20']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['tlink20']->value;?>
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
<?php echo $_smarty_tpl->tpl_vars['activeButton']->value;?>

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
