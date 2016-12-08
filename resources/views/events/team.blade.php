@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>TEAM BUILDING</h3>
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
        {!! $text->teambuilding !!}
      @endforeach
      <!-- <p>
        Hotel by GastroID nudi mogućnost organizacije team building sastanaka
        za Vašu kompaniju i zaposlenike na bazi noćenja ili dnevnog boravka.
      </p>
      <p>
        Na raspolaganje Vašem timu, a u dogovoru s hotelskim menadžmentom, se
        može staviti sav hotelski sadržaj koji uključuje i veliku zelenu površinu
         pored teniskih terena i caffe bar-a. U ljetnom periodu može se organizovati
          i roštilj, a stoji Vam na raspologanju i stolni tenis i zelena površina
           koja je dovoljno velika za organizaciju različitih team building igri.
            Posebno ističemo mogućnost organizacije timskih live cooking radionica
             po našem ili posebno kreiranom Vašem scenariju. Takođe, sastanke i
              prezentacije možete održati u konferencijskoj sali koja je kapaciteta
               do 30 sjedećih mjesta.
      </p>
      <p>
        Ručak i večera se organizuje na bazi švedskog stola s tim da vrhunski
        chef Hotela by GastroID prilagođava meni ukoliko imate posebne želje.
        Doručak je uključen u cijenu hotelske sobe.
      </p>
      <p>
        Cijena organizacije team building sastanaka ovisi o Vašim željama,
        te zvaničnu ponudu možete očekivati nakon razgovora s osobljem Hotela by
        GastroID. Takođe, cijene noćenja ovise o veličini grupe.
      </p>
      <p>
        Za više informacija, molimo Vas da kontaktirate hotel na e-mail hotel@gastroid.ba ili kontakt telefon 033 770-600.
      </p> -->
    </article>
  </div>
</section>
@endsection
