@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')

<section id="extra-bg">
</section>
@endsection
@section('showcase')
  <section style="max-width:1152px; margin:0 auto; ">
    <h3 style="padding-left:30px; color:rgb(27, 188, 155); font-weight: bolder;" >{{ $gallery->name }}</h3>
    <div id="apartmants">

    @if(Auth::user())

    <div style="margin-bottom: 50px;" class="col-md-12">
      <form id="addImagess" class="dropzone" action="{{ url('image/do-upload') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="gallery_id" value="{{ $gallery->id }}">
      </form>
    </div><br/>
    @endif

    <div class="row">
      <br/>

    @foreach($gallery->images as $img)

      <div class="col-xs-12 col-sm-6 col-md-4">
        <a href="{{ url($img->file_path)}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-4">
          <div><img src="{{ url($img->file_path)}}" class="img-fluid"></div>
        </a>
      </div>

    @endforeach
  </div>
    <br/>
      <a href="{{ url('photos')}}" class="btn">Back</a>
    </div>
</div>
</section>
@endsection
