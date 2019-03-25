@extends('layouts.master')
@section('title', 'My Home Page')
@section('content')
  <h1>Add Woodland</h1>

  {!! Form::open(array('action' => 'SightingsController@store', 'id' => 'createsightings')) !!}
    {!! csrf_field() !!}
    <div>
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div>
      {!! Form::label('longitude_and_latitude', 'Longitude and Latitude:') !!}
      {!! Form::text('longitude_and_latitude', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div>
      {!! Form::label('description', 'Description:') !!}
      {!! Form::text('description', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div>
      {!! Form::submit('Add Woodland') !!}
    </div>
  {!! Form::close() !!}
@endsection
