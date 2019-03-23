@extends('layouts.master')
@section('title', 'My Home Page')
@section('content')
  <h1>Add Woodland</h1>

  {!! Form::open(array('action' => 'WoodlandsController@store', 'id' => 'createwoodlands')) !!}
    {!! csrf_field() !!}
    <div id="addWoodland" class="row large-12 columns">
      {!! Form::label('name', 'Name:') !!}
      {!! Form::text('name', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
      {!! Form::label('longitude_and_latitude', 'Longitude and Latitude:') !!}
      {!! Form::text('longitude_and_latitude', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
      {!! Form::label('description', 'Description:') !!}
      {!! Form::text('description', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-4 columns">
      {!! Form::submit('Add Woodland', ['class' => 'button']) !!}
    </div>
  {!! Form::close() !!}
@endsection
