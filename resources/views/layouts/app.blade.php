<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gastro Hotel | GH</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ekko-lightbox.min.css')}}">
    <script src="//cdn.ckeditor.com/4.6.1/full/ckeditor.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body id="app-layout">

  @if (Session::has('flash_message'))
    <div id="alert">{{ Session::get('flash_message') }}</div>
  @endif
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
        <div style="font-size: 10px;">Developed by Kenan Balija</div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script>
    $(document).ready(function(){
               $("#alert").delay(3000).fadeOut(500);
           });
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone-amd-module.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js'></script>

    <script src="{{ asset('js/ekko-lightbox.min.js') }}"></script>
    <script>
        CKEDITOR.replace( 'about' );
        CKEDITOR.replace( 'aboutSub' );
        CKEDITOR.replace( 'aboutEn' );
        CKEDITOR.replace( 'aboutSubEn' );
    </script>
    <script>
        CKEDITOR.replace( 'standard' );
        CKEDITOR.replace( 'standardEn' );
        CKEDITOR.replace( 'superior' );
        CKEDITOR.replace( 'superiorEn' );
        CKEDITOR.replace( 'deluxe' );
        CKEDITOR.replace( 'deluxeEn' );
    </script>
    <script>
        CKEDITOR.replace( 'meeting' );
        CKEDITOR.replace( 'meetingEn' );
        CKEDITOR.replace( 'service' );
        CKEDITOR.replace( 'serviceEn' );
    </script>
    <script>
        CKEDITOR.replace( 'contact' );
        CKEDITOR.replace( 'contactEn' );

    </script>
</body>
</html>
