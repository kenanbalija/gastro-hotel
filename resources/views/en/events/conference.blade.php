@extends('layouts.app')

@section('content')
@include('navigations.navigationEN')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>WEDDING</h3>
  <div class="row">
    @foreach($texts as $text)
      {!! $text->conferenceEn !!}
    @endforeach
    <article id="events" class="col-xs-12">
      <!-- <p>
        You can organize any type of meetings in the conference room, which is at disposal to our guests and visitors.
      </p>
      <p>
        Conference room can hold up to 25-30 people, and has a projector and projection screen.
        The room is fully closed, and thus you are guaranteed full privacy. If you wish to book
        lunch or dinner, you are welcomed to do so in the hotel restaurant. While, all meeting
        breaks can take place in the hotel caffe.
      </p>
      <p>
        Price of booking the conference room depends on the time period, and
        whether you would like to organize lunch or dinner and thus you will
        receive a price estimate after consulting with hotel staff.
      </p>
      <p>
        Please contact us via e-mail hotel@gastroid.ba or by phone at 033 770-600 for more information.
      </p> -->
    </article>
  </div>
</section>
@endsection
