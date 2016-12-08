@extends('layouts.app')

@section('content')
@include('navigations.navigationEN')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>HORSE RIDING</h3>
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
        {!! $text->rideEn !!}
      @endforeach
      <!-- <p>
        Hotel by GastroID is offering to organize visits to one of many equestrian clubs in near proximity to Sarajevo.
        If you are interested in spending an active vacation in the countryside or want to enjoy the peace and quite, a visit to
        equestrian club will be a perfect choice for you.
      </p>
      <p>
        Hotel staff can together with the equestrian club organize a visit according to you preferences. Since clubs have different
        capacities and offerings, you should choose an offer that adheres to your needs. Also, we can arrange transportation to the club for larger groups.
      </p>
      <p>Please contact us via e-mail hotel@gastroid.ba or by phone at 033 770-600 for more information.</p> -->
    </article>
  </div>
</section>
@endsection
