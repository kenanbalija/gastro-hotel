@extends('layouts.app')

@section('content')
<section>
<div id="carousel-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-generic" data-slide-to="1"></li>
      <li data-target="#carousel-generic" data-slide-to="2"></li>
      <li data-target="#carousel-generic" data-slide-to="3"></li>
      <li data-target="#carousel-generic" data-slide-to="4"></li>
      <li data-target="#carousel-generic" data-slide-to="5"></li>
      <li data-target="#carousel-generic" data-slide-to="6"></li>
      <li data-target="#carousel-generic" data-slide-to="7"></li>
    </ol>
  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active col-xs-12">
        <!--<img class='col-xs-12' src="{{ asset('img/hotel-restaurant.jpg') }}" alt="..."> -->
      </div>
      <div class="item col-xs-12">
        <!-- <img class='col-xs-12' src="{{ asset('img/depadans.jpg') }}" alt="..."> -->
      </div>
      <div class="item col-xs-12">
        <!-- <img class='col-xs-12' src="{{ asset('img/hotel-room.jpg') }}" alt="..."> -->
      </div>
      <div class="item col-xs-12">
        <!-- <img class='col-xs-12' src="{{ asset('img/court.jpg') }}" alt="..."> -->
      </div>
      <div class="item col-xs-12">
        <!-- <img class='col-xs-12' src="{{ asset('img/presedential-bedroom.jpg') }}" alt="..."> -->
      </div>
      <div class="item col-xs-12">
        <!-- <img class='col-xs-12' src="{{ asset('img/buffet.jpg') }}" alt="..."> -->

      </div>
      <div class="item col-xs-12">
        <!-- <img class='col-xs-12' src="{{ asset('img/hotel-room.jpg') }}" alt="..."> -->

      </div>
      <div class="item col-xs-12">
        <!-- <img class='col-xs-12' src="{{ asset('img/reception.jpg') }}" alt="..."> -->

      </div>
    </div>
  <!-- Controls
  <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  -->
</div>
<section class="carous-bg">
  <div class="carous-bg-inner">
    <div class="col-xs-12">
      
    </div>
  </div>
</section>
</section>
@endsection

@section('showcase')
  <section id="welcome">
    <h3>O HOTELU</h3><span class="vertical-line">|</span><h3>ABOUT OUR HOTEL</h3><span></span>
      <div class="row">
        <div class=" col-md-4 welcome-bg">
          <img src="{{ asset('img/reception.jpg') }}">
        </div>
        <div class="col-sm-6 col-md-4 intro-text">
          Hotel by GastroID u Sarajevu ima dugogodišnju
          tradiciju pružanja izvanredne hotelske usluge
          gostima i posjetiocima. Hotel u ponudi ima 40
           elegantno uređenih soba, ali i deluxe apartman
           koji osigurava potpunu privatnost i udobnost gostima.
            Situiran je na 11, 000 m2, te u ponudi ima à-la-carte
            restoran s terasom, teniske terene, dječje igraliste,
            konferencijsku salu i ostali sadržaj.<br/>
            U hotelu je moguće organizovati sve vrste događaja za poslovne i
            privatne prilike za koje će vam iskusno hotelsko osoblje stajati
            na punom raspolaganju. Hotel u svojoj ponudi ima i organizaciju
            različitih turističkih posjeta i ostalih aktivnosti za hotelske goste.
            Osoblje hotela će uraditi sve da gosti u potpunosti mogu uživati u
           svom boravku u Sarajevu.
        </div>
        <div class="col-sm-6 col-md-4 intro-text">
          Hotel by GastroID in Sarajevo has a long
          tradition of offering an exceptional guest
          service. Hotel has 40 elegantly decorated
          rooms, as well as a deluxe apartment ensuring
          complete privacy and comfort. The hotel is set
          on 11, 000 m2 featuring an à-la-carte restaurant
          with a sun terrace, tennis court, children playground,
          conference hall and other accompanying facilities.

          All type of business meetings and private events can be organized
          with experienced hotel staff being at full disposal to our guests.
          Hotel is also offering to organize entertaining tourist visits and
          leisure activities outside hotel premises. Hotel by GastroID staff
          will ensure that the guests are completely taken care of and can
          fully enjoy their visit to Sarajevo.

        </div>
      </div>
  </section>
@endsection


@section('feature')
<section id="offers">
  <div>
    <h1 class="col-md-10">Month's getaway packages</h1>
    <button class="btn-success col-md-2">See packages</button>
  </div>
</section>
@endsection

@section('offer')
<section id="booking">
  <h3>REZERVACIJE</h3><span class="vertical-line"> | </span><h3>BOOKING</h3><span></span>
    <div class="row">
      <form>
        <input class="col-xs-12" type="text" placeholder="Ime/Name">
        <input class="col-xs-12" type="text" placeholder="Prezime/Surname">
        <input class="col-xs-12" type="email" placeholder="Email">
        <input class="col-xs-12" type="number" placeholder="Broj/Phone">
        <input class="col-xs-12 btn btn-success" type="submit">
      </form>
    </div>
</section>
@endsection

@section('showcase-two')
<section id="connect-us">
  <article class="col-xs-12">
    <h1>CONNECT WITH US</h1>
  </article>
</section>
<section id="connect-us-sub">
  <article class="row">
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="green-circle"><img src="{{ asset('img/icons/facebook.ico') }}"></div>
      <div class="green-circle-sub">
        <em>FACEBOOK</em>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="green-circle"><img src="{{ asset('img/icons/instagram.ico') }}"></div>
      <div class="green-circle-sub">
        <em>YOUTUBE</em>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="green-circle"><img src="{{ asset('img/icons/twitter.ico') }}"></div>
      <div class="green-circle-sub">
        <em>INSTAGRAM</em>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="green-circle"><img src="{{ asset('img/icons/address-book.ico') }}"></div>
      <div class="green-circle-sub">
        <em>BOOKING</em>
      </div>
    </div>
  </article>
</section>

@endsection
