@extends('layouts.app')

@section('content')
@include('navigations.navigationEN')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>TEAM BUILDING</h3>
  <div class="row">
    @foreach($texts as $text)
      {!! $text->teambuildingEn !!}
    @endforeach
    <article id="events" class="col-xs-12">
      <!-- <p>
        You are welcomed to organize your company's team building at Hotel by
        GastroID, with the option of booking rooms or just organizing a one-day event.
      </p>
      <p>
        Hotel facilities that include the garden area next to tennis courts and the
        caffe bar along with other amenities of the hotel is at your full disposal.
        During summer time you can also have a barbeque in the garden, and play table
        tennis and other team building games. We are delighted to offer team live
        cooking workshops as well. All other meetings and presentation can be moved
        to the conference room that can hold up to 30 people.
      </p>
      <p>
        Lunch and dinner are organized as a buffet with hotel chef personalizing
        the menu to cater to your dietary needs. Breakfast is included with the
        room bookings.
      </p>
      <p>
        The price of organizing team building depends on your preferences,
        and therefore you can expect an official price estimate after consulting
        with the hotel staff. Also, the room prices are calculated based on the
        size of the group.
      </p>
      <p>
        Please contact us via e-mail hotel@gastroid.ba or by phone at 033 770-600 for more information.
      </p> -->
    </article>
  </div>
</section>
@endsection
