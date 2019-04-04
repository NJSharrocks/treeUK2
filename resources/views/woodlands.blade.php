@extends('layouts.master')
@section('woodlands', 'Woodlands')
@section('content')

<h2>THE UK'S ANCIENT WOODLANDS</h2>

<p>The UK's ancient woodlands are unique ecosystems, often being the home of endangered flora and fauna or else the site of
  cultural or historical interest. But they're also under threat. Find your closest ancient woodland using the treeUK map below,
  visit it and join the fight to save the UK's ancient woodlands!</p>


<div class='mapContain'>
<iframe id="map" src="https://www.google.com/maps/d/u/0/embed?mid=1gmkg3TxoKFExZuPFUQlYXL2raXc90f-n&"></iframe>
</div>


<h1>All Woodlands</h1>

@if (isset ($woodlands))

    <table>
        <tr>
            <th class="woodlandTable">Woodland</th>
            <th>Longitude & Latitude</th>
            <th>Description</th>
            <th>Opens in Google Maps</th>
        </tr>
        @foreach ($woodlands as $woodland)
            <tr>
                <td>{{ $woodland->name }}</td>
                <td> {{ $woodland->longitude_and_latitude }}</td>
                <td> {{ $woodland->description }} </td>
                <td> <a href="https://www.google.com/maps/dir//{{$woodland->longitude_and_latitude}}"><button class="signIn" onclick="mapChange()">Directions</button></a></td>
            </tr>
        @endforeach
    </table>

@else
    <p>No woodlands</p>
@endif


@endsection
