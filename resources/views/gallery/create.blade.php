@extends('layouts.app')
@section('content')
@include('navigations.navigationBA')

  <section id="extra-bg">
  </section>
@endsection
@section('showcase')
<section id="photos">
<div class="container">
  <div class="row">
    <form class="form-group" action="{{ url('/photos/save') }}" method="post">
      <label for="">Ime Albuma:</label><br/>
      <input class="form-control" type="text" name="" value=""><br/><br/>
      <label for="">Slika Albuma:</label><br/>
      <input class="form-control" type="file" name="" value=""><br/>
      <button type="submit" class="btn btn-success" name="button">submit</button>
    </form>
  </div>
</div>
</section>

@endsection
