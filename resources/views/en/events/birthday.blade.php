@extends('layouts.app')

@section('content')
@include('navigations.navigationEN')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>BIRTHDAY CELEBRATIONS AND OTHER EVENTS</h3>
  <div class="row">
    @foreach($texts as $text)
      {!! $text->birthdayEn !!}
    @endforeach
    <article id="events" class="col-xs-12">
      <!-- <p>
        We are delighted to assist you in organizing a birthday celebration
        and all other party's at our hotel.
      </p>
      <p>
        Parties can be organized in the restaurant or the caffe, and if
        weather conditions are favourable parties can be held in the
        garden area. Maximum number of guests in the restaurant is up
        to 50, while during summer time with the party moved to the
        garden area, the maximum number of guests can be up to 200.
        At disposal to our guests are all hotel amenities including kid's
        playground, tennis courts, table tennis and barbeque.
      </p>
      <p>
        Lunch or dinner can be organized based on whether you prefer a buffet
        or meals in courses, and if the number of guests is above 50 we kindly
        recommend finger food. You can discuss the menu with our kitchen chef
        who will gladly adhere to your wishes. Cake and other desserts can be
        ordered from our hotel pastry chef
      </p>
      <p>
        Price of organizing a birthday party, business event and any other event
        or celebration depends on your wishes and needs, and therefore you can
        expect a price estimate after consulting with our staff.
      </p>
      <p>
        Please contact us via e-mail hotel@gastroid.ba or by phone at 033 770-600 for more information.
      </p> -->
    </article>
  </div>
</section>
@endsection
