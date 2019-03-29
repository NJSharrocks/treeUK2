@extends('layouts.master')

@section('treeplanter', 'Tree Planter')
@section('content')
    <img class="banner" src="{{asset('/img/banner2.jpg')}}" alt="">

<div class="homeText">
  <h1>The UK's Ancient Woodlands</h1>
  <h5>They've been around for centuries but these areas of outstanding natural beauty are under threat.</h5>
  <h5>Visit one near you today and help save this unique landscape!</p>
</div>

<table>
    <tr>
        <th>Landowner</th>
        <th>Date</th>
        <th>Time</th>
        <th>Location</th>
    </tr>
    @foreach ($projects as $project)
        <tr>
            <td>{{ $project->land_owners_username }}</td>
            <td> {{ $project->event_date }}</td>
            <td>{{ $project->event_time }}</td>
            <td>{{ $project->location }}</td>

            <td><button class="signIn attendingButton" type="button">Attending</button></td>

        </tr>
    @endforeach
</table>

@endsection
