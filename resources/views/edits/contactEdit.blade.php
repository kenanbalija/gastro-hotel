@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
  <div class="editForm container">
    @foreach($contacts as $cont)
        <form id="" role="form" method="POST" action="{{ url('/contact/save', $cont->id) }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <h4>Kontakt:</h4>
          <textarea  name="contact" rows="10" cols="100">{!! $cont->contact !!}</textarea>
          <h4>Kontakt Eng:</h4>
          <textarea  name="contactEn" rows="10" cols="100">{!! $cont->contactEn !!}</textarea>
          <br/>
          <br/>
        <input class="btn btn-success" type="submit" value="UPDATE">
        </form>
        <br/>
    @endforeach
  </div>
@endsection
