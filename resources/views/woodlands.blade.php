@extends('layouts.master')
@section('woodlands', 'Woodlands')
@section('content')

<div class='mapContain'>
<iframe frameborder=0 class='map' src='//www.zeemaps.com/pub?group=3367024&legend=1&locate=1&search=1&x=-2.886250&y=53.566252&z=12'> </iframe>
</div>


<h1>All Woodlands</h1>
@if (isset ($woodlands))

    <table>
        <tr>
            <th>Woodland</th>
            <th>Longitude & Latitude</th>
            <th>Description</th>
            <th>Log a Sighting</th>
        </tr>
        @foreach ($woodlands as $woodland)
            <tr>
                <td>{{ $woodland->name }}</td>
                <td> {{ $woodland->longitude_and_latitude }}</td>
                <td> {{ $woodland->description }} </td>
            </tr>
        @endforeach
    </table>
@else
    <p>No woodlands</p>
@endif


@endsection
