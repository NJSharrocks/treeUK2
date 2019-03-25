@extends('layouts.master')

@section('woodlands', 'Woodlands')
@section('content')
  <title>{{ $user->name }}</title>
</head>
<body>
  <h1>{{ $user->name }}</h1>
  {{ $user->email}}
@endsection
