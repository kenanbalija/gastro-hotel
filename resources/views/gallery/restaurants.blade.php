@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section style="max-width:1152px; margin:0 auto; ">
  <h3 style="padding-left:30px; color:rgb(27, 188, 155); font-weight: bolder;" >Restoran I i II</h3>
  <div id="apartmants">
  
  @if(Auth::user())

  <a style="margin-bottom: 50px;padding-left:30px; color:rgb(27, 188, 155); font-weight: bolder;" href="{{ url('photos/restaurants/add')}}"><button class="btn btn-success uploadBtn">UPLOAD</button><a>
  @endif
    <div class="row">
      @foreach($images as $img)
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="../img/hotels/restaurants/{{ $img->img }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="../img/hotels/restaurants/{{ $img->img }}" class="img-fluid"></div>
          </a>
        </div>
      @endforeach
    <!--  <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/Hotel-2.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/Hotel-2.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/Hotel-29.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/Hotel-29.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/Hotel-33.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/Hotel-33.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/Hotel-34.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/Hotel-34.jpg')}}" class="img-fluid"></div>
        </a>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/Hotel-45.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/Hotel-45.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/Hotel-87.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/Hotel-87.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/Hotel-92.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/Hotel-92.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/Hotel-96.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/Hotel-96.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/Hotel-99.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/Hotel-99.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/Hotel-101.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/Hotel-101.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/1.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/1.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/2.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/2.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/3.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/3.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/4.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/4.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/restaurants/5.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/restaurants/5.jpg')}}" class="img-fluid"></div>
        </a>
      </div> -->

    </div>
</div>
</section>
@endsection
