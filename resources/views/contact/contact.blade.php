@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="contact-real">
  <article id="contact-map">
    <h3 class="col-xs-12">KONTAKT</h3>
    <section id="contact-map-size" class="col-xs-12">
      <div id="map"></div>
    </section>
  </article>
  <article id="contact-info">
    <section class=" col-xs-12 col-sm-4">
      <h4>ADRESA:</h4>
      <div><span>Nike Kolumbića - Šake 78</span><span>Sarajevo 71000</span><span>Bosna i Hercegovina</span></div>
    </section>
    <section class="col-xs-12 col-sm-4">
      <h4>TEL:</h4>
      <div><span>+387 33 770-600</span></div>
    </section>
    <section class="col-xs-12 col-sm-4">
      <h4>E-MAIL:</h4>
      <div><span>hotel@gastroid.ba</span></div>
    </section>
    <!-- <section class="col-xs-12">
      <h4>MISCELLANEOUS INFORMATION:</h4>
      <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
         Excepteur sint occaecat cupidatat non proident.</span>
    </section> -->
  </article>
</section>
@endsection
@section('offer')
<section id="booking">
  <h3>REZERVACIJE</h3>
  <div class="row">
        <form action="{{ url('/sendform') }}" method="post" enctype="multipart/form-data">
          <input name="firstname" class="col-xs-12" type="text" placeholder="Ime" required>
          <input name="lastname" class="col-xs-12" type="text" placeholder="Prezime" required>
          <input name="email" class="col-xs-12" type="email" placeholder="Email" required>
          <input name="phonenumber" class="col-xs-12" type="number" placeholder="Broj required">
          <span class="col-xs-12">Datum prijave</span><input name="checkin" class="col-xs-12" type="date" value="2016-01-12" required>
          <span class="xol-xs-12">Datum odjave</span><input name="checkout" class="col-xs-12" type="date" value="2016-01-12" required>
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
