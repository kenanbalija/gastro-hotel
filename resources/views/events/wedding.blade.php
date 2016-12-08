@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>VJENČANJE</h3>
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
        {!! $text->wedding !!}
      @endforeach
      <!-- <p>
        Hotel by GastroID nudi mogućnost organizacije proslave vjenčanja pri ćemu
         će ljubazno i iskusno osoblje hotela stajati na raspolaganju i pokušati
         ispuniti sve Vaše želje za taj poseban dan.
      </p>
      <p>
        Hotel je podijeljen na centralni objekat s restoranom, te pripadajući depadanas
         s kafićem pored velike zelene površine, dječjeg igrališta i teniskih terena,
          a Vama dajemo na izbor gdje bi htjeli održati proslavu, te i samu ceremoniju
           ukoliko to želite. Maksimalan broj mjesta ovisi o godišnjem dobu i
           vremenskim prilikama, te tako u zimskom periodu u zatvorenom prostoru
           restorana moguće je primiti 50 uzvanika. U ljetnom periodu kada se
           proslava može održati i u vanjskom prostoru hotela, maksimalan broj je 200 uzvanika.
      </p>
      <p>
        Meni se prilagođava Vašem ukusu, te ste u mogućnosti birati između više
        menija koje Vam predlaže vrhunski chef hotela GastroID. Takođe,
        možete birati između organizacije ručka ili večere na bazi švedskog
        stola ili serviranja jela u slijedovima. Svadbenu tortu možete naručiti
         od hotelskog slastičara. Cijene menija po osobi se razlikuju iz razloga
         što se meni kreira uslišujući Vaše želje, tako da možete zvaničnu ponudu
         dobiti nakon razgovora sa osobljem i chefom kuhinje.
      </p>
      <p>
        S obzirom da želimo da se mladenci u potpunosti opuste na taj daj poseban
        dan, drago nam je ponuditi  mladencima besplatnu noć boravka u hotelskom apartmanu.
      </p>
      <p>
        Za više informacija, molimo Vas da kontaktirate hotel na e-mail hotel@gastroid.ba
         ili kontakt telefon 033 770-600.
      </p> -->
    </article>
  </div>

</section>
@endsection
