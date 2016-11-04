@extends('layouts.app')
@section('content')
  <section id="extra-bg">
  </section>
@endsection
@section('showcase')
<section id="photos">
  <h3>ALBUMI</h3><span class="vertical-line">|</span><h3>PHOTOS</h3>
  <div class="row">
    <div class="col-xs-12 col-sm-3"><div id="oneAlbum"></div></div>
    <div class="col-xs-12 col-sm-3"><div id="twoAlbum"></div></div>
    <div class="col-xs-12 col-sm-3"><div id="thrAlbum"></div></div>
    <div class="col-xs-12 col-sm-3"><div id="fouAlbum"></div></div>
    <div class="col-xs-12 col-sm-3"><div id="fivAlbum"></div></div>
    <div class="col-xs-12 col-sm-3"><div id="sixAlbum"></div></div>
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
