@extends('layouts.app')

@section('content')
@include('navigations.navigationEN')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>GOLFING</h3>
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
        {!! $text->golfEn !!}
      @endforeach
      <!-- <p>
        Hotel by GastroID can organize visits to the golf club in near proximity to Sarajevo city center.
        If you are interested in an active vacation and want to try something new, or you are a golf
        enthusiast, visit to the golf club would be an ideal choice during your stay in Sarajevo.
      </p>
      <p>
        Golf club was opened in 2001 and has 9 holes. If you wish to dine
        there, we can make reservations on your behalf, or you can simply take a break in the
        caffe with a view of Sarajevo and beautiful nature.
      </p>
      <p>
        Hotel can help you arrange transportation, and the final price can be estimated after consulting with our staff.
      </p>
      <p>Please contact us via e-mail hotel@gastroid.ba or by phone at 033 770-600 for more information.</p> -->
    </article>
  </div>
</section>
@endsection
