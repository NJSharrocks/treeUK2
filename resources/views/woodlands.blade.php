@extends('layouts.master')
@section('woodlands', 'Woodlands')
@section('content')

<h2>FIND YOUR NEAREST ANCIENT WOODLAND</h2>

<div class='mapContain'>
<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1gmkg3TxoKFExZuPFUQlYXL2raXc90f-n"></iframe>
</div>


<h1>All Woodlands</h1>

@if (isset ($woodlands))

    <table>
        <tr>
            <th class="woodlandTable">Woodland</th>
            <th>Longitude & Latitude</th>
            <th>Description</th>
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
