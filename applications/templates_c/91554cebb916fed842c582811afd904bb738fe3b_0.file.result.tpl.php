<?php
/* Smarty version 4.3.2, created on 2026-06-23 12:15:06
  from '/home/rbgvtenu/torrentdemo.enlau.dev/applications/result.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6a3a78cadd33b4_82655814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91554cebb916fed842c582811afd904bb738fe3b' => 
    array (
      0 => '/home/rbgvtenu/torrentdemo.enlau.dev/applications/result.tpl',
      1 => 1780921471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a3a78cadd33b4_82655814 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/rbgvtenu/torrentdemo.enlau.dev/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Search Results For <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent']->value,'%20',' '),'#','.'),'/','.'),'\\','.'),'%','.'),'[','.'),']','.');?>
</title>
<meta name="description" content="Search Results For <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent']->value,'%20',' '),'#','.'),'/','.'),'\\','.'),'%','.'),'[','.'),']','.');?>
">
<meta name="keywords" content="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent']->value,'%20',' '),'#','.'),'/','.'),'\\','.'),'%','.'),'[','.'),']','.');?>
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
<h2> Search category : <?php echo $_smarty_tpl->tpl_vars['mytitle']->value;?>
 </h2>
</div>
<div class="box-info-detail">
<div class="black-box">
<ul class="clearfix">
<li>We've found what you are looking for ... </li>
</ul>
</div>
</div>
</div>
<div class="box-info trending">
<div class="box-info-heading clearfix">
<h1><span class="featured-icon"><i class="flaticon-apps"></i></span> Top 4 Search Results For:  <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent']->value,'%20',' '),'#','.'),'/','.'),'\\','.'),'%','.'),'[','.'),']','.');?>
 </h1>

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
<td class="coll-1 name"><a href="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent1']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['appgroup1']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent1']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['appgroup1']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
.html"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent1']->value,'/','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['appgroup1']->value,'/','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
</a></td>
<td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm0']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm0']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time1']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name1']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent2']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['appgroup2']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent2']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['appgroup2']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
.html"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent2']->value,'/','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['appgroup2']->value,'/','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
</a></td><td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm1']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm1']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time2']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name2']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent3']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['appgroup3']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent3']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['appgroup3']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
.html"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent3']->value,'/','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['appgroup3']->value,'/','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
</a></td><td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm2']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm2']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time3']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name3']->value;?>
</td>
</tr>
<tr>
<td class="coll-1 name"><a href="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent4']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['appgroup4']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
.html" class="icon"><i class="flaticon-apps"></i></a><a href="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent4']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['appgroup4']->value,'/','-'),' ','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
.html"><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['torrent4']->value,'/','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
-<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['appgroup4']->value,'/','-'),'%7B','-'),'%7D','-'),'#','.'),'\/','-'),'\\','-'),'%','.'),'[','.'),']','.');?>
</a></td><td class="coll-2 seeds"><?php echo $_smarty_tpl->tpl_vars['rdm3']->value;?>
</td>
<td class="coll-3 leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm3']->value;?>
</td>
<td class="coll-date"><?php echo $_smarty_tpl->tpl_vars['time4']->value;?>
</td>
<td class="coll-4 size mob-uploader"><?php echo $_smarty_tpl->tpl_vars['name4']->value;?>
</td>
</tr>

</tbody>
</table>
</div>
<div class="pagination">
<ul>
<li><a href="index.php">1</a></li>
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
