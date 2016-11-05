@extends('layouts.app')

@section('content')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="rooms">
  <h3>SOBE I APARTMANI</h3><span class="vertical-line">|</span><h3>ROOMS & APARTMENTS</h3>
  <div class="row">
    <article class="col-sm-6">
      <div class="col-xs-12 col-md-6">
        <div class="room-price"><h4>$95</h4>noć</div>
        <img src="{{ asset('img/hotelroom.jpg') }}">
      </div>
      <div class="col-xs-12 col-md-6">
        <h4>Standardne Sobe</h4>
        <div>Standardne sobe sadrze LCD TV, mini-bar te kupaonicu
          sa besplatnim kozmetickim priborom i fenom.
          Pomocni lezajevi i djecji kreveti dostupni su na zahtjev.
        </div>
      </div>
    </article>
    <article class="col-sm-6">
      <div class="col-xs-12 col-md-6">
        <div class="room-price"><h4>$95</h4>per night</div>
        <img src="{{ asset('img/hotelroom.jpg') }}">
      </div>
      <div class="col-xs-12 col-md-6">
        <h4>Rooms</h4>
        <div>All units comprise an LCD TV, a minibar and a
           bathroom with free toiletries and a hairdryer.
          Any type of extra bed or child's cot/crib is upon request.
        </div>
      </div>
    </article>
  </div>
    <div class="row">
    <article class="col-sm-6">
      <div class="col-xs-12 col-md-6">
        <div class="room-price"><h4>$95</h4>noć</div>
        <img src="{{ asset('img/hotelroom.jpg') }}">
      </div>
      <div class="col-xs-12 col-md-6">
        <h4>Superior apartman</h4>
        <div>Ovaj klimatizirani suite uključuje
           LCD TV sa satelitskim programima, prostor
            za sjedenje s kaučem na rasklapanje, mini
            bar i kupaonicu s besplatnim kozmetičkim priborom,
             sušilom za kosu te kadom. Također ima dodatni WC i potpuno
          opremljenu čajnu kuhinju. Ova jedinica sadrži masažnu stolicu.
        </div>
      </div>
    </article>
    <article class="col-sm-6">
      <div class="col-xs-12 col-md-6">
        <div class="room-price"><h4>$95</h4>per night</div>
        <img src="{{ asset('img/hotelroom.jpg') }}">
      </div>
      <div class="col-xs-12 col-md-6">
        <h4>Superior Apartment</h4>
        <div>Air-conditioned suite featuring an LCD
           satellite TV, a seating area with a sofa bed,
            a minibar and a bathroom providing free toiletries,
             hairdryer and a bath tub. This suite features an
             additional toilet, and a fully equipped
             kitchenette. This room features a massage chair.
        </div>
      </div>
    </article>
  </div>

  <div class="row">
  <article class="col-sm-6">
    <div class="col-xs-12 col-md-6">
      <div class="room-price"><h4>$95</h4>noć</div>
      <img src="{{ asset('img/hotelroom.jpg') }}">
    </div>
    <div class="col-xs-12 col-md-6">
      <h4>Deluxe apartman</h4>
      <div>a.	Ovaj elegantno uređeni suite uključuje klima-uređaj,
         LCD TV sa satelitskim programima, DVD uređaj i
          prostrani dnevni boravak s kaminom. Potpuno opremljena
           kuhinja ima blagovaonicu. U kupaonici su na raspolaganju tuš,
        sušilo za kosu i besplatni kozmetički pribor.
      </div>
    </div>
  </article>
  <article class="col-sm-6">
    <div class="col-xs-12 col-md-6">
      <div class="room-price"><h4>$95</h4>per night</div>
      <img src="{{ asset('img/hotelroom.jpg') }}">
    </div>
    <div class="col-xs-12 col-md-6">
      <h4>Deluxe Apartment</h4>
      <div>This elegant suite offers air-conditioning,
        LCD satellite TV and a DVD player and a fireplace
        in a spacious living room. A fully equipped kitchen
        has a dining area. The bathroom
        includes a shower, hairdryer and free toiletries.
      </div>
    </div>
  </article>
</div>
</section>
@endsection


@section('feature')
  <section id="lifestyle-budget">
    <article class="row">
      <div class="col-md-12">
        <h2>CJENOVNIK / PRICE LIST</h2><br/>
        <div>VAŽI DO 21.1.2017
        </div><br/><br/>
        <button class="btn btn-success">download</button>
      </div>
    </article>
  </section>
@endsection
@section('showcase-two')
<section id="rooms">
  <h3>NAJPOPULARNIJE SOBE</h3><span class="vertical-line">|</span><h3>MOST POPULAR</h3> 
  <div class="row">
    <article class="col-sm-12">
      <div class="col-xs-12 col-md-6">
        <div class="room-price"><h4 id="room-price-white">$115</h4>noć</div>
        <img src="{{ asset('img/hotelroom.jpg') }}">
      </div>
      <div class="col-xs-12 col-md-6">
        <h4>Standardne Sobe</h4>
        <div>Standardne sobe sadrze LCD TV, mini-bar te kupaonicu
          sa besplatnim kozmetickim priborom i fenom.
          Pomocni lezajevi i djecji kreveti dostupni su na zahtjev.
        </div>
      </div>
    </article>
    <article class="col-sm-12">
      <div class="col-xs-12 col-md-6">
        <div class="room-price"><h4>$125</h4>noć</div>
        <img src="{{ asset('img/hotelroom.jpg') }}">
      </div>
      <div class="col-xs-12 col-md-6">
        <h4>Standardne Sobe</h4>
        <div>Standardne sobe sadrze LCD TV, mini-bar te kupaonicu
          sa besplatnim kozmetickim priborom i fenom.
          Pomocni lezajevi i djecji kreveti dostupni su na zahtjev.
        </div>
      </div>
    </article>
  </div>
</section>
@endsection
