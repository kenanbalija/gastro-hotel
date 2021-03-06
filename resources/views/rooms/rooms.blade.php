@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="rooms">
  <h3>SOBE I APARTMANI</h3>
  <div class="row">
    <a href="{{ url('/rooms/standard') }}">
      <article class="col-sm-12">

      <div class="col-xs-12 ">
        <div><!-- Standardne sobe sadrže LCD TV, mini-bar te kupaonicu sa besplatnim
           kozmetičkim priborom i fenom. Pomoćni ležajevi i dječji kreveti dostupni
            su na zahtjev. Možete birati između jednokrevetne, dvokrevetne
            (bračni ili razdvojeni kreveti) i trokrevetne sobe.
            <ul>
              <li>Pogled na vrt</li>
              <li>Besplatan wi-fi</li>
              <li>Klima uređaj</li>
              <li>Usluga buđenja</li>
              <li>Posluga u sobu</li>
            </ul> -->
            @foreach($rooms as $room)
              {!! $room->standard_room !!}
            @endforeach
        </div>
      </div>
    </article>
  </a>
  </div>
    <div class="row">
      <a href="{{ url('/rooms/superior') }}">
    <article class="col-sm-12">
      <div class="col-xs-12 ">
        <div><!-- <Ovaj klimatizirani suite uključuje LCD TV sa satelitskim programima,
           prostor za sjedenje s kaučem na rasklapanje, mini bar i kupaonicu s
           besplatnim kozmetičkim priborom, sušilom za kosu te kadom. Također
           ima dodatni WC i potpuno opremljenu čajnu kuhinju. Ova jedinica sadrži
            masažnu stolicu.
            <ul>
              <li>70 m2</li>
              <li>Pogled na vrt</li>
              <li>Besplatan wi-fi</li>
            </ul> -->
            @foreach($rooms as $room)
              {!! $room->superior_room !!}
            @endforeach
        </div>
      </div>
    </article>
  </a>
  </div>

  <div class="row">
  <a href="{{ url('/rooms/deluxe') }}">
    <article class="col-sm-12">
      <div class="col-xs-12 ">
        <div>
          <!-- Ovaj elegantno uređeni suite uključuje klima-uređaj, LCD TV sa satelitskim
          programima, DVD uređaj i prostrani dnevni boravak s kaminom.
          Potpuno opremljena kuhinja ima blagovaonicu. U kupaonici su na raspolaganju
          tuš, sušilo za kosu i besplatni kozmetički pribor. Apartman ima dvije
          velike master sobe sa odvojenim kupaonicama, kao i dvije manje dvokrevetne
           sobe.
           <ul>
             <li>Odvojen ulaz</li>
             <li>Jacuzzi</li>
             <li>Posluga u sobu</li>
           </ul> -->
           @foreach($rooms as $room)
             {!! $room->deluxe_room !!}
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
          <h2>CJENOVNIK</h2><br/>
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
