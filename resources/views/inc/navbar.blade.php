<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="/images/bluelogo-2c-resize.svg" width="110" height="50" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item{{Request::is('/') ? ' active' : ''}}">
          <a class="nav-link" href="/">Home
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Player Results
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="/players/boxcars">Boxcars</a>
            <a class="dropdown-item" href="/players/wowy">WOWY</a>
            <a class="dropdown-item" href="/players/woodmoney">WoodMoney</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Team Results
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
            <a class="dropdown-item" href="/puckiq/teams/boxcars">Boxcars</a>
            <a class="dropdown-item" href="/puckiq/teams/woodmoney">WoodMoney</a>
          </div>
        </li>
        <li class="nav-item{{Request::is('glossary') ? ' active' : ''}}">
          <a class="nav-link" href="/glossary">Glossary</a>
        </li>
        <li class="nav-item{{Request::is('about') ? ' active' : ''}}">
          <a class="nav-link" href="/about">About</a>
        </li>
      </ul>
    </div>
  </div>
</nav>