@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>SKIJANJE</h3>
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
        {!! $text->ski !!}
      @endforeach
      <!-- <p>
        Hotel by GastroID Vam može pomoći u organizaciji izleta na jednu od mnogobrojnih planina i
         ski resorta u okolici Sarajeva. U Sarajevu su održane XIV. Zimske olimpijske igre 1984.
          godine što je dovoljan razlog da posjetite predivne planine i sami se uvjerite u
          autohtonu ponudu i sadržaj.
      </p>
      <p>
        Hotelsko osoblje će učiniti sve da organiziraju izlete na jednu od planina
        (Bjelašnica, Jahorina, Ravna Gora) prilagođavajući se Vašim individualnim
         željama. Cijena skijanja ovisi o broju osoba, cijeni ski karte koja
         zavisi o skijalištu koje bi izabrali uzimajući u obzir da li je skijaš
         početnik ili profesionalni skijaš, te ski instruktoru ukoliko postoji
         potreba za jednim.
      </p>
      <p>
        Ako nemate želju da se okušate u jednom od zimskih sportova (skijanje, ski boarding),
         uvijek možete uživati u ljepotama prirode na svježem zraku,
         u probavanju kulinarskih specijaliteta, sanjkanju, itd. Takođe,
          omogućena je i organizacija prijevoza od strane hotela ukoliko su u pitanju veće grupe.
      </p>
      <p>Za više informacija, molimo Vas da kontaktirate hotel na e-mail hotel@gastroid.ba ili kontakt telefon 033 770-600. </p> -->
    </article>
  </div>
</section>
@endsection
