@extends('layouts.master')

@section('home', 'Home')
@section('content')
    <img class="banner" src="{{asset('/img/banner2.jpg')}}" alt="">

<div class="homeText">
  <h1>The UK's Ancient Woodlands</h1>
  <p>They've been around for centuries but these areas of outstanding natural beauty are under threat.</p>
  <p>Visit one near you today and help save this unique landscape!</p>
</div>

<div class="columnImages">
  <a href="/woodlands">
  <div class="columnImage imageCoverOne">
    <img class="imageCover" src="{{asset('/img/banner4.jpg')}}" alt="">
    <p class="centerText">Find your closest ancient woodland</p>
  </div>
  </a>

  <a href="/project">
    <div class="columnImage">
      <img class="imageCover" src="{{asset('/img/banner3.jpg')}}" alt="">
      <p class="centerText imageCoverTwo">Tree Plant Project</p>
    </div>
  </a>
</div>


@endsection
