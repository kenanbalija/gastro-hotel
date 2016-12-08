@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
  <div class="editForm container">
    @foreach($texts as $text)
        <form id="" role="form" method="POST" action="{{ url('/services/saveOffer', $text->id) }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <h4>Skijanje:</h4>
          <textarea  name="ski" rows="10" cols="100">{!! $text->ski !!}</textarea>
          <h4>Skijanje Eng:</h4>
          <textarea  name="skiEn" rows="10" cols="100">{!! $text->skiEn !!}</textarea>
          <h4>Golf:</h4>
          <textarea  name="golf" rows="10" cols="100">{!! $text->golf !!}</textarea>
          <h4>Golf Eng:</h4>
          <textarea  name="golfEn" rows="10" cols="100">{!! $text->golfEn !!}</textarea>
          <h4>Jahanje:</h4>
          <textarea  name="ride" rows="10" cols="100">{!! $text->ride !!}</textarea>
          <h4>Jahanje Eng:</h4>
          <textarea  name="rideEn" rows="10" cols="100">{!! $text->rideEn !!}</textarea>
          <h4>Rafting:</h4>
          <textarea  name="raft" rows="10" cols="100">{!! $text->raft !!}</textarea>
          <h4>Rafting Eng:</h4>
          <textarea  name="raftEn" rows="10" cols="100">{!! $text->raftEn !!}</textarea>
          <br/>
          <br/>

        <input class="btn btn-success" type="submit" value="UPDATE">
        </form>
        <br/>

    @endforeach
  </div>
@endsection
