@extends('en.layouts.app')
@section('content')
  <section id="extra-bg">
  </section>
@endsection
@section('showcase')
<section id="photos">
  <h3>ALBUMI</h3>
  <div class="row">
    <div class="col-xs-12 col-sm-4">
      <span>Apartments and rooms</span>
      <a href="{{url('/photos/apartmants')}}"><div id="oneAlbum"></div></a>
    </div>
    <div class="col-xs-12 col-sm-4">
      <span>Restaurant I & II</span>
      <a href="{{url('/photos/restaurants')}}"><div id="twoAlbum"></div></a>
    </div>
    <div class="col-xs-12 col-sm-4">
      <span>Hotel surroinding</span>
      <a href="{{url('/photos/exterior')}}"><div id="thrAlbum"></div></a>
    </div>
  </div>
</section>

@endsection
