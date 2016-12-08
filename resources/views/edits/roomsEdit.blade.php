@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
  <div class="editForm container">
    @foreach($rooms as $room)
        <form id="roomsForm" role="form" method="POST" action="{{ url('/rooms/save', $room->id) }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <h4>Standardne sobe:</h4>
          <textarea  name="standard" rows="8" cols="80">{!! $room->standard_room !!}</textarea>
          <h4>Standardne sobe Eng:</h4>
          <textarea  name="standardEn" rows="8" cols="80">{!! $room->standard_room_en !!}</textarea>
          <h4>Superior sobe:</h4>
          <textarea  name="superior" rows="8" cols="80">{!! $room->superior_room !!}</textarea>
          <h4>Superior sobe Eng:</h4>
          <textarea  name="superiorEn" rows="8" cols="80">{!! $room->superior_room_en !!}</textarea>
          <h4>Deluxe sobe:</h4>
          <textarea  name="deluxe" rows="8" cols="80">{!! $room->deluxe_room !!}</textarea>
          <h4>Deluxe sobe Eng:</h4>
          <textarea  name="deluxeEn" rows="8" cols="80">{!! $room->deluxe_room_en !!}</textarea>
          <br/>
          <!-- <input type="text" name="standard" class="textovi" value="{{ $room->standard_room }}"><br/><br/>
          <input type="text" name="standardEn" class="textovi" value="{{ $room->standard_room_en }}"><br/><br/>
          <input type="text" name="superior" class="textovi" value="{{ $room->superior_room }}"><br/><br/>
          <input type="text" name="superiorEn" class="textovi" value="{{ $room->superior_room_en }}"><br/><br/>
          <input type="text" name="deluxe" class="textovi" value="{{ $room->deluxe_room }}"><br/><br/>
          <input type="text" name="deluxeEn" class="textovi" value="{{ $room->deluxe_room_en }}"><br/><br/> -->
          <input class="btn btn-success" type="submit" value="UPDATE">
        </form>
        <br/>
        <br/>
    @endforeach
  </div>
@endsection
