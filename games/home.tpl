<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>{$mytitle}</title>
  <meta name="description" content="{$mytitle}" />
  <meta name="keywords" content="{$mytitle}" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../resources/main.css">
  <link rel="stylesheet" href="../resources/flaticon.css">

  <link rel="shortcut icon" href="../favicon.ico" />
    <!--[if lt IE 9]><script src = "../resources/html5shiv.js"></script><![endif]-->
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
            <div class="choose-search">{$searchbar2}</div>
          </form>
        </div>
      </div>
      <nav>
        <ul class="main-navigation">
          <li><a href="/../" title="Go to Home">Home</a></li>
          <li>
            <a href="/applications/" title="Software Applications">Applications</a>
          </li>
          <li class="active"><a href="/games/" title="Games">Games</a></li>
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
      <div class="col-9 page-content trending-torrent-explore">
        <div class="box-info filter-list small-list">
          <div class="box-info-heading clearfix no-bottom-radius">
            <h2>{$mytitle}</h2>
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
            <h1>
              <span class="featured-icon"><i class="flaticon-apps"></i></span>
              PC Games List
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
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl0}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl0}.html" title="{$rsstorrent0}">{$rsstorrent0}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm21}</td>
                  <td class="coll-3 leeches">{$lrdm21}</td>
                  <td class="coll-date">{$time1}</td>
                  <td class="coll-4 size mob-uploader">{$name1}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl1}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl1}.html" title="{$rsstorrent1}">{$rsstorrent1}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm1}</td>
                  <td class="coll-3 leeches">{$lrdm1}</td>
                  <td class="coll-date">{$time2}</td>
                  <td class="coll-4 size mob-uploader">{$name2}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl2}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl2}.html" title="{$rsstorrent2}">{$rsstorrent2}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm2}</td>
                  <td class="coll-3 leeches">{$lrdm2}</td>
                  <td class="coll-date">{$time3}</td>
                  <td class="coll-4 size mob-uploader">{$name3}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl3}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl3}.html" title="{$rsstorrent3}">{$rsstorrent3}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm3}</td>
                  <td class="coll-3 leeches">{$lrdm3}</td>
                  <td class="coll-date">{$time4}</td>
                  <td class="coll-4 size mob-uploader">{$name4}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl4}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl4}.html" title="{$rsstorrent4}">{$rsstorrent4}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm4}</td>
                  <td class="coll-3 leeches">{$lrdm4}</td>
                  <td class="coll-date">{$time5}</td>
                  <td class="coll-4 size mob-uploader">{$name5}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl5}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl5}.html" title="{$rsstorrent5}">{$rsstorrent5}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm5}</td>
                  <td class="coll-3 leeches">{$lrdm5}</td>
                  <td class="coll-date">{$time6}</td>
                  <td class="coll-4 size mob-uploader">{$name6}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl6}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl6}.html" title="{$rsstorrent6}">{$rsstorrent6}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm6}</td>
                  <td class="coll-3 leeches">{$lrdm6}</td>
                  <td class="coll-date">{$time7}</td>
                  <td class="coll-4 size mob-uploader">{$name7}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl7}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl7}.html" title="{$rsstorrent7}">{$rsstorrent7}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm7}</td>
                  <td class="coll-3 leeches">{$lrdm7}</td>
                  <td class="coll-date">{$time8}</td>
                  <td class="coll-4 size mob-uploader">{$name8}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl8}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl8}.html" title="{$rsstorrent8}">{$rsstorrent8}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm8}</td>
                  <td class="coll-3 leeches">{$lrdm8}</td>
                  <td class="coll-date">{$time9}</td>
                  <td class="coll-4 size mob-uploader">{$name9}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl9}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl9}.html" title="{$rsstorrent9}">{$rsstorrent9}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm9}</td>
                  <td class="coll-3 leeches">{$lrdm9}</td>
                  <td class="coll-date">{$time10}</td>
                  <td class="coll-4 size mob-uploader">{$name10}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl10}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl10}.html" title="{$rsstorrent10}">{$rsstorrent10}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm10}</td>
                  <td class="coll-3 leeches">{$lrdm10}</td>
                  <td class="coll-date">{$time11}</td>
                  <td class="coll-4 size mob-uploader">{$name11}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl11}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl11}.html" title="{$rsstorrent11}">{$rsstorrent11}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm11}</td>
                  <td class="coll-3 leeches">{$lrdm11}</td>
                  <td class="coll-date">{$time12}</td>
                  <td class="coll-4 size mob-uploader">{$name12}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl12}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl12}.html" title="{$rsstorrent12}">{$rsstorrent12}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm12}</td>
                  <td class="coll-3 leeches">{$lrdm12}</td>
                  <td class="coll-date">{$time13}</td>
                  <td class="coll-4 size mob-uploader">{$name13}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl13}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl13}.html" title="{$rsstorrent13}">{$rsstorrent13}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm13}</td>
                  <td class="coll-3 leeches">{$lrdm13}</td>
                  <td class="coll-date">{$time14}</td>
                  <td class="coll-4 size mob-uploader">{$name14}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl14}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl14}.html" title="{$rsstorrent14}">{$rsstorrent14}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm14}</td>
                  <td class="coll-3 leeches">{$lrdm14}</td>
                  <td class="coll-date">{$time15}</td>
                  <td class="coll-4 size mob-uploader">{$name15}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl15}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl15}.html" title="{$rsstorrent15}">{$rsstorrent15}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm15}</td>
                  <td class="coll-3 leeches">{$lrdm15}</td>
                  <td class="coll-date">{$time16}</td>
                  <td class="coll-4 size mob-uploader">{$name16}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl16}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl16}.html" title="{$rsstorrent16}">{$rsstorrent16}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm16}</td>
                  <td class="coll-3 leeches">{$lrdm16}</td>
                  <td class="coll-date">{$time17}</td>
                  <td class="coll-4 size mob-uploader">{$name17}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl17}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl17}.html" title="{$rsstorrent17}">{$rsstorrent17}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm17}</td>
                  <td class="coll-3 leeches">{$lrdm17}</td>
                  <td class="coll-date">{$time18}</td>
                  <td class="coll-4 size mob-uploader">{$name18}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl18}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl18}.html" title="{$rsstorrent18}">{$rsstorrent18}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm18}</td>
                  <td class="coll-3 leeches">{$lrdm18}</td>
                  <td class="coll-date">{$time19}</td>
                  <td class="coll-4 size mob-uploader">{$name19}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl19}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl19}.html" title="{$rsstorrent19}">{$rsstorrent19}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm19}</td>
                  <td class="coll-3 leeches">{$lrdm19}</td>
                  <td class="coll-date">{$time20}</td>
                  <td class="coll-4 size mob-uploader">{$name20}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$rsstorrentl20}.html" class="icon"><i class="flaticon-apps"></i></a><a
                      href="{$rsstorrentl20}.html" title="{$rsstorrent20}">{$rsstorrent20}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm20}</td>
                  <td class="coll-3 leeches">{$lrdm20}</td>
                  <td class="coll-date">{$time21}</td>
                  <td class="coll-4 size mob-uploader">{$name21}</td>
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
          <br />
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