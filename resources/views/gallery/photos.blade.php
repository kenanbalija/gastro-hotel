@extends('layouts.app')
@section('content')
@include('navigations.navigationBA')

  <section id="extra-bg">
  </section>
@endsection
@section('showcase')
<section id="photos">

  <h3>ALBUMI</h3>
  <div class="row">
    <!-- <div class="col-xs-12 col-sm-4">
      <span>Apartmani i sobe</span>
      <a href="{{url('/photos/apartmants')}}"><div id="oneAlbum"></div></a>
    </div>
    <div class="col-xs-12 col-sm-4">
      <span>Restoran I i II</span>
      <a href="{{url('/photos/restaurants')}}"><div id="twoAlbum"></div></a>
    </div>
    <div class="col-xs-12 col-sm-4">
      <span>Glavni i popratni objekat</span>
      <a href="{{url('/photos/exterior')}}"><div id="thrAlbum"></div></a>
    </div> -->

  </div>
  <div class="row">
      @if($galleries->count() > 0)
            @foreach($galleries as $gallery)
            <div class="col-xs-12 col-md-6">
              <span>{{ $gallery->name}}</span>
              <a href="{{url('/photos/view/'.$gallery->id)}}"><div class="row">

                @foreach($gallery->images as $img)

                <img class="col-xs-12" src="{{ url($img->file_path) }}">

                @endforeach

              </div></a>
            </div>
            @if(Auth::user())
            <!-- <div class="danger">
              <a href="{{ url('/photos/delete/'.$gallery->id)}}">DELETE</a>
            </div> -->
            @endif

            @endforeach
          </tbody>
        </table>
      @endif

    <container class="col-xs-12 col-sm-4">
      @if(count($errors) > 0)
        <div class="alert alert-danger">
          <ul>
            <!-- @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach -->
          </ul>
        </div>
      @endif
      <form style="position:relative; top: 20px;" class="form" action="{{ url('photos/save') }}" method="post">
        <input  type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <input type="text" name="gallery_name" id="gallery_name"
          placeholder="Ime Nove galerije" class="form-control"
          value="{{ old('gallery_name') }}"/><br/>
          <input type="text" name="gallery_name_en" id="gallery_name_en"
          placeholder="Name New gallery" class="form-control"
          value="{{ old('gallery_name') }}"/><br/>
          <button type="submit" class="btn btn-success" name="button">Izradi</button>

        </div>
      </form>
    </container>
  </div>


</section>

@endsection
