@extends('layouts.app')

@section('content')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
  <section id="welcome">
    <h3>ABOUT US</h3><span class="vertical-line">|</span><span>LOREM IPSUM DOLOR SIT AMET</span>
      <div class="row">
        <div class=" col-xs-12 col-sm-4 welcome-bg">
          <img src="{{ asset('img/hotel-workers.jpg') }}">
        </div>
        <div class="col-xs-12 col-sm-8 intro-text">
          Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.
          Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues
          differe solmen in li grammatica, li pronunciation e li plu commun vocabules.
          Omnicos directe al desirabilite de un nov lingua franca:On refusa continuar payar.
          <br/>
          <br/>
          Li Europan lingues es membres del sam familie. Lor separat existentie es un myth.
          Por scientie, musica, sport etc, litot Europa usa li sam vocabular. Li lingues
          differe solmen in li grammatica, li pronunciation e li plu commun vocabules.
          Omnicos directe al desirabilite de un nov lingua franca:On refusa continuar payar
          <br/>
          <br/>
          <button class="btn btn-success">-> Read more</button>
        </div>
      </div>
  </section>
@endsection


@section('feature')
  <section id="lifestyle-budget">
    <article class="row">
      <div class="col-md-12">
        <h1>Taking into account every lifestyle and budget</h1><br/>
        <div>Aenean lacinia, nulla nec faucibus egestas, libero arcu iaculis massa, et ullamcorper nisi
          enim ac erat. Phasellus quis magna id magna imperdiet dapibus. Morbi pulvinar dignissim tristique.
          Vestibulum ante ipsum primis in fau cibus orci luctus et ultrices posuere cubilia Curae;
          Nunc fermentum sagittis tortor at placerat.
        </div><br/><br/>
        <button class="btn btn-success">-> read more</button>
      </div>
    </article>
  </section>
@endsection

@section('offer')
  <section id="offers">
    <div>
      <h1 class="col-md-10">Wedding services</h1>
      <button class="btn-success col-md-2">o more info</button>
    </div>
  </section>
@endsection

@section('showcase-two')
  <section id="staff">
    <h3>OUR PROFFESIONAL STAFF</h3><span class="vertical-line">|</span><span>UT WISI ENIM AD MINIM VEN</span>
    <div class="row">
      <article class="col-md-3 col-sm-6">
        <div class="col-xs-12 "><img src="{{  asset('img/staff.jpg')  }}"></div>
        <div class="col-xs-12 staff-text">
          <h1>John Doe</h1>
          <p>Typi non habent claritatem insitam; est usus
            legentis in iis qui facit eorum claritatem demonstraverunt
          <p>
        </div>
      </article>
      <article class="col-md-3 col-sm-6">
        <div class="col-xs-12 "><img src="{{  asset('img/staff.jpg')  }}"></div>
        <div class="col-xs-12 staff-text">
          <h1>John Doe</h1>
          <p>Typi non habent claritatem insitam; est usus
            legentis in iis qui facit eorum claritatem demonstraverunt
          <p>
        </div>
      </article><article class="col-md-3 col-sm-6">
        <div class="col-xs-12 "><img src="{{  asset('img/staff.jpg')  }}"></div>
        <div class="col-xs-12 staff-text">
          <h1>John Doe</h1>
          <p>Typi non habent claritatem insitam; est usus
            legentis in iis qui facit eorum claritatem demonstraverunt
          <p>
        </div>
      </article><article class="col-md-3 col-sm-6">
        <div class="col-xs-12 "><img src="{{  asset('img/staff.jpg')  }}"></div>
        <div class="col-xs-12 staff-text">
          <h1>John Doe</h1>
          <p>Typi non habent claritatem insitam; est usus
            legentis in iis qui facit eorum claritatem demonstraverunt
          <p>
        </div>
      </article>
    </div>
  </section>
@endsection

@section('feature-two')
<section id="features-stat">
  <h2 class="col-xs-12">Some of our features</h2>
  <article class="row">
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="col-xs-12 green-circle"><img src="{{ asset('img/icons/globe.ico') }}"></div>
      <div class="col-xs-12">
        <strong>DUIS AUTEM VEL EUM</strong><br/>
        <em>Typi non habent claritat em insitam; est usus legen tisiis qui facit eoru.</em>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="col-xs-12 green-circle"><img src="{{ asset('img/icons/group.ico') }}"></div>
      <div class="col-xs-12">
        <strong>DUIS AUTEM VEL EUM</strong><br/>
        <em>Typi non habent claritat em insitam; est usus legen tisiis qui facit eoru.</em>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class="col-xs-12 green-circle"><img src="{{ asset('img/icons/gift.ico') }}"></div>
      <div class="col-xs-12">
        <strong>DUIS AUTEM VEL EUM</strong><br/>
        <em>Typi non habent claritat em insitam; est usus legen tisiis qui facit eoru.</em>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-3">
      <div class=" col-xs-12 green-circle"><img src="{{ asset('img/icons/thumbs-up.ico') }}"></div>
      <div class="col-xs-12">
        <strong>DUIS AUTEM VEL EUM</strong><br/>
        <em>Typi non habent claritat em insitam; est usus legen tisiis qui facit eoru.</em>
      </div>
    </div>
  </article>
</section>
@endsection


@section('feature-three')
<section id="rooms">
  <h3>WHAT OUR CUSTOMERS SAY</h3><span class="vertical-line">|</span><span>MORBI HENDRERIT DIGNISSIM</span>
  <div class="row">
    <article class="col-md-6">
      <div class="col-xs-12 col-md-6">
        <img src="{{ asset('img/staff.jpg') }}">
      </div>
      <div class="col-xs-12 col-md-6">
        <h4>John Doe</h4>
        <div>Bwer possim asspi non habent claritatem insitam;
          est usus legentis in iis qui facit eorum claritatem demonstraverunt
        </div>
      </div>
    </article>
    <article class="col-md-6">
      <div class="col-xs-12 col-md-6">
        <img src="{{ asset('img/staff.jpg') }}">
      </div>
      <div class="col-xs-12 col-md-6">
        <h4>John Doe</h4>
        <div>Bwer possim asspi non habent claritatem insitam;
          est usus legentis in iis qui facit eorum claritatem demonstraverunt
        </div>
      </div>
    </article>
  </div>
</section>
@endsection
