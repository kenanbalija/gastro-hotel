@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section id="news">
  <h3>GOLF</h3>
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
        {!! $text->golf !!}
      @endforeach
      <!-- <p>
        Hotel by GastroID Vam može pomoći u organizaciji posjete golf klubu koji
        se nalazi u neposrednoj blizini Sarajeva. Ako ste zainteresirani u
        aktivan odmor i želite probati nešto novo ili ste zaljubljenik u golf,
        odlazak na golf terene bi bio idealan izbor za Vas tokom boravka u Sarajevu.
      </p>
      <p>
        Golf tereni su završeni 2001. godine, te imaju 9 polja ili rupa.
        U sklopu golf kluba ima i restoran u kojem se
        može izvršiti i rezervacija za ručak ukoliko to želite, ili samo
        osvježenje u caffe bar-u ako Vam treba predah a želite uživati u miru i pogledu na Sarajevo.
      </p>
      <p>
        Hotel Vam može pomoći u organizaciji prijevoza, a zvaničnu cijenu možete dobiti nakon razgovora s hotelskim osobljem.
      </p>
      <p>Za više informacija, molimo Vas da kontaktirate hotel na e-mail hotel@gastroid.ba ili kontakt telefon 033 770-600. </p> -->
    </article>
  </div>
</section>
@endsection
