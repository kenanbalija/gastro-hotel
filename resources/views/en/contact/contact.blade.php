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
    @foreach($contacts as $cont)
      {!! $cont->contactEn !!}
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
  <h3>RESERVATIONS</h3>
  <div class="row">
    <form action="{{ url('/sendform') }}" method="post" enctype="multipart/form-data">
      <input name="firstname" class="col-xs-12" type="text" placeholder="First Name" required>
      <input name="lastname" class="col-xs-12" type="text" placeholder="Last Name" required>
      <input name="email" class="col-xs-12" type="email" placeholder="Email"required>
      <input name="phonenumber" class="col-xs-12" type="number" placeholder="Phone Number" required>
      <span class="col-xs-12">Check-in date</span><input name="checkin" class="col-xs-12" type="date" value="2016-01-12" required>
      <span class="xol-xs-12">Check-out date</span><input name="checkout" class="col-xs-12" type="date" value="2016-01-12" required>
      <span class="col-xs-12">Room Type</span>
      <select name="roomkind" class="col-xs-12">
        <option value="standard">Standard room</option>
        <option value="superior">Superior apartmant</option>
        <option value="deluxe">Deluxe apartmant</option>
      </select>
      <input class="col-xs-12 btn btn-success" type="submit" value="Reserve">
      <div class="g-recaptcha" data-sitekey="6LcplQ8UAAAAAI04FXKGlzkEXXPgYM3VqbDrnPAQ"></div>
    </form>
  </div>
</section>
@endsection
