@extends('layouts.master')

@section('woodlands', 'Woodlands')
@section('content')
<div class="loginForm">
  <h1 class="top">Edit - {{ $project->land_owners_username }}</h1>


          <!-- form goes here -->
  {!! Form::model($project, ['method' => 'PATCH', 'url' => '/admin/projects/' . $project->id]) !!}

  <div class="registerButton">
      {!! Form::label('land_owners_username', 'Landowner:') !!}
      {!! Form::text('land_owners_username', null) !!}
  </div>

  <div class="registerButton">
      {!! Form::label('event_date', 'Date:') !!}
      {!! Form::text('event_date', null) !!}
  </div>

  <div class="registerButton">
      {!! Form::label('event_time', 'Time:') !!}
      {!! Form::text('event_time', null) !!}
  </div>

  <div class="registerButton">
      {!! Form::label('location', 'Location:') !!}
      {!! Form::text('location', null) !!}
  </div>

  <div class="registerButton">
      {!! Form::submit('Update Project')!!}
  </div>


  {!! Form::close() !!}
</div>

@endsection
