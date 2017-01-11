@extends('layouts.app')

@section('content')
@include('navigations.navigationEN')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="rooms">
  <h3>SOBE I APARTMANI</h3>
  <div class="row">
    <a href="{{ url('/en/rooms/standard') }}">
      <article class="col-sm-12">
      <div class="col-xs-12 col-md-6">
        <section id="stnd-rooms"></section>
      </div>
      <div class="col-xs-12 col-md-6">
        <h4>Rooms</h4>
        <div><!-- All units comprise an LCD TV, a minibar and a bathroom with free
          toiletries and a hairdryer. Any type of extra bed or child's cot/crib
           is upon request. Guest can choose a single, double (double or twin
           beds) or triple room
            <ul>
              <li>Garden view</li>
              <li>Free wi-fi</li>
              <li>Air conditioning</li>
              <li>Wake-up service</li>
              <li>Room service</li>
            </ul> -->
            @foreach($rooms as $room)
              {!! $room->standard_room_en !!}
            @endforeach
        </div>
      </div>
    </article>
  </a>
  </div>
    <div class="row">
      <a href="{{ url('/en/rooms/superior') }}">
    <article class="col-sm-12">
      <div class="col-xs-12 col-md-6">
        <section id="sup-rooms"></section>
      </div>
      <div class="col-xs-12 col-md-6">
        <h4>Superior apartment</h4>
        <div><!--b.	Air-conditioned suite featuring an LCD satellite TV, a seating
           area with a sofa bed, a minibar and a bathroom providing free
           toiletries, hairdryer and a bath tub. This suite features an
           additional toilet, and a fully equipped kitchenette. This room
           features a massage chair.
            <ul>
              <li>70 m2</li>
              <li>Garden view</li>
              <li>Free wi-fi</li>
            </ul> -->
            @foreach($rooms as $room)
              {!! $room->superior_room_en !!}
            @endforeach
        </div>
      </div>
    </article>
  </a>
  </div>

  <div class="row">
  <a href="{{ url('/en/rooms/deluxe') }}">
    <article class="col-sm-12">
      <div class="col-xs-12 col-md-6">
        <section id="dlx-rooms"></section>
      </div>
      <div class="col-xs-12 col-md-6">
        <h4>Deluxe apartman</h4>
        <div>
          <!-- b.	This elegant suite offers air-conditioning, LCD satellite TV
          and a DVD player and a fireplace in a spacious living room.
          A fully equipped kitchen has a dining area. The bathroom includes a
          shower, hairdryer and free toiletries. The apartment consists of
          two larger master bedrooms with separate bathrooms, as well as two
          smaller bedrooms.
           <ul>
             <li>Separate entrance</li>
             <li>Jacuzzi</li>
             <li>Room service</li>
           </ul> -->
           @foreach($rooms as $room)
             {!! $room->deluxe_room_en !!}
           @endforeach
        </div>
      </div>
    </article>
  </a>
</div>
<br/>
@if(Auth::user())

<div>
<a href="{{ url('/rooms/edit/1')}}" class="btn btn-danger" >
  EDIT
</a>
</div>
@endif
</section>

@endsection


@section('feature')
  <section id="lifestyle-budget">
    <article class="row">
      <div class="col-md-12">
        <a href="#">
          <h2>PRICE LIST</h2><br/>
          <div>
            <form action="{{ URL::to('rooms/downloadPrice')}}" method="post" enctype="multipart/form-data">
              <input type="submit" name="url" class="btn btn-success" value="Download">
            </form>
          </div>
        </a>
      </div>
    </article>
  </section>
@endsection
