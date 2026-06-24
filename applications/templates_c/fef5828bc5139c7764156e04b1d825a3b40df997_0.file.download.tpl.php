<?php
/* Smarty version 4.3.2, created on 2026-06-23 13:29:57
  from '/home/rbgvtenu/torrentdemo.enlau.dev/applications/download.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_6a3a8a559ef6b2_94517510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fef5828bc5139c7764156e04b1d825a3b40df997' => 
    array (
      0 => '/home/rbgvtenu/torrentdemo.enlau.dev/applications/download.tpl',
      1 => 1780921471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6a3a8a559ef6b2_94517510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/rbgvtenu/torrentdemo.enlau.dev/libs/plugins/modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['title']->value,'%20',' '),'#','.'),'/','.'),'\\','.'),'%','.'),'[','.'),']','.');?>
</title>
  <meta name="description" content="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['metakw']->value,'%20',' '),'#','.'),'/','.'),'\\','.'),'%','.'),'[','.'),']','.');?>
">
  <meta name="keywords" content="<?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['metakw']->value,'%20',' '),'#','.'),'/','.'),'\\','.'),'%','.'),'[','.'),']','.');?>
">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../resources/main.css">
  <link rel="stylesheet" href="../resources/down.css">
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
            <input type="text" id="autocomplete" name="key" class="ui-autocomplete-input form-control" autocomplete="off">
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


      <div class="col-9 page-content">
        <div class="box-info torrent-detail-page  vpn-info-wrap">
          <div class="box-info-heading clearfix">
            <h1> Download <?php echo smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['keyword']->value,'%20',' '),'#','.'),'/','.'),'\\','.'),'%','.'),'[','.'),']','.');?>
 </h1>
          </div>
          <div class="box-info-detail no-top-radius">
            <div class="torrent-category-detail clearfix">
              <ul class="download-links-dontblock btn-wrap-list">

                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li class="dropdown">
                  <a href="./torrents/<?php echo $_smarty_tpl->tpl_vars['dottedlink']->value;?>
.torrent" title="<?php echo $_smarty_tpl->tpl_vars['keyword']->value;?>
.torrent" class="adfbdbdb btn btn-addeaafc"><span class="icon"><i class="flaticon-bbcbbf"></i></span>Torrent
                    Download</a>
                  
                  
                <li><a id="dccacfad" class="adfbdbdb btn btn-dccacfad" href="<?php echo $_smarty_tpl->tpl_vars['downloadaffiliate1']->value;?>
"><span class="icon"><i class="flaticon-cebadfcd"></i></span>Dir‌ect Download</a></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li><a id="bbdefafa" class="adfbdbdb btn btn-bbdefafa" href="<?php echo $_smarty_tpl->tpl_vars['downloadaffiliate2']->value;?>
"><span class="icon"><i class="flaticon-efaadbde"></i></span>An‌on‌ymous Download</a>
                </li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
              </ul>
              <ul class="list">
                <li> <strong>Category</strong> <span>Apps</span> </li>
                <li> <strong>Type</strong> <span>PC Software</span> </li>
                <li> <strong>Language</strong> <span>English</span> </li>
                <li> <strong>Uploaded By</strong> <span><small class="uploader"></small> <?php echo $_smarty_tpl->tpl_vars['name1']->value;?>
</span> </li>
              </ul>
              <ul class="list">
                <li> <strong>Downloads</strong> <span><?php echo $_smarty_tpl->tpl_vars['lrdm1']->value;?>
</span> </li>
                <li> <strong>Last checked</strong> <span><?php echo $_smarty_tpl->tpl_vars['randomhour1']->value;?>
 minutes ago</span> </li>
                <li> <strong>Date uploaded</strong> <span><?php echo $_smarty_tpl->tpl_vars['randomhour2']->value;?>
 hours ago</span> </li>
                <li> <strong>Seeders</strong> <span class="seeds"><?php echo $_smarty_tpl->tpl_vars['rdm2']->value;?>
</span> </li>
                <li> <strong>Leechers</strong> <span class="leeches"><?php echo $_smarty_tpl->tpl_vars['lrdm2']->value;?>
</span> </li>
              </ul>
            </div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div class="dabeeedc"><a id="dabeeedc" href="<?php echo $_smarty_tpl->tpl_vars['vpnaffiliate1']->value;?>
"><span class="icon"><i class="flaticon-efaadbde"></i></span>Your IP Address is <strong class="vpn-nip"><?php echo $_smarty_tpl->tpl_vars['userIP']->value;?>
</strong>.
                Your ISP and Government can track your torrent activity! Hide your IP with a VPN!</a></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div class="manage-box">
              <ul class="category-name">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['vpnaffiliate2']->value;?>
">Hide your ip! Protect yourself!</a></li>
                
              </ul>
              <div class="infohash-box">
                <p> <strong>Infohash :</strong> <span><?php echo $_smarty_tpl->tpl_vars['randomhash1']->value;?>
</span></p>
              </div>
            </div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div style="display: none;"></div>
            <div class="torrent-tabs">
              <ul class="tab-nav clearfix">


                <li role="presentation" class="active"><p>Comments <span class="active"><?php echo $_smarty_tpl->tpl_vars['noComments1']->value;?>
</span></p></li>

              </ul>
              <div class="tab-content">

                <div role="tabpanel" class="tab-pane active" id="comments">
                  <h2>Comments</h2>
                  <div class="comment-box">
                    <div id="comment">
                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user"><img src="./product/<?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
-img-1.jpg"
                              class="lazy" style="display: inline;"></div>
                          <div class="detail"><span class="arrow"></span>
                            <div class="user-name"><small class="user"></small><p><?php echo $_smarty_tpl->tpl_vars['name3']->value;?>
</p><span><i class="flaticon-time"></i><?php echo $_smarty_tpl->tpl_vars['randomhour4']->value;?>
 hours ago</span></div>
                            <br>
                            <p><?php echo $_smarty_tpl->tpl_vars['authorcomment2']->value;?>
 </p>
                          </div>
                        </div>
                      </div>

                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user"><img src="./product/<?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
-img-2.jpg"
                              class="lazy" style="display: inline;"></div>
                          <div class="detail"><span class="arrow"></span>
                            <div class="user-name"><small class="user"></small><p><?php echo $_smarty_tpl->tpl_vars['name4']->value;?>
</p><span><i class="flaticon-time"></i><?php echo $_smarty_tpl->tpl_vars['randomhour5']->value;?>
 hours ago</span></div>
                            <br>
                            <p><?php echo $_smarty_tpl->tpl_vars['authorcomment3']->value;?>
 </p>
                          </div>
                        </div>
                      </div>


                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user"><img src="./product/<?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
-img-3.jpg"
                              class="lazy" style="display: inline;"></div>
                          <div class="detail"><span class="arrow"></span>
                            <div class="user-name"><small class="user"></small><p><?php echo $_smarty_tpl->tpl_vars['name5']->value;?>
</p><span><i class="flaticon-time"></i><?php echo $_smarty_tpl->tpl_vars['randomhour6']->value;?>
 hours ago</span></div>
                            <br>
                            <p><?php echo $_smarty_tpl->tpl_vars['authorcomment4']->value;?>
 </p>
                          </div>
                        </div>
                      </div>

                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user"><img src="./product/<?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
-img-4.jpg"
                              class="lazy" style="display: inline;"></div>
                          <div class="detail"><span class="arrow"></span>
                            <div class="user-name"><small class="user"></small><p><?php echo $_smarty_tpl->tpl_vars['name6']->value;?>
</p><span><i class="flaticon-time"></i><?php echo $_smarty_tpl->tpl_vars['randomhour7']->value;?>
 hours ago</span></div>
                            <br>
                            <p><?php echo $_smarty_tpl->tpl_vars['authorcomment5']->value;?>
 </p>
                          </div>
                        </div>
                      </div>

                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user"><img src="./product/<?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
-img-5.jpg"
                              class="lazy" style="display: inline;"></div>
                          <div class="detail"><span class="arrow"></span>
                            <div class="user-name"><small class="user"></small><p><?php echo $_smarty_tpl->tpl_vars['name7']->value;?>
</p><span><i class="flaticon-time"></i><?php echo $_smarty_tpl->tpl_vars['randomhour8']->value;?>
 hours ago</span></div>
                            <br>
                            <p><?php echo $_smarty_tpl->tpl_vars['authorcomment6']->value;?>
 </p>
                          </div>
                        </div>
                      </div>

                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user"><img src="./product/<?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
-img-6.jpg"
                              class="lazy" style="display: inline;"></div>
                          <div class="detail"><span class="arrow"></span>
                            <div class="user-name"><small class="user"></small><p><?php echo $_smarty_tpl->tpl_vars['name8']->value;?>
</p><span><i class="flaticon-time"></i><?php echo $_smarty_tpl->tpl_vars['randomhour9']->value;?>
 hours ago</span></div>
                            <br>
                            <p><?php echo $_smarty_tpl->tpl_vars['authorcomment7']->value;?>
 </p>
                          </div>
                        </div>
                      </div>

                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user"><img src="./product/<?php echo $_smarty_tpl->tpl_vars['kw']->value;?>
-img-7.jpg"
                              class="lazy" style="display: inline;"></div>
                          <div class="detail"><span class="arrow"></span>
                            <div class="user-name"><small class="user"></small><p><?php echo $_smarty_tpl->tpl_vars['name9']->value;?>
</p><span><i class="flaticon-time"></i><?php echo $_smarty_tpl->tpl_vars['randomhour10']->value;?>
 hours ago</span></div>
                            <br>
                            <p><?php echo $_smarty_tpl->tpl_vars['authorcomment8']->value;?>
 </p>
                          </div>
                        </div>
                      </div>
                     


                      
                     
                    </div>
                  </div>
                  <div id="Pagination" class="pagination"><span class="current prev">&lt; Prev</span><span class="current">1</span><span class="current next">Next &gt;</span></div>
                </div>

              </div>
            </div>
          </div>
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
>

  <?php echo '<script'; ?>
>


  <?php echo '</script'; ?>
>

</body>

</html><?php }
}
