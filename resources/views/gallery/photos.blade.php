@extends('layouts.app')
@section('content')
  <section id="extra-bg">
  </section>
@endsection
@section('showcase')
<section id="photos">
  <h3>ALBUMI</h3><span class="vertical-line">|</span><h3>PHOTOS</h3>
  <div class="row">
    <div class="col-xs-12 col-sm-3"><a href="{{url('/photos/apartmants')}}"><div id="oneAlbum"></div></a></div>
    <div class="col-xs-12 col-sm-3"><a href="{{url('/photos/restaurants')}}"><div id="twoAlbum"></div></a></div>
    <div class="col-xs-12 col-sm-3"><a href="{{url('/photos/exterior')}}"><div id="thrAlbum"></div></a></div>
    <div class="col-xs-12 col-sm-3"><a href="#"><div id="fouAlbum"></div></a></div>
    <div class="col-xs-12 col-sm-3"><a href="#"><div id="fivAlbum"></div></a></div>
    <div class="col-xs-12 col-sm-3"><a href="#"><div id="sixAlbum"></div></a></div>
    <!-- <section class="col-xs-12">
      <img src="{{ asset('img/rooms-apartmants.jpg') }}">
        <h5 class="col-xs-12 hidden-text">Sobe i apartmani / Rooms and apartments </h5>
    </section>
    <section class="col-xs-12">
      <img src="{{ asset('img/restaurant-terrace.jpg') }}">
      <h5 class="col-xs-12 hidden-text">Restoran I i II, terasa/ Restaurant I & II and terrace </h5>
    </section>
    <section class="col-xs-12">
      <img src="{{ asset('img/hotel-surrounding.jpg') }}">
      <h5 class="col-xs-12 hidden-text">Eksterijer glavnog i popratnog objekta, Hotel surrounding</h5>
    </section> -->

  </div>
</section>

@endsection
