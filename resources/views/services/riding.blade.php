@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>JAHANJE</h3>
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
        {!! $text->ride !!}
      @endforeach
      <!-- <p>
        Hotel by GastroID stoji na raspolaganju u organizaciji izleta u jedan od više konjičkih
        klubova koji se nalazi u neposrednoj blizini Sarajeva.
        Ukoliko ste zainteresirani za aktivan odmor u prirodi ili želite uživati na svježem
        zraku u predivnom krajoliku, posjeta konjičkom klubu je odličan izbor za Vas.
      </p>
      <p>
        Hotelsko osoblje može direktno s konjičkim klubom dogovoriti posjetu po
        željama zainteresiranih gostiju. S obzirom da konjički klubovi imaju
        različite kapacitete i ponude sadržaja potrebno je izabrati konjičku
        klub koji najbolje odgovara potrebama gostiju. Takođe, omogućena je i
        organizacija prijevoza do kluba od strane hotela ukoliko su u pitanju
        veće grupe.
      </p>
      <p>Za više informacija, molimo Vas da kontaktirate hotel na e-mail hotel@gastroid.ba ili kontakt telefon 033 770-600. </p> -->
    </article>
  </div>
</section>
@endsection
