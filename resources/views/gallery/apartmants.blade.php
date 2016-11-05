@extends('layouts.app')

@section('content')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
  <section style="max-width:1152px; margin:0 auto; ">
    <h3 style="padding-left:30px; color:rgb(27, 188, 155); font-weight: bolder;" >APARTMANI</h3>
    <div id="apartmants" class="row">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/1.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="{{ asset('img/hotels/apartments/1.jpg')}}" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/2.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="{{ asset('img/hotels/apartments/2.jpg')}}" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/3.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="{{ asset('img/hotels/apartments/3.jpg')}}" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/4.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="{{ asset('img/hotels/apartments/4.jpg')}}" class="img-fluid">
          </a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/5.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="{{ asset('img/hotels/apartments/5.jpg')}}" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/6.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="{{ asset('img/hotels/apartments/6.jpg')}}" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/7.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="{{ asset('img/hotels/apartments/7.jpg')}}" class="img-fluid">
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/8.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <img src="{{ asset('img/hotels/apartments/8.jpg')}}" class="img-fluid">
          </a>
        </div>
      </div>
</div>
</section>
@endsection
