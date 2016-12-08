@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
  <div class="editForm container">
    @foreach($texts as $text)
        <form id="" role="form" method="POST" action="{{ url('/events/saveOffer', $text->id) }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <h4>Vjenčanje:</h4>
          <textarea  name="wedding" rows="10" cols="100">{!! $text->wedding !!}</textarea>
          <h4>Vjenčanje Eng:</h4>
          <textarea  name="weddingEn" rows="10" cols="100">{!! $text->weddingEn !!}</textarea>
          <h4>Team Building:</h4>
          <textarea  name="teambuilding" rows="10" cols="100">{!! $text->teambuilding !!}</textarea>
          <h4>Team Building Eng:</h4>
          <textarea  name="teambuildingEn" rows="10" cols="100">{!! $text->teambuildingEn !!}</textarea>
          <h4>Konferencije:</h4>
          <textarea  name="conference" rows="10" cols="100">{!! $text->conference !!}</textarea>
          <h4>Konferencije Eng:</h4>
          <textarea  name="conferenceEn" rows="10" cols="100">{!! $text->conferenceEn !!}</textarea>
          <h4>Rođendani:</h4>
          <textarea  name="birthday" rows="10" cols="100">{!! $text->birthday !!}</textarea>
          <h4>Rođendani Eng:</h4>
          <textarea  name="birthdayEn" rows="10" cols="100">{!! $text->birthdayEn !!}</textarea>
          <br/>
          <br/>
        <input class="btn btn-success" type="submit" value="UPDATE">
        </form>
        <br/>

    @endforeach
  </div>
@endsection
