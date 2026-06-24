<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>
    Search Results For {$newentry|replace:'%20':'
    '|replace:'#':'.'|replace:'/':'.'|replace:'\\':'.'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}
  </title>
  <meta name="description"
    content="Search Results For {$newentry|replace:'%20':' '|replace:'#':'.'|replace:'/':'.'|replace:'\\':'.'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}" />
  <meta name="keywords"
    content="{$newentry|replace:'%20':' '|replace:'#':'.'|replace:'/':'.'|replace:'\\':'.'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="../resources/main.css">
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
            <div class="choose-search">{$searchbar6}</div>
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
          <li><a href="/xxx/" title="Adult XXX">Adult XXX</a></li>
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
      <div class="col-9 page-content trending-torrent-explore">
        <div class="box-info filter-list small-list">
          <div class="box-info-heading clearfix no-bottom-radius">
            <h2>Search category : {$mytitle}</h2>
          </div>
          <div class="box-info-detail">
            <div class="black-box">
              <ul class="clearfix">
                <li>We've found what you are looking for ...</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="box-info trending">
          <div class="box-info-heading clearfix">
            <h1>
              <span class="featured-icon"><i class="flaticon-h264"></i></span>
              Top 4 Search Results For: {$newentry|replace:'%20':'
              '|replace:'#':'.'|replace:'/':'.'|replace:'\\':'.'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}
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
                    <a href="{$newentry|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}-{$moviegroup1|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}.html"
                      class="icon"><i class="flaticon-h264"></i></a><a
                      href="{$newentry|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}-{$moviegroup1|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}.html">{$newentry|replace:'/':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}-{$moviegroup1|replace:'/':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm0}</td>
                  <td class="coll-3 leeches">{$lrdm0}</td>
                  <td class="coll-date">{$time1}</td>
                  <td class="coll-4 size mob-uploader">{$name1}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$newentry|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}-{$moviegroup2|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}.html"
                      class="icon"><i class="flaticon-h264"></i></a><a
                      href="{$newentry|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}-{$moviegroup2|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}.html">{$newentry|replace:'/':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}-{$moviegroup2|replace:'/':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm1}</td>
                  <td class="coll-3 leeches">{$lrdm1}</td>
                  <td class="coll-date">{$time2}</td>
                  <td class="coll-4 size mob-uploader">{$name2}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$newentry|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}-{$moviegroup3|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}.html"
                      class="icon"><i class="flaticon-h264"></i></a><a
                      href="{$newentry|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}-{$moviegroup3|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}.html">{$newentry|replace:'/':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}-{$moviegroup3|replace:'/':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm2}</td>
                  <td class="coll-3 leeches">{$lrdm2}</td>
                  <td class="coll-date">{$time3}</td>
                  <td class="coll-4 size mob-uploader">{$name3}</td>
                </tr>
                <tr>
                  <td class="coll-1 name">
                    <a href="{$newentry|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}-{$moviegroup4|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}.html"
                      class="icon"><i class="flaticon-h264"></i></a><a
                      href="{$newentry|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}-{$moviegroup4|replace:'/':'-'|replace:' ':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}.html">{$newentry|replace:'/':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}-{$moviegroup4|replace:'/':'-'|replace:'%7B':'-'|replace:'%7D':'-'|replace:'#':'.'|replace:'\/':'-'|replace:'\\':'-'|replace:'%':'.'|replace:'[':'.'|replace:']':'.'}</a>
                  </td>
                  <td class="coll-2 seeds">{$rdm3}</td>
                  <td class="coll-3 leeches">{$lrdm3}</td>
                  <td class="coll-date">{$time4}</td>
                  <td class="coll-4 size mob-uploader">{$name4}</td>
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