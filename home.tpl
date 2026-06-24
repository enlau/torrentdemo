<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>{$mytitle}</title>
  <meta name="description" content="{$mytitle}" />
  <meta name="keywords" content="{$mytitle} torrents" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href=./resources/main.css>
  <link rel="stylesheet" href=./resources/flaticon.css>

  <link rel="shortcut icon" href="/favicon.ico" />

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
          <a href="/../index.php"><img alt="logo" src="./resources/images/logo.png" /></a>
        </div>
        <a href="#" class="navbar-menu"><span></span><span></span><span></span></a>
        <div class="search-box">
          <form id="search-form" method="get" action="/applications/search.php">
            <input type="text" id="autocomplete" name="key" class="ui-autocomplete-input form-control"
              autocomplete="off" />
            <button type="submit" class="btn btn-search">
              <i class="flaticon-search"></i><span>Search</span>
            </button>
            <div class="choose-search"> 
            
<input type="radio" name="ans" value="ans1" checked onclick="window.location='/applications/'" />Applications
<input type="radio" name="ans" value="ans2" onclick="window.location='/games/'" />  Games
<input type="radio" name="ans" value="ans3" onclick="window.location='/music/'" />  Music
<br>
<input type="radio" name="ans" value="ans4" onclick="window.location='/xxx/'" />  XXX
<input type="radio" name="ans" value="ans5" onclick="window.location='/movies/'" />  Movies
<input type="radio" name="ans" value="ans6" onclick="window.location='/tv-shows/" />  Tv Series
            
            
            
            
            </div>
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


{include file="homepage_template/applications_section.tpl"}

<p>&nbsp;</p>

{include file="homepage_template/games_section.tpl"}

<p>&nbsp;</p>

{include file="homepage_template/music_section.tpl"}

<p>&nbsp;</p>

{include file="homepage_template/tvshows_section.tpl"}

<p>&nbsp;</p>

{include file="homepage_template/xxx_section.tpl"}

<p>&nbsp;</p>

{include file="homepage_template/movies_section.tpl"}



{* {include file="homepage_template/applicationsRSS_section.tpl"}

<p>&nbsp;</p>

{include file="homepage_template/gamesRSS_section.tpl"} *}

<p>&nbsp;</p>

{include file="homepage_template/musicRSS_section.tpl"}

<p>&nbsp;</p>

{include file="homepage_template/tvshowsRSS_section.tpl"}

{* <p>&nbsp;</p>

{include file="homepage_template/xxxRSS_section.tpl"} *}

<p>&nbsp;</p>

{include file="homepage_template/moviesRSS_section.tpl"}


          </div>
          <div class="pagination">
           
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
    </ul>
    <p class="info">{$yourwebsite} - 2019</p>
  </footer>

  <script src=./resources/jquery-1.11.0.min.js"></script>
  <script></script>
</body>

</html>