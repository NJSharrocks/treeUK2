@extends('layouts.master')

@section('users', 'Users')
@section('content')
  <title>{{ $user->name }}</title>
</head>
<body>
  <h1>{{ $user->name }}</h1>


  <table>
    <tr>
      <th>E-mail</th>
    </tr>
    <tr>
      <td>{{ $user->email}}</td>
    </tr>
  </table>

@endsection
