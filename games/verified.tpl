<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>{$mytitle}{$pnumber}</title>
  <meta name="description" content="Verified Torrents - {$mytitle}{$pnumber}" />
  <meta name="keywords" content="verified torrents, {$mytitle} verified torrents" />
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
              <a href="/movies/verified.php" title="Movie Library"><i class="flaticon-movie-library"></i> Movie
                library</a>
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
            <h2>Verified {$mytitle}{$pnumber}</h2>
          </div>
          <div class="box-info-detail">
            <div class="black-box">
              <ul class="clearfix">
                <li>This month's curated, hand-picked, verified torrents</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="box-info trending">
          <div class="box-info-heading clearfix">
            <h1>
              <span class="featured-icon"><i class="flaticon-apps"></i></span>
              Verified List Of Games
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
                    <a href="{$link0}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link0}">{$tlink0}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm21}</td>
                  <td class="coll-3 leeches">{$lrdm21}</td>
                  <td class="coll-date">{$time1}</td>
                  <td class="coll-4 size mob-uploader">{$name1}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link1}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link1}">{$tlink1}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm1}</td>
                  <td class="coll-3 leeches">{$lrdm1}</td>
                  <td class="coll-date">{$time2}</td>
                  <td class="coll-4 size mob-uploader">{$name2}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link2}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link2}">{$tlink2}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm2}</td>
                  <td class="coll-3 leeches">{$lrdm2}</td>
                  <td class="coll-date">{$time3}</td>
                  <td class="coll-4 size mob-uploader">{$name3}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link3}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link3}">{$tlink3}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm3}</td>
                  <td class="coll-3 leeches">{$lrdm3}</td>
                  <td class="coll-date">{$time4}</td>
                  <td class="coll-4 size mob-uploader">{$name4}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link4}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link4}">{$tlink4}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm4}</td>
                  <td class="coll-3 leeches">{$lrdm4}</td>
                  <td class="coll-date">{$time5}</td>
                  <td class="coll-4 size mob-uploader">{$name5}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link5}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link5}">{$tlink5}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm5}</td>
                  <td class="coll-3 leeches">{$lrdm5}</td>
                  <td class="coll-date">{$time6}</td>
                  <td class="coll-4 size mob-uploader">{$name6}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link6}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link6}">{$tlink6}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm6}</td>
                  <td class="coll-3 leeches">{$lrdm6}</td>
                  <td class="coll-date">{$time7}</td>
                  <td class="coll-4 size mob-uploader">{$name7}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link7}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link7}">{$tlink7}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm7}</td>
                  <td class="coll-3 leeches">{$lrdm7}</td>
                  <td class="coll-date">{$time8}</td>
                  <td class="coll-4 size mob-uploader">{$name8}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link8}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link8}">{$tlink8}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm8}</td>
                  <td class="coll-3 leeches">{$lrdm8}</td>
                  <td class="coll-date">{$time9}</td>
                  <td class="coll-4 size mob-uploader">{$name9}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link9}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link9}">{$tlink9}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm9}</td>
                  <td class="coll-3 leeches">{$lrdm9}</td>
                  <td class="coll-date">{$time10}</td>
                  <td class="coll-4 size mob-uploader">{$name10}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link10}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link10}">{$tlink10}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm10}</td>
                  <td class="coll-3 leeches">{$lrdm10}</td>
                  <td class="coll-date">{$time11}</td>
                  <td class="coll-4 size mob-uploader">{$name11}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link11}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link11}">{$tlink11}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm11}</td>
                  <td class="coll-3 leeches">{$lrdm11}</td>
                  <td class="coll-date">{$time12}</td>
                  <td class="coll-4 size mob-uploader">{$name12}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link12}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link12}">{$tlink12}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm12}</td>
                  <td class="coll-3 leeches">{$lrdm12}</td>
                  <td class="coll-date">{$time13}</td>
                  <td class="coll-4 size mob-uploader">{$name13}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link13}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link14}">{$tlink13}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm13}</td>
                  <td class="coll-3 leeches">{$lrdm13}</td>
                  <td class="coll-date">{$time14}</td>
                  <td class="coll-4 size mob-uploader">{$name14}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link14}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link14}">{$tlink14}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm14}</td>
                  <td class="coll-3 leeches">{$lrdm14}</td>
                  <td class="coll-date">{$time15}</td>
                  <td class="coll-4 size mob-uploader">{$name15}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link15}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link15}">{$tlink15}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm15}</td>
                  <td class="coll-3 leeches">{$lrdm15}</td>
                  <td class="coll-date">{$time16}</td>
                  <td class="coll-4 size mob-uploader">{$name16}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link16}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link16}">{$tlink16}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm16}</td>
                  <td class="coll-3 leeches">{$lrdm16}</td>
                  <td class="coll-date">{$time17}</td>
                  <td class="coll-4 size mob-uploader">{$name17}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link17}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link17}">{$tlink17}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm17}</td>
                  <td class="coll-3 leeches">{$lrdm17}</td>
                  <td class="coll-date">{$time18}</td>
                  <td class="coll-4 size mob-uploader">{$name18}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link18}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link18}">{$tlink18}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm18}</td>
                  <td class="coll-3 leeches">{$lrdm18}</td>
                  <td class="coll-date">{$time19}</td>
                  <td class="coll-4 size mob-uploader">{$name19}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link19}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link19}">{$tlink19}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm19}</td>
                  <td class="coll-3 leeches">{$lrdm19}</td>
                  <td class="coll-date">{$time20}</td>
                  <td class="coll-4 size mob-uploader">{$name20}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$link20}" class="icon"><i class="flaticon-check-mark"></i></a><a
                      href="{$link20}">{$tlink20}</a>
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
              {$activeButton}
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