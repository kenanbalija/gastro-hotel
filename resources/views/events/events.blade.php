@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<!-- @if(Auth::user())
  <a class="editStuff" href="{{ url('events/edit/1') }}"><div>EDIT</div></a>
@endif -->
<section id="news">

  <h3>SASTANCI I DOGADAJI</h3>
  <div class="row">
    <article id="events" class="col-xs-12">
      <div>
        <!-- U mogućnosti ste organizovati sve vrste sastanaka i zabavnih događaja
        privatnog i poslovnog karaktera pri čemu vam osoblje
        hotela stoji na raspolaganju da vam pruži kvalitetnu uslugu i vrhunski provod. -->
        @foreach($events as $event)
          {!! $event->meetings !!}
        @endforeach
        <ul class="row">
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/signs.png') }}">
            <a href="{{ url('/events/weddings') }}">Vjenčanja</a>
          </li>
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/team.png') }}">
            <a href="{{ url('/events/teams') }}">Team building</a>
          </li>
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/presentation.png') }}">
            <a href="{{ url('/events/conferences') }}">Konferencijska Sala</a>
          </li>
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/food.png') }}">
            <a href="{{ url('/events/birthdays') }}">Rođendani i ostale zabave</a>
          </li>
        </ul>
      </div>
    </article>
  </div>
  @if(Auth::user())

  <div>
  <a href="{{ url('/events/edit/1')}}" class="btn btn-danger" >
    EDIT
  </a>
  </div>
  @endif
</section>

@endsection
@section('showcase-two')
<section id="news">
  <h3>USLUGE ZA GOSTE</h3>
  <div class="row">
    <article id="guest-services" class="col-xs-12">
      <div>
        <!-- Hotel nudi organizaciju izleta za što se možete obratiti
        hotelskom osoblju za više informacija pri čemu će Vam rado
        pomoći da ponudu prilagodite Vasim potrebama.<br/>
        Molim Vas kontaktirajte nas na hotel@gastroid.ba ili telefon +387 33 770-600 -->
        @foreach($events as $event)
          {!! $event->services !!}
        @endforeach
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
  @if(Auth::user())

  <div>
  <a href="{{ url('/services/edit/1')}}" class="btn btn-danger" >
    EDIT
  </a>
  </div>
  @endif
</section>
@endsection
