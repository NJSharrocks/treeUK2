@extends('layouts.master')
@section('woodlands', 'Woodlands')
@section('content')
  <img class="adminBanner" src="{{asset('/img/banner1.jpg')}}" alt="">
@can('see_adminnav')
  @include('admin/includes/adminnav')
@endcan
@endsection
