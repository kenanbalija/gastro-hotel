@extends('layouts.app')

@section('content')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section style="max-width:1152px; margin:0 auto; ">
  <h3 style="padding-left:30px; color:rgb(27, 188, 155); font-weight: bolder;" >APARTMANI</h3>
  <div id="apartmants">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/Hotel-145.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/Hotel-145.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/Hotel-141.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/Hotel-141.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/Hotel-143.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/Hotel-143.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/Hotel-148.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/Hotel-148.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
    </div>
</div>
</section>
@endsection
