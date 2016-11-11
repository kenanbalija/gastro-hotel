<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ekko-lightbox.min.css')}}">

</head>
<body id="app-layout">
    <div id="small-nav" class="navbar-fixed-top"  onclick="openNav()">
      <img src="{{ asset('img/gh-logo.png')}}">
      <span>&#9776; Home</span>
    </div>
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="{{ url('/') }}">Početna</a>
        <a href="{{ url('/rooms') }}">Sobe</a>
        <a href="{{ url('/events') }}">Dešavanja</a>
        <a href="{{ url('/services') }}">Usluge</a>
        <a href="{{ url('/contact') }}">Kontakt</a>

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
                      <li><a href="{{ url('/events') }}">Dešavanja</a></li>
                      <li><a href="{{ url('/services') }}">Usluge</a></li>
                      <li><a href="{{ url('/contact') }}">Kontakt</a></li>
                  </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="nav navbar-nav navbar-right">
                    <li><a><button type="button" value="hide/show" class="searchButton" ><img src="{{ asset('img/icons/search-13.ico') }}"></button></a></li>
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
                <a>O Hotelu</a>
              </div>
              <div class="col-xs-3">
                <a>Rezervacija</a>
              </div>
              <div class="col-xs-3">
                <a>Povežimo se</a>
              </div>
              <div class="col-xs-3">
                <a>Sadržaj</a>
              </div>
            </div>
          </div>
        </div>
    </nav>





    @yield('content')
    @yield('showcase')
    @yield('feature')
    @yield('offer')
    @yield('showcase-two')
    @yield('offer-two')
    @yield('feature-two')
    @yield('showcase-three')
    @yield('offer-three')
    @yield('feature-three')
    @yield('offer-four')
    @yield('showcase-final')
    <!-- JavaScripts -->
    <footer>
      <div class="footer-inner">
        <div class="row">
          <div class="col-xs-4"><a href="#"><img src={{ asset('img/icons/facebook.ico') }}></a></div>
          <div class="col-xs-4"><a href="#"><img src={{ asset('img/icons/instagram.ico') }}></a></div>
          <div class="col-xs-4"><a href="#"><img src={{ asset('img/icons/twitter.ico') }}></a></div>
          <!-- <div class="col-xs-3"><a href="#"><img src={{ asset('img/icons/google.ico') }}></a></div> -->
        </div>
      </div>
      <div class="footer-copyright">
        <div>GastroID Hotel &#169; | Privacy policy</div>
        <div>All photographs are copyrighted by Ermin Okerić.</div>
      </div>
    </footer>
    <script>
      function initMap() {
        var uluru = {lat: 	43.836000, lng: 18.320320};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD6SQm2PPCry6AyQZhh8tTRPQMYmM1Bl4k&callback=initMap">
  </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/ekko-lightbox.min.js') }}"></script>
</body>
</html>
