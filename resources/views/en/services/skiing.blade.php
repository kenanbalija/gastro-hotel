@extends('layouts.app')

@section('content')
@include('navigations.navigationEN')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>SKIING</h3>
  <div class="row">
    @if(Auth::user())
      <div>
      <a href="{{ url('/services/editOffer/1')}}" class="btn btn-danger" >
        EDIT
      </a>
      </div>
    @endif
    <article id="events" class="col-xs-12">
      @foreach($texts as $text)
        {!! $text->skiEn !!}
      @endforeach
      <!-- <p>
        Hotel by GastroID is offering to help organize excursions to
        one of many mountains and ski resorts surronding Sarajevo.
        Sarajevo was the host of XIV. Winter Olympic games in 1984 which is a
        good reason to visit and enjoy one of our beautiful mountain resorts.
      </p>
      <p>
        Hotel staff recommends visits to Bjelašnica, Jahorina, or
        Ravna Gora based on what you wish to see and do on your trip.
        Prices depend on the group size, price of ski
        ticket, and whether you'll be needing a ski insctructor for beginners.
      </p>
      <p>
        If you don't wish to try out one of winter sports,
        but rather just spend a relaxing day you can always
        enjoy hiking in the beautiful mountain surrounding, culinary
        specialties, spa etc. Also, hotel can arrange transportation for
        larger groups.
      </p>

      <p>Please contact us via e-mail hotel@gastroid.ba or by phone at 033 770-600 for more information.</p> -->
    </article>
  </div>
</section>
@endsection
