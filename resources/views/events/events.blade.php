@extends('layouts.app')

@section('content')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>SASTANCI I DOGADAJI</h3>
  <div class="row">
    <article id="events" class="col-xs-12">
      <div>
        U mogućnosti ste organizovati sve vrste sastanaka i zabavnih događaja
        privatnog i poslovnog karaktera pri čemu vam osoblje
        hotela stoji na raspolaganju da vam pruži kvalitetnu uslugu i vrhunski provod.
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
</section>

@endsection
