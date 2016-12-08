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
    @if(Auth::user())

    <a style="margin-bottom: 50px;padding-left:30px; color:rgb(27, 188, 155); font-weight: bolder;" href="{{ url('rooms/standard/add')}}"><button class="btn btn-success uploadBtn">UPLOAD</button><a>
      <br/>
      <br/>
    @endif
    <div class="row">
      @foreach($images as $img)
        <div class="col-xs-12 col-sm-6 col-md-4">
          <a href="../img/rooms/standard/{{ $img->img }}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
            <div><img src="../img/rooms/standard/{{ $img->img }}" class="img-fluid"></div>
          </a>
        </div>

      @endforeach
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
