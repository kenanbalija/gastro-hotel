@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>ROĐENDANI I OSTALE ZABAVE</h3>
  <div class="row">
    @if(Auth::user())
      <div>
      <a href="{{ url('/events/editOffer/1')}}" class="btn btn-danger" >
        EDIT
      </a>
      </div>
    @endif
    <article id="events" class="col-xs-12">
      @foreach($texts as $text)
        {!! $text->birthday !!}
      @endforeach
      <!-- <p>
        Hotel by GastroID nudi mogućnost organizacije proslave rođendana i
        svih ostalih zabava pri ćemu vam ljubazno osoblje hotela stoji na raspolaganju.
      </p>
      <p>
        Zabave se mogu organizovati u restoranu i caffe bar-u, te ukoliko vremenske
        prilike to dopuštaju i u vanjskom prostoru hotela. Kapacitet restorana je do 50 osoba,
         a ukoliko se organizuje event u ljetnom periodu kapacitet se širi na 200 osoba.
        Na raspologanju gostima i ovisno o vrsti zabave, stoji dječje igralište,
        teniski tereni, stolni tenis, vanjski roštilj i drugi prateći sadržaj.
      </p>
      <p>
        Ručak ili večera se može organizovati na bazi švedskog stola ili u slijedovima,
         a ukoliko je više od 50 gostiju preporučeno je odlučiti se za finger food.
          Meni možete dogovoriti s vrhunskim chefom kuhinje koji će prilagoditi
          meni Vašim željama i raspoloživosti namirnica. Tortu i druge slastice
           možete naručiti od hotelskog slastičara.
      </p>
      <p>
        Cijena organizacije rođendana, poslovnog eventa i drugih vrsta zabave
        ovisi o Vašim željama i potrebama, stoga zvaničnu ponudu možete
        očekivati nakon razgovora s osobljem Hotela by GastroID.
      </p>
      <p>Za više informacija, molimo Vas da kontaktirate hotel na e-mail hotel@gastroid.ba ili kontakt telefon 033 770-600. </p> -->
    </article>
  </div>
</section>
@endsection
