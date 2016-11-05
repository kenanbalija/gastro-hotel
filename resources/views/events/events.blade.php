@extends('layouts.app')

@section('content')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>SASTANCI I DOGADAJI</h3><span class="vertical-line">|</span><h3>MEETINGS & EVENTS</h3>
  <div class="row">
    <section id=events-img class="col-xs-12">
      <img src="{{ asset('img/wedding-room.jpg')}} ">
    </section>
    <article id="events" class="col-xs-12 col-sm-6">
      <div>
        U mogućnosti ste organizovati sve vrste sastanaka i zabavnih dogadaja
        privatnog i poslovnog karaktera pri cemu vam osoblje
        hotela stoji na raspolaganju da vam pruzi kvalitetnu uslugu i vrhunski provod.
        <ul>
          <li>Konferencijska Sala</li>
          <li>Vjenčanja</li>
          <li>Team building</li>
          <li>Rođendani i ostale zabave</li>
        </ul>
      </div>
    </article>
    <article id="events" class="col-xs-12 col-sm-6">
      <div>
        You are welcome to organize any type of private or
        business meetings and events for which our hotel staff are at your full disposal
        in order to ensure quality service and overall great time
        <ul>
          <li>Conference room</li>
          <li>Weddings</li>
          <li>Team building</li>
          <li>Birthday celebrations and other events</li>
        </ul>
      </div>
    </article>
  </div>
</section>

@endsection
