@extends('layouts.master')

@section('woodlands', 'Woodlands')
@section('content')
  <title>{{ $woodland->name }}</title>
</head>
<body>
  <h1>{{ $woodland->name }}</h1>
  {{ $woodland->longitude_and_latitude}}
  {{ $woodland->description}}
@endsection
