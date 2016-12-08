@extends('layouts.app')
@section('content')
@include('navigations.navigationEN')

<section>
<div id="carousel-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-generic" data-slide-to="1"></li>
      <li data-target="#carousel-generic" data-slide-to="2"></li>
      <li data-target="#carousel-generic" data-slide-to="3"></li>
      <li data-target="#carousel-generic" data-slide-to="4"></li>
      <li data-target="#carousel-generic" data-slide-to="5"></li>
      <li data-target="#carousel-generic" data-slide-to="6"></li>
      <li data-target="#carousel-generic" data-slide-to="7"></li>
      <li data-target="#carousel-generic" data-slide-to="8"></li>
      <li data-target="#carousel-generic" data-slide-to="9"></li>
      <li data-target="#carousel-generic" data-slide-to="10"></li>
    </ol>
  <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active col-xs-12">
      </div>
      <div class="item col-xs-12">
      </div>
      <div class="item col-xs-12">
      </div>
      <div class="item col-xs-12">
      </div>
      <div class="item col-xs-12">
      </div>
      <div class="item col-xs-12">
      </div>
      <div class="item col-xs-12">

      </div>
      <div class="item col-xs-12">

      </div>
      <div class="item col-xs-12">

      </div>
      <div class="item col-xs-12">

      </div>
      <div class="item col-xs-12">

      </div>
    </div>
  <!-- Controls
  <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  -->
</div>
<section class="carous-bg">
  <div class="carous-bg-inner">
    <div class="col-xs-12">

    </div>
  </div>
</section>
</section>
@endsection

@section('showcase')
  <section id="welcome">
    <h3>ABOUT US</h3>
      <div class="row">
        <div class="col-xs-12 col-md-6 welcome-bg">
          <img src="{{ asset('img/about-bg.jpg') }}">
        </div>
        <div class="col-xs-12 col-md-6 intro-text">
          <!-- Hotel by GastroID in Sarajevo has a long tradition of offering an
          exceptional guest service. Hotel has 40 elegantly decorated rooms,
          as well as a deluxe apartment ensuring complete privacy and comfort.
          The whole hotel Is decorated using elements of “marina style” with
          furniture and other details made out of sold hardwood. The hotel is
          set on 11, 000 m2 featuring an à-la-carte restaurant with a sun terrace,
          tennis court, children playground, conference hall and other accompanying
          facilities and amenities. City centre is located just 9 km from the hotel,
          and the proximity of tram station as well as numerous taxi companies
           offering low prices for their services, allow for any location to be
            easily reached. -->
            @foreach($texts as $tekst)
              {!! $tekst->about_tekst_en !!}
            @endforeach
        </div>
      <div class="col-xs-12 col-md-6 intro text">
        <!-- All type of business meetings and private events can be organized
         with experienced hotel staff being at full disposal to our guests.
          Hotel is also offering to organize entertaining tourist visits and
          leisure activities outside hotel premises. If you wish to experience
           a comfortable and relaxing visit to Sarajevo, Hotel by GastroID is
            the right choice for you. -->
            @foreach($texts as $tekst)
              {!! $tekst->about_tekst_sub_en !!}
            @endforeach
       </div>
        </div>
        @if(Auth::user())
        <br/>
        <br/>

          <div>
          <a href="{{ url('/home/edit/1')}}" class="btn btn-danger" >
            EDIT
          </a>
          </div>
          <br/>

        @endif
  </section>
@endsection

@section('offer')
<section id="booking">
  <h3>RESERVATIONS</h3>
    <div class="row">
      <form action="{{ url('/sendform') }}" method="post" enctype="multipart/form-data">
        <input name="firstname" class="col-xs-12" type="text" placeholder="First Name"  required>
        <input name="lastname" class="col-xs-12" type="text" placeholder="Last Name"  required>
        <input name="email" class="col-xs-12" type="email" placeholder="Email"  required>
        <input name="phonenumber" class="col-xs-12" type="number" placeholder="Phone Number"  required>
        <span class="col-xs-12">Check-in date</span><input name="checkin" class="col-xs-12" type="date" value="2016-01-12" required>
        <span class="xol-xs-12">Check-out date</span><input name="checkout" class="col-xs-12" type="date" value="2016-01-12"  required>
        <span class="col-xs-12">Room Type</span>
        <select name="roomkind" class="col-xs-12">
          <option value="standard">Standard room</option>
          <option value="superior">Superior apartmant</option>
          <option value="deluxe">Deluxe apartmant</option>
        </select>
        <input class="col-xs-12 btn btn-success" type="submit" value="Reserve">
      </form>
    </div>
</section>
@endsection

@section('showcase-two')
<section id="connect-us">
  <article class="col-xs-12">
    <h3>CONNECT</h3>
  </article>
</section>
<section id="connect-us-sub">
  <article class="row">
    <div class="col-xs-12 col-sm-6 col-md-4">
      <a href="https://www.facebook.com/Hotel-by-Gastroid-549599331885337/">
        <div class="green-circle"><img src="{{ asset('img/icons/facebook.ico') }}"></div>
        <div class="green-circle-sub">
          <em>FACEBOOK</em>
        </div>
      </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <a href="https://www.instagram.com/hotel_by_gastroid/?hl=en">
        <div class="green-circle"><img src="{{ asset('img/icons/instagram.ico') }}"></div>
        <div class="green-circle-sub">
          <em>INSTAGRAM</em>
        </div>
      </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4">
      <a href="#">
        <div class="green-circle"><img src="{{ asset('img/icons/youtube.ico') }}"></div>
        <div class="green-circle-sub">
          <em>YOUTUBE</em>
        </div>
      </a>
    </div>
  </article>
</section>

@endsection

@section('feature-two')
  <section id="news">
    <h3>KEY AMNESTIES</h3>
    <div id="ciljane-grupe" class="row">
      <ul>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/swing.png') }}">Children's playground</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/parking.png') }}">Parking</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/reunion.png') }}">Conference room</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/tennis.png') }}">Tennis court</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/taxi.png') }}">Transport from the airport</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/reception.png') }}">Reception 24h</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/toast.png') }}">A la carte Restaurant</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/wifi.png') }}">Free Wi-fi</li>
        <li class="col-xs-12 col-sm-4"><img src="{{ asset('img/icons/calendar.png') }}">Event organization</li>
      </ul>
    </div>
  </section>
@endsection
