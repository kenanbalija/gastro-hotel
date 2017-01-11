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
    @foreach($contacts as $cont)
      {!! $cont->contact !!}
    @endforeach
    @if(Auth::user())
    <br/>
    <br/>

      <div>
      <a href="{{ url('/contact/edit/1')}}" class="btn btn-danger" >
        EDIT
      </a>
      </div>
      <br/>

    @endif
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
