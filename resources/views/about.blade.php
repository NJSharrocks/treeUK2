@extends('layouts.master')
@section('woodlands', 'Woodlands')
@section('content')
  <div class="background">
    <img class="banner" src="{{asset('/img/banner4.jpg')}}" alt="">
  </div>

<div class="paddingText">
<h1>About TreeUK</h1>

<div>
  <p>TreeUK is an online campaign to save the UK's Ancient Woodlands! These unique
    ecosystems date back hundreds, sometimes thousands, of years, playing host to animal
    and plant life that can't be found co-existing anywhere else. So how are we doing that?</p>

  <p>By encouraging people to visit! Find your closest <a class="link" href="/woodlands">ancient woodland</a>
    by using our map today, or get involved in planting what could potentially be the next ancient
    woodland with our native <a class="link" href="/project">tree plant project</a>.</p>

@endsection
