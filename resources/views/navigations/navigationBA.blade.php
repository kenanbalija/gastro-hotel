<div id="small-nav" class="navbar-fixed-top"  onclick="openNav()">
  <img src="{{ asset('img/gh-logo.png')}}">
  <span>&#9776; Home</span>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="{{ url('/') }}">Početna</a>
    <a href="{{ url('/rooms') }}">Sobe</a>
    <a href="{{ url('/photos') }}">Fotografije</a>
    <a href="{{ url('/events') }}">Dešavanja i Usluge</a>
    <!-- <a href="{{ url('/services') }}">Usluge</a> -->
    <a href="{{ url('/contact') }}">Kontakt</a>
    <a href="{{ url('/en')}}"><img src="{{ asset('img/lang.png') }}"></a>

</div>
<nav class="navbar navbar-default navbar-fixed-top">
  <div>
    <div class="container" id="nav-container">
      <section id="navigation-links">
          <div class="navbar-header">

              <!-- Branding Image -->
              <a class="navbar-brand" href="{{ url('/') }}">
                  <img class="brand-img" src=" {{ asset('img/gastro-natpis-logo-white.png')}}">
              </a>
              <div class="navbar-brand-border"></div>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav row">
                  <li class="dropdown">
                    <a href="{{ url('/home')}}">
                      <button type="button" value="hide/show" class="homeButton" >Početna</button><span class="caret"></span>
                    </a>
                  </li>
                  <li><a href="{{ url('/rooms') }}">Sobe</a></li>
                  <li><a href="{{ url('/photos') }}">Fotografije</a></li>
                  <li><a href="{{ url('/events') }}">Dešavanja i Usluge</a></li>
                  <!-- <li><a href="{{ url('/services') }}">Usluge</a></li> -->
                  <li><a href="{{ url('/contact') }}">Kontakt</a></li>
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ url('/en')}}"><button type="button" value="" class="searchButton" ><img src="{{ asset('img/lang.png') }}"></button></a></li>
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a href="{{ url('/login') }}"><img class="padlock-img" src="{{ asset('img/icons/padlock.ico') }}"></a></li>
                  @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <img class="padlock-img" src="{{ asset('img/icons/padlock.ico') }}">
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li id="no-border"><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>logout</a></li>
                          </ul>
                      </li>
                  @endif
              </ul>
          </div>
      </section>
    </div>
  </div>
    <div id="searchContainer" class="container">
      <div id="searchDiv">
        <div class="row">
          <span class="col-xs-1">Search</span>
          <input class="col-xs-7" type="text" placeholder="enter word">
          <button class="col-xs-2 btn btn-success">search</button>
        </div>
      </div>
    </div>
    <div id="aboutContainer"  class="container">
      <div id="aboutDiv">
        <div class="row">
          <div class="col-xs-3">
            <a href="{{ url('/home') }}#welcome">O Hotelu</a>
          </div>
          <div class="col-xs-3">
            <a href="{{ url('/home') }}#booking">Rezervacija</a>
          </div>
          <div class="col-xs-3">
            <a href="{{ url('/home') }}#connect-us">Povežimo se</a>
          </div>
          <div class="col-xs-3">
            <a href="{{ url('/home') }}#news">Sadržaj</a>
          </div>
        </div>
      </div>
    </div>
</nav>
