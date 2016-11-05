@extends('layouts.app')

@section('content')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="contact-real">
  <article id="contact-map">
    <h3 class="col-xs-12">CONTACTS</h3>
    <section id="contact-map-size" class="col-xs-12">
      <div id="map"></div>
    </section>
  </article>
  <article id="contact-info">
    <section class=" col-xs-12 col-sm-4">
      <h4>ADDRESS:</h4>
      <div><span>138 Sarajevo Ltn</span><span>Bosna i Hercegovina</span><span>Sarajevo 71000</span></div>
    </section>
    <section class="col-xs-12 col-sm-4">
      <h4>PHONES:</h4>
      <div><span>+387 62 746 478</span>+1 504 889 98 98<span></div>
    </section>
    <section class="col-xs-12 col-sm-4">
      <h4>E-MAIL:</h4>
      <div><span>hotel@gastro.com</span></div>
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
  <h3>REZERVACIJE</h3><span class="vertical-line"> | </span><h3>BOOKING</h3><span></span>
    <div class="row">
      <form>
        <input class="col-xs-12" type="text" placeholder="Ime/Name">
        <input class="col-xs-12" type="text" placeholder="Prezime/Surname">
        <input class="col-xs-12" type="email" placeholder="Email">
        <input class="col-xs-12" type="number" placeholder="Broj/Phone">
        <input class="col-xs-12 btn btn-success" type="submit">
      </form>
    </div>
</section>
@endsection
