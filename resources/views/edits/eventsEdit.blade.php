@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
  <div class="editForm container">
    @foreach($events as $event)
        <form id="eventsForm" role="form" method="POST" action="{{ url('/events/save', $event->id) }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <textarea  name="meeting" rows="10" cols="100">{!! $event->meetings !!}</textarea>
          <textarea  name="meetingEn" rows="10" cols="100">{!! $event->meetingsEn !!}</textarea>
          <textarea  name="service" rows="10" cols="100">{!! $event->services !!}</textarea>
          <textarea  name="serviceEn" rows="10" cols="100">{!! $event->servicesEn !!}</textarea>
        <input class="btn btn-success" type="submit" value="UPDATE">
        </form>
    @endforeach
  </div>
@endsection
