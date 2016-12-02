@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
  <section style="max-width:1152px; margin:0 auto; ">
    <h3 style="padding-left:30px; color:rgb(27, 188, 155); font-weight: bolder;" >APARTMANI</h3>
    <div id="apartmants">
      <div class="row">
        @foreach($images as $img)
          <div class="col-xs-12 col-sm-6 col-md-4">
            <a href="../img/hotels/apartments/{{ $img->img }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="../img/hotels/apartments/{{ $img->img }}" class="img-fluid"></div>
            </a>
          </div>
        @endforeach
          <!--
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-104.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-104.jpg')}}" class="img-fluid"></div>
          </a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-106.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-106.jpg')}}" class="img-fluid"></div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-110.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-110.jpg')}}" class="img-fluid"></div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-116.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-116.jpg')}}" class="img-fluid"></div>
          </a>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-121.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-121.jpg')}}" class="img-fluid"></div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-122.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-122.jpg')}}" class="img-fluid"></div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-125.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-125.jpg')}}" class="img-fluid"></div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-131.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-131.jpg')}}" class="img-fluid"></div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-140.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-140.jpg')}}" class="img-fluid"></div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-152.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-152.jpg')}}" class="img-fluid"></div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-154.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-154.jpg')}}" class="img-fluid"></div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-157.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-157.jpg')}}" class="img-fluid"></div>
          </a>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="{{ asset('img/hotels/apartments/Hotel-158.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
              <div><img src="{{ asset('img/hotels/apartments/Hotel-158.jpg')}}" class="img-fluid"></div>
          </a>
        </div> -->
      </div>
</div>
</section>
@endsection
