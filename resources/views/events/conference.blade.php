@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>KONFERENCIJSKA SALA</h3>
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
        {!! $text->conference !!}
      @endforeach
      <!-- <p>
        Hotel by GastroID nudi mogućnost organizacije svih vsta sastanaka u
        konferencijskoj sali koja stoji na raspolaganju gostima i posjetiocima hotela.
      </p>
      <p>
        Konferencijska sala je kapaciteta 25-30 sjedećih mjesta, te sadrži projektor
        i platno. Prostorija je zatvorenog tipa, te Vam je omogućena potpuna privatnost.
        A ukoliko želite organizovati ručak ili večeru, hotelski restoran
        Vam stoji na raspolaganju. Takođe, pauze od sastanaka možete provesti
        u hotelskom caffe-u.
      </p>
      <p>
        Cijena najma konferencijske sale zavisi o vremenskom periodu, te o potrebi
         za organizacijom ručka ili večere stoga zvaničnu ponudu možete dobiti nakon razgovora s hotelskim osobljem.
      </p>
      <p>
        Za više informacija, molimo Vas da kontaktirate hotel na e-mail hotel@gastroid.ba ili kontakt telefon 033 770-600.
      </p> -->
    </article>
  </div>
</section>
@endsection
