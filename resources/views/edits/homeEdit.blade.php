@extends('layouts.app')

@section('content')
@include('navigations.navigationBA')
<section id="extra-bg">
</section>
@endsection
@section('showcase')
  <div class="editForm container">
    @foreach($texts as $tekst)
        <form class="" role="form" method="POST" action="{{ url('/home/save', $tekst->id) }}" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <textarea name="about" rows="8" cols="80">{!! $tekst->about_tekst !!}</textarea>
          <textarea name="aboutSub" rows="8" cols="80">{!! $tekst->about_tekst_sub !!}</textarea>
          <textarea name="aboutEn" rows="8" cols="80">{!! $tekst->about_tekst_en !!}</textarea>
          <textarea name="aboutSubEn" rows="8" cols="80">{!! $tekst->about_tekst_sub_en !!}</textarea>


          <!-- <input type="text" name="about" class="textovi" value="{{ $tekst->about_tekst }}"><br/><br/>
          <input type="text" name="aboutSub" class="textovi" value="{{ $tekst->about_tekst_sub }}"><br/><br/>
          <input type="text" name="aboutEn" class="textovi" value="{{ $tekst->about_tekst_en }}"><br/><br/>
          <input type="text" name="aboutSubEn" class="textovi" value="{{ $tekst->about_tekst_sub_en }}"><br/><br/> -->
          <input class=".btn-primary" type="submit" value="UPDATE">
        </form>
    @endforeach
  </div>
@endsection
