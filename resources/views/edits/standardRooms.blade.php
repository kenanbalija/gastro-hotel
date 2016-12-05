@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
  <div class="addImage container">
    <form class="" role="form" method="POST" action="{{ url('/rooms/standard/save') }}" enctype="multipart/form-data">

      Image:<input type="file" name="img"><br/>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="submit" value="Submit">

    </form>
  </div>
@endsection
