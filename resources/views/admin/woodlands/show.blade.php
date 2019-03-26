@extends('layouts.master')

@section('woodlands', 'Woodlands')
@section('content')
  <title>{{ $woodland->name }}</title>
</head>
<body>
  <h1>{{ $woodland->name }}</h1>
  <table>
    <tr>
      <th>Longitude and Latitude</th>
      <th>Description</th>
    </tr>
    <tr>
      <td>{{ $woodland->longitude_and_latitude}}</td>
      <td>{{ $woodland->description}}</td>
    </tr>
  </table>
@endsection
