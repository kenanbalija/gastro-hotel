@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section style="max-width:1152px; margin:0 auto; ">
  <h3 style="padding-left:30px; color:rgb(27, 188, 155); font-weight: bolder;" >STANDARDNE SOBE</h3>
  <div id="apartmants">
    <a href="{{ url('rooms/standard/add')}}"><button class="btn btn-success uploadBtn">UPLOAD</button><a>
    <div class="row">
      <!-- <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/Hotel-140.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/Hotel-140.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/Hotel-142.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/Hotel-142.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/Hotel-152.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/Hotel-152.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/Hotel-155.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/Hotel-155.jpg')}}" class="img-fluid"></div>
        </a>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/Hotel-159.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/Hotel-159.jpg')}}" class="img-fluid"></div>
        </a>
      </div> -->
    </div>
</div>
</section>
@endsection
