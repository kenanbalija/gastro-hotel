@extends('layouts.app')

@section('content')
@include('navigations.navigationEN')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>MEETINGS & EVENTS</h3>
  <div class="row">
    <article id="events" class="col-xs-12">
      <div>
        <!-- You are welcome to organize any type of private or business meetings and
         events for which our hotel staff are at your full disposal in order to
         ensure quality service and overall great time. -->
         @foreach($events as $event)
           {!! $event->meetingsEn !!}
         @endforeach
        <ul class="row">
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/signs.png') }}">
            <a href="{{ url('/en/events/weddings') }}">Weddings</a>
          </li>
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/team.png') }}">
            <a href="{{ url('/en/events/teams') }}">Team building</a>
          </li>
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/presentation.png') }}">
            <a href="{{ url('/en/events/conferences') }}">Conference room</a>
          </li>
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/food.png') }}">
            <a href="{{ url('/en/events/birthdays') }}">Birthday celebrations and other events</a>
          </li>
        </ul>
      </div>
    </article>
  </div>
  @if(Auth::user())

  <div>
  <a href="{{ url('/events/edit/1')}}" class="btn btn-danger" >
    EDIT
  </a>
  </div>
  @endif
</section>

@endsection
@section('showcase-two')
<section id="news">
  <h3>GUEST SERVICES</h3>
  <div class="row">
    <article id="guest-services" class="col-xs-12">
      <div>
        <!-- Hotel is offering to organize excursions for which you can contact staff
         for more information, and the hotel staff will be glad to adapt the
         offerings to your individual needs.<br/>
        Please contact us via email at hotel@gastroid.ba or contact telephone
        number at +387 33 770-600 -->
        @foreach($events as $event)
          {!! $event->servicesEn !!}
        @endforeach
        <ul class="row">
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/sports.png') }}">
            <a href="{{ url('/en/services/skiing') }}">Skiing</a>
          </li>
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/ball.png') }}">
            <a href="{{ url('/en/services/golfing') }}">Golf</a>
          </li>
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/saddle.png') }}">
            <a href="{{ url('/en/services/riding') }}">Horse riding</a>
          </li>
          <li class="col-xs-12 col-sm-6 ">
            <img style="width: 32px;" src="{{ asset('img/icons/canoe.png') }}">
            <a href="{{ url('/en/services/rafting') }}">Rafting</a>
          </li>
        </ul>
      </div>
    </article>
  </div>
  @if(Auth::user())

  <div>
  <a href="{{ url('/events/edit/1')}}" class="btn btn-danger" >
    EDIT
  </a>
  </div>
  @endif
</section>
@endsection
