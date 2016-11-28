@extends('layouts.app')

@section('content')
@include('navigations.navigationEN')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="contact-real">
  <article id="contact-map">
    <h3 class="col-xs-12">Contact</h3>
    <section id="contact-map-size" class="col-xs-12">
      <div id="map"></div>
    </section>
  </article>
  <article id="contact-info">
    <section class=" col-xs-12 col-sm-4">
      <h4>ADDRESS:</h4>
      <div><span>Nike Kolumbića - Šake 78</span><span>Sarajevo 71000</span><span>Bosnia and Herzegovina</span></div>
    </section>
    <section class="col-xs-12 col-sm-4">
      <h4>TEL:</h4>
      <div><span>+387 33 770-600</span></div>
    </section>
    <section class="col-xs-12 col-sm-4">
      <h4>E-MAIL:</h4>
      <div><span>hotel@gastroid.ba</span></div>
    </section>
  </article>
</section>
@endsection
@section('offer')
<section id="booking">
  <h3>RESERVATIONS</h3>
  <div class="row">
    <form>
      <input class="col-xs-12" type="text" placeholder="Name">
      <input class="col-xs-12" type="text" placeholder="Surname">
      <input class="col-xs-12" type="email" placeholder="Email">
      <input class="col-xs-12" type="number" placeholder="Phone">
      <span class="col-xs-12">Check-in</span><input class="col-xs-12" type="date" value="2016-01-12">
      <span class="xol-xs-12">Check-out</span><input class="col-xs-12" type="date" value="2016-01-12">
      <span class="col-xs-12">Room type</span>
      <select class="col-xs-12">
        <option value="standard">Standard room</option>
        <option value="superior">Superior apartmant</option>
        <option value="deluxe">Deluxe apartmant</option>
      </select>
      <input class="col-xs-12 btn btn-success" type="submit" value="Reserve">
    </form>
  </div>
</section>
@endsection
