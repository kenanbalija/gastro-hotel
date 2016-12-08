@extends('layouts.app')

@section('content')
@include('navigations.navigationEN')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
<section style="max-width:1152px; margin:0 auto; ">
  <h3 style="padding-left:30px; color:rgb(27, 188, 155); font-weight: bolder;" >HOTEL SURROUNDING</h3>
  <div id="apartmants">
    @if(Auth::user())

    <a style="margin-bottom: 50px;padding-left:30px; color:rgb(27, 188, 155); font-weight: bolder;" href="{{ url('photos/exterior/add')}}"><button class="btn btn-success uploadBtn">UPLOAD</button><a>
      @endif
    <div class="row">
      @foreach($images as $img)
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="../img/hotels/exterior/{{ $img->img }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="../img/hotels/exterior/{{ $img->img }}" class="img-fluid"></div>
          </a>
        </div>
      @endforeach
      <!-- <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/exterior/Hotel-5.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/exterior/Hotel-5.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/exterior/Hotel-12.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/exterior/Hotel-12.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/exterior/Hotel-18.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/exterior/Hotel-18.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/exterior/Hotel-22.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/exterior/Hotel-22.jpg')}}" class="img-fluid"></div>
        </a>
      </div>

      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/exterior/Hotel-26.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/exterior/Hotel-26.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/exterior/Hotel-36.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/exterior/Hotel-36.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/exterior/Hotel-61.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/exterior/Hotel-61.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/exterior/Hotel-64.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/exterior/Hotel-64.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/exterior/Hotel-81.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/exterior/Hotel-81.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/exterior/Hotel-85.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/exterior/Hotel-85.jpg')}}" class="img-fluid"></div>
        </a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ asset('img/hotels/exterior/Hotel-151.jpg')}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="{{ asset('img/hotels/exterior/Hotel-151.jpg')}}" class="img-fluid"></div>
        </a>
      </div> -->
    </div>
</div>
</section>
@endsection
