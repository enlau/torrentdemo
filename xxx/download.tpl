<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>
    {$title|replace:'%20':'
    '|replace:'#':'.'|replace:'/':'.'|replace:'\\':'.'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}
  </title>
  <meta name="description"
    content="{$metakw|replace:'%20':' '|replace:'#':'.'|replace:'/':'.'|replace:'\\':'.'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}" />
  <meta name="keywords"
    content="{$metakw|replace:'%20':' '|replace:'#':'.'|replace:'/':'.'|replace:'\\':'.'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../resources/main.css">
  <link rel="stylesheet" href="../resources/down.css">
  <link rel="stylesheet" href="../resources/flaticon.css">
  <link rel="shortcut icon" href="../favicon.ico" />

  <!--[if lt IE 9]><script src="../resources/html5shiv.js"></script><![endif]-->

</head>

<body>
  <div class="mobile-menu"></div>
  <div class="top-bar">
    <div class="container">
      <ul class="top-bar-nav"></ul>
    </div>
  </div>
  <header>
    <div class="container">
      <div class="clearfix">
        <div class="logo">
          <a href="/../index.php"><img alt="logo" src="../resources/images/logo.png" /></a>
        </div>
        <a href="#" class="navbar-menu"><span></span><span></span><span></span></a>
        <div class="search-box">
          <form id="search-form" method="get" action="search.php">
            <input type="text" id="autocomplete" name="key" class="ui-autocomplete-input form-control"
              autocomplete="off" />
            <button type="submit" class="btn btn-search">
              <i class="flaticon-search"></i><span>Search</span>
            </button>
            <div class="choose-search">{$searchbar4}</div>
          </form>
        </div>
      </div>
       <nav>
        <ul class="main-navigation">
          <li><a href="/../" title="Go to Home">Home</a></li>
          <li>
            <a href="/applications/" title="Software Applications">Applications</a>
          </li>
          <li><a href="/games/" title="Games">Games</a></li>
          <li><a href="/movies/" title="Movies">Movies</a></li>
          <li class="active"><a href="/xxx/" title="Adult XXX">Adult XXX</a></li>
        </ul>
      </nav>
      </nav>
    </div>
  </header>
  <main class="container">
    <div class="row">
      <aside class="col-3 pull-right">
        <div class="list-box">
          <h2>Browse torrents</h2>
          <ul>
            <li>
              <a href="/applications/" title="Applications"><i class="flaticon-apps"></i> Applications</a>
            </li>
            <li>
              <a href="/games/" title="Games"><i class="flaticon-games"></i> Games</a>
            </li>
            <li>
              <a href="/xxx/" title="XXX"><i class="flaticon-xxx"></i> XXX</a>
            </li>
            <li>
              <a href="/tv-shows/" title="New TV Episodes"><i class="flaticon-tv"></i> New TV Episodes</a>
            </li>
            <li>
              <a href="./verified.php" title="Verified Torrents"><i class="flaticon-mark"></i> Verified Torrents</a>
            </li>
            <li>
              <a href="/movies/"><i class="flaticon-movies"></i> Movies</a>
            </li>
            <li>
              <a href="/movies/page2.php" title="Movie Library"><i class="flaticon-movie-library"></i> Movie library</a>
            </li>
            <li>
              <a href="/music/" title="Movies"><i class="flaticon-music"></i> Music</a>
            </li>
            <li>
              <a href="/tv-shows/page2.php" title="Television"><i class="flaticon-tv"></i> Television</a>
            </li>
          </ul>
        </div>
        <div class="list-box hidden-sm">
          <h2>Friends</h2>
          <ul class="list">
            <li>
              <a target="_blank" href="{$affiliate1}"> {$affiliateTitle1}</a>
            </li>
            <li>
              <a target="_blank" href="{$affiliate2}"> {$affiliateTitle2}</a>
            </li>
            <li>
              <a target="_blank" href="{$affiliate3}"> {$affiliateTitle3}</a>
            </li>
            <li>
              <a target="_blank" href="{$affiliate4}"> {$affiliateTitle4}</a>
            </li>
            <li>
              <a target="_blank" href="{$affiliate5}"> {$affiliateTitle5}</a>
            </li>
            <li>
              <a target="_blank" href="{$affiliate6}"> {$affiliateTitle6}</a>
            </li>
            <li>
              <a target="_blank" href="{$affiliate7}"> {$affiliateTitle7}</a>
            </li>
          </ul>
        </div>
      </aside>

      

      <div class="col-9 page-content">
        <div class="box-info torrent-detail-page  vpn-info-wrap">
          <div class="box-info-heading clearfix">
            <h1>
              Download {$keyword|replace:'%20':'
              '|replace:'#':'.'|replace:'/':'.'|replace:'\\':'.'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}
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
                  <a href="./torrents/{$dottedlink}.torrent" title="{$keyword}.torrent"
                    class="adfbdbdb btn btn-addeaafc"><span class="icon"><i class="flaticon-bbcbbf"></i></span>Torrent
                    Download</a>
                </li>

                <li>
                  <a id="dccacfad" class="adfbdbdb btn btn-dccacfad" href="{$downloadaffiliate1}"><span class="icon"><i
                        class="flaticon-cebadfcd"></i></span>Dir‌ect Download</a>
                </li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li>
                  <a id="bbdefafa" class="adfbdbdb btn btn-bbdefafa" href="{$downloadaffiliate2}"><span class="icon"><i
                        class="flaticon-efaadbde"></i></span>An‌on‌ymous Download</a>
                </li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
                <li style="margin-top:0px;"></li>
              </ul>
              <ul class="list">
                <li><strong>Category</strong> <span>Video</span></li>
                <li><strong>Type</strong> <span>XXX Movies</span></li>
                <li><strong>Language</strong> <span>English</span></li>
                <li>
                  <strong>Uploaded By</strong>
                  <span><small class="uploader"></small> {$name1}</span>
                </li>
              </ul>
              <ul class="list">
                <li><strong>Downloads</strong> <span>{$lrdm1}</span></li>
                <li>
                  <strong>Last checked</strong>
                  <span>{$randomhour1} minutes ago</span>
                </li>
                <li>
                  <strong>Date uploaded</strong>
                  <span>{$randomhour2} hours ago</span>
                </li>
                <li>
                  <strong>Seeders</strong> <span class="seeds">{$rdm2}</span>
                </li>
                <li>
                  <strong>Leechers</strong>
                  <span class="leeches">{$lrdm2}</span>
                </li>
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
            <div class="dabeeedc">
              <a id="dabeeedc" href="{$vpnaffiliate1}"><span class="icon"><i class="flaticon-efaadbde"></i></span>Your
                IP Address is
                <strong class="vpn-nip">{$userIP}</strong>. Your ISP and
                Government can track your torrent activity! Hide your IP with
                a VPN!</a>
            </div>
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
                <li>
                  <a href="{$vpnaffiliate2}">Hide your ip! Protect yourself!</a>
                </li>
              </ul>
              <div class="infohash-box">
                <p><strong>Infohash :</strong> <span>{$randomhash1}</span></p>
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
                <li role="presentation" class="active">
                  <p>Comments <span class="active">{$noComments1}</span></p>
                </li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="comments">
                  <h2>Comments</h2>
                  <div class="comment-box">
                    <div id="comment">
                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user">
                            <img src="./product/{$kw}-img-1.jpg" class="lazy" style="display: inline;" />
                          </div>

                          <div class="detail">
                            <span class="arrow"></span>
                            <div class="user-name">
                              <small class="user"></small>
                              <p>{$name3}</p>
                              <span><i class="flaticon-time"></i>{$randomhour4}
                                hours ago</span>
                            </div>
                            <br />
                            <p>{$authorcomment2}</p>
                          </div>
                        </div>
                      </div>

                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user">
                            <img src="./product/{$kw}-img-2.jpg" class="lazy" style="display: inline;" />
                          </div>

                          <div class="detail">
                            <span class="arrow"></span>
                            <div class="user-name">
                              <small class="user"></small>
                              <p>{$name4}</p>
                              <span><i class="flaticon-time"></i>{$randomhour5}
                                hours ago</span>
                            </div>
                            <br />
                            <p>{$authorcomment3}</p>
                          </div>
                        </div>
                      </div>

                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user">
                            <img src="./product/{$kw}-img-3.jpg" class="lazy" style="display: inline;" />
                          </div>

                          <div class="detail">
                            <span class="arrow"></span>
                            <div class="user-name">
                              <small class="user"></small>
                              <p>{$name5}</p>
                              <span><i class="flaticon-time"></i>{$randomhour6}
                                hours ago</span>
                            </div>
                            <br />
                            <p>{$authorcomment4}</p>
                          </div>
                        </div>
                      </div>

                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user">
                            <img src="./product/{$kw}-img-4.jpg" class="lazy" style="display: inline;" />
                          </div>

                          <div class="detail">
                            <span class="arrow"></span>
                            <div class="user-name">
                              <small class="user"></small>
                              <p>{$name6}</p>
                              <span><i class="flaticon-time"></i>{$randomhour7}
                                hours ago</span>
                            </div>
                            <br />
                            <p>{$authorcomment5}</p>
                          </div>
                        </div>
                      </div>

                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user">
                            <img src="./product/{$kw}-img-5.jpg" class="lazy" style="display: inline;" />
                          </div>

                          <div class="detail">
                            <span class="arrow"></span>
                            <div class="user-name">
                              <small class="user"></small>
                              <p>{$name7}</p>
                              <span><i class="flaticon-time"></i>{$randomhour8}
                                hours ago</span>
                            </div>
                            <br />
                            <p>{$authorcomment6}</p>
                          </div>
                        </div>
                      </div>

                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user">
                            <img src="./product/{$kw}-img-6.jpg" class="lazy" style="display: inline;" />
                          </div>

                          <div class="detail">
                            <span class="arrow"></span>
                            <div class="user-name">
                              <small class="user"></small>
                              <p>{$name8}</p>
                              <span><i class="flaticon-time"></i>{$randomhour9}
                                hours ago</span>
                            </div>
                            <br />
                            <p>{$authorcomment7}</p>
                          </div>
                        </div>
                      </div>

                      <div class="comment-detail">
                        <div class="comment-info clearfix">
                          <div class="frame user">
                            <img src="./product/{$kw}-img-7.jpg" class="lazy" style="display: inline;" />
                          </div>

                          <div class="detail">
                            <span class="arrow"></span>
                            <div class="user-name">
                              <small class="user"></small>
                              <p>{$name9}</p>
                              <span><i class="flaticon-time"></i>{$randomhour10}
                                hours ago</span>
                            </div>
                            <br />
                            <p>{$authorcomment8}</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="Pagination" class="pagination">
                    <span class="current prev">&lt; Prev</span><span class="current">1</span><span
                      class="current next">Next &gt;</span>
                  </div>
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
    <p class="info">{$yourwebsite} - 2019</p>
  </footer>
  <script src="../resources/jquery-1.11.0.min.js"></script>

  <script></script>
</body>

</html>