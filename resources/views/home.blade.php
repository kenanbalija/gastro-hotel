@extends('layouts.app')

@section('content')
<div class="w3-content w3-display-container" style="max-width:1200px">
  <img class="mySlides" src="{{ asset('img/ring.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ asset('img/ring2.jpg') }}" style="width:100%">
  <img class="mySlides" src="{{ asset('img/ring3.jpg') }}" style="width:100%">
  <div class="w3-center w3-section w3-large w3-text-white w3-display-bottomleft" style="width:100%">
    <div class="w3-left w3-padding-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
    <div class="w3-right w3-padding-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
    <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
  </div>
</div>
@endsection
