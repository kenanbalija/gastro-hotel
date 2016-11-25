<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gastro Hotel</title>

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
        <a href="{{ url('/en/') }}">Home</a>
        <a href="{{ url('/en/rooms') }}">Rooms</a>
        <a href="{{ url('/en/photos') }}">Photos</a>
        <a href="{{ url('/en/events') }}">Events and services</a>
        <!-- <a href="{{ url('/services') }}">Usluge</a> -->
        <a href="{{ url('/en/contact') }}">Contact</a>
    </div>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div>
        <div class="container" id="nav-container">
          <section id="navigation-links">
              <div class="navbar-header">

                  <!-- Branding Image -->
                  <a class="navbar-brand" href="{{ url('/en/') }}">
                      <img class="brand-img" src=" {{ asset('img/gastro-natpis-logo-white.png')}}">
                  </a>
                  <div class="navbar-brand-border"></div>
              </div>

              <div class="collapse navbar-collapse" id="app-navbar-collapse">
                  <!-- Left Side Of Navbar -->
                  <ul class="nav navbar-nav row">
                      <li class="dropdown">
                        <a href="{{ url('/en/home')}}">
                          <button type="button" value="hide/show" class="homeButton" >Home</button><span class="caret"></span>
                        </a>
                      </li>
                      <li><a href="{{ url('/en/rooms') }}">Rooms</a></li>
                      <li><a href="{{ url('/en/photos') }}">Photos</a></li>
                      <li><a href="{{ url('/en/events') }}">Events and services</a></li>
                      <!-- <li><a href="{{ url('/en/services') }}">Usluge</a></li> -->
                      <li><a href="{{ url('/en/contact') }}">Contact</a></li>
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
                <a href="{{ url('/en/home') }}#welcome">About Us</a>
              </div>
              <div class="col-xs-3">
                <a href="{{ url('/en/home') }}#booking">Reservations</a>
              </div>
              <div class="col-xs-3">
                <a href="{{ url('/en/home') }}#connect-us">Connect</a>
              </div>
              <div class="col-xs-3">
                <a href="{{ url('/en/home') }}#news">Key amnesties</a>
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
          <div class="col-xs-3"><a href="https://www.facebook.com/Hotel-by-Gastroid-549599331885337/"><img src={{ asset('img/icons/facebook.ico') }}></a></div>
          <div class="col-xs-3"><a href="https://www.instagram.com/hotel_by_gastroid/?hl=en"><img src={{ asset('img/icons/instagram.ico') }}></a></div>
          <div class="col-xs-3"><a href="#"><img src={{ asset('img/icons/youtube.ico') }}></a></div>
          <div class="col-xs-3"><a href="{{ url('/contact') }}"><img src={{ asset('img/icons/map-2.ico') }}></a></div>
        </div>
      </div>
      <div class="footer-copyright">
        <div>GastroID Hotel &#169; | Privacy policy</div>
        <div style="font-size: 8px;">All photographs are copyrighted by Ermin Okerić.</div>
        <div style="font-size: 8px;">Web designed by Elvis Rudonja & Kenan Balija</div>

      </div>
    </footer>
    <script>
      function initMap() {
        var uluru = {lat: 	43.836000, lng: 18.320320};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: uluru,
          styles: [{"featureType":"administrative.country","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"lightness":"81"},{"color":"#d8c593"}]},{"featureType":"administrative.country","elementType":"labels","stylers":[{"lightness":"58"},{"hue":"#ff0000"}]},{"featureType":"administrative.country","elementType":"labels.text","stylers":[{"gamma":"0.56"}]},{"featureType":"administrative.province","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"labels","stylers":[{"lightness":"40"}]},{"featureType":"administrative.locality","elementType":"labels.text.stroke","stylers":[{"weight":"0.49"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#FFBB00"},{"saturation":43.400000000000006},{"lightness":37.599999999999994},{"gamma":1}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#00FF6A"},{"saturation":-1.0989010989011234},{"lightness":11.200000000000017},{"gamma":1}]},{"featureType":"road.highway","elementType":"all","stylers":[{"hue":"#FFC200"},{"saturation":-61.8},{"lightness":45.599999999999994},{"gamma":1}]},{"featureType":"road.arterial","elementType":"all","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":51.19999999999999},{"gamma":1}]},{"featureType":"road.local","elementType":"all","stylers":[{"hue":"#FF0300"},{"saturation":-100},{"lightness":52},{"gamma":1}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#0078FF"},{"saturation":-13.200000000000003},{"lightness":2.4000000000000057},{"gamma":1}]},{"featureType":"water","elementType":"labels","stylers":[{"lightness":"43"}]}]

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
