@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

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
      <li data-target="#carousel-generic" data-slide-to="8"></li>
      <li data-target="#carousel-generic" data-slide-to="9"></li>
      <li data-target="#carousel-generic" data-slide-to="10"></li>
    </ol>
  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active col-xs-12">
      </div>
      <div class="item col-xs-12">
      </div>
      <div class="item col-xs-12">
      </div>
      <div class="item col-xs-12">
      </div>
      <div class="item col-xs-12">
      </div>
      <div class="item col-xs-12">
      </div>
      <div class="item col-xs-12">

      </div>
      <div class="item col-xs-12">

      </div>
      <div class="item col-xs-12">

      </div>
      <div class="item col-xs-12">

      </div>
      <div class="item col-xs-12">

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
    <h3>O HOTELU</h3>
      <div class="row">
        <div class="col-xs-12 col-md-6 welcome-bg">
          <img src="{{ asset('img/about-bg.jpg') }}">
        </div>

        <div class="col-xs-12 col-md-6 intro-text">
          <!-- Hotel by GastroID u Sarajevu ima dugogodišnju tradiciju pružanja izvanredne
           hotelske usluge gostima i vjernim posjetiocima. Hotel u ponudi ima 40
           elegantno uređenih soba, ali i deluxe apartman koji osigurava potpunu
           privatnost i udobnost gostima. Cijeli hotel je uređen koristeći elemente
           brodskog stila uz namještaj i detalje od punog drva. Situiran je na 11, 000 m2,
            te u ponudi ima à-la-carte restoran s terasom, teniske terene, dječje
            igralište, konferencijsku salu i ostali sadržaj koji je gostima na punom
            raspologanju. Centar grada je udaljen samo 9 km, a blizina tramvajske stanice
             kao i mnoge taxi službe pristupačnih cijena omogućavaju da se vrlo lako dođe
             do željene lokacije. -->
             @foreach($texts as $tekst)
               {!! $tekst->about_tekst !!}
             @endforeach
        </div>
      <div class="col-xs-12 col-md-6 intro text">
        <!-- Hotel by GastroID takođe nudi mogućnost organizacije svih vrsta događaja za
        poslovne i privatne prilike za koje će vam iskusno hotelsko osoblje stajati
        na punom raspolaganju. Hotel u svojoj ponudi ima i organizaciju različitih
        turističkih posjeta i ostalih aktivnosti za hotelske goste za što možete
        izravno kontaktirati osoblje za više detalja. Ukoliko želite provesti ugodan
         i opušten boravak u Sarajevu, Hotel by GastroID je pravi izbor za vas. -->
         @foreach($texts as $tekst)
           {!! $tekst->about_tekst_sub !!}
         @endforeach
       </div>
        </div>
      @if(Auth::user())
        <div>
        <a href="{{ url('/rooms/edit/1')}}" class="btn btn-danger" >
          EDIT
        </a>
        </div>
      @endif
  </section>

@endsection

@section('offer')
<section id="booking">
  <h3>REZERVACIJE</h3>
    <div class="row">
      <form action="{{ url('/sendform') }}" method="post" enctype="multipart/form-data"  required>
        <input name="firstname" class="col-xs-12" type="text" placeholder="Ime"  required>
        <input name="lastname" class="col-xs-12" type="text" placeholder="Prezime"  required>
        <input name="email" class="col-xs-12" type="email" placeholder="Email"  required>
        <input name="phonenumber" class="col-xs-12" type="number" placeholder="Broj"  required>
        <span class="col-xs-12">Datum prijave</span><input name="checkin" class="col-xs-12" type="date" value="2016-01-12"  required>
        <span class="xol-xs-12">Datum odjave</span><input name="checkout" class="col-xs-12" type="date" value="2016-01-12"  required>
        <span class="col-xs-12">Vrsta sobe</span>
        <select name="roomkind" class="col-xs-12">
          <option value="standard">Standardna soba</option>
          <option value="superior">Superior apartman</option>
          <option value="deluxe">Deluxe apartman</option>
        </select>
        <input class="col-xs-12 btn btn-success" type="submit" value="Rezerviši">
      </form>

    </div>
</section>
@endsection

@section('showcase-two')
<section id="connect-us">
  <article class="col-xs-12">
    <h3>POVEŽIMO SE</h3>
  </article>
</section>
<section id="connect-us-sub">
  <article class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
      <a href="https://www.facebook.com/Hotel-by-Gastroid-549599331885337/">
        <div class="green-circle"><img src="{{ asset('img/icons/facebook.ico') }}"></div>
        <div class="green-circle-sub">
          <em>FACEBOOK</em>
        </div>
      </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <a href="https://www.instagram.com/hotel_by_gastroid/?hl=en">
        <div class="green-circle"><img src="{{ asset('img/icons/instagram.ico') }}"></div>
        <div class="green-circle-sub">
          <em>INSTAGRAM</em>
        </div>
      </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <a href="#">
        <div class="green-circle"><img src="{{ asset('img/icons/youtube.ico') }}"></div>
        <div class="green-circle-sub">
          <em>YOUTUBE</em>
        </div>
      </a>
    </div>
  </article>
</section>

@endsection

@section('feature-two')
  <section id="news">
    <h3>SADRŽAJ</h3>
    <div id="ciljane-grupe" class="row">
      <ul>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/swing.png') }}">Dječje igralište</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/parking.png') }}">Parking</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/reunion.png') }}">Konferencijska sala</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/tennis.png') }}">Teniski tereni</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/taxi.png') }}">Prijevoz sa aerodroma</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/reception.png') }}">Recepcija 24h</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/toast.png') }}">A la carte Restaurant</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/wifi.png') }}">Besplatan Wi-fi</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/calendar.png') }}">Organizacija evenata</li>
      </ul>
    </div>
  </section>
@endsection
