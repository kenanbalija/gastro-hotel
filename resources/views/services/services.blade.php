@extends('layouts.app')

@section('content')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>USLUGE ZA GOSTE</h3>
  <div class="row">
    <article id="guest-services" class="col-xs-12">
      <h4>Prijevoz sa i do aerodroma</h4>
      <h4>Organizacija izleta</h4>
      <div>
        Hotel nudi organizaciju izleta za što se možete obratiti
        hotelskom osoblju za više informacija pri čemu će Vam rado
        pomoći da ponudu prilagodite Vasim potrebama.<br/>
        Molim Vas kontaktirajte nas na hotel@gastroid.ba ili telefon +387 33 770-600
        <ul class="row">
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/sports.png') }}">
            <a href="{{ url('/services/skiing') }}">Skijanje</a>
          </li>
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/ball.png') }}">
            <a href="{{ url('/services/golfing') }}">Golf</a>
          </li>
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/saddle.png') }}">
            <a href="{{ url('/services/riding') }}">Jahanje</a>
          </li>
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/canoe.png') }}">
            <a href="{{ url('/services/rafting') }}">Rafting</a>
          </li>
        </ul>
      </div>
    </article>
  </div>
</section>

@endsection
