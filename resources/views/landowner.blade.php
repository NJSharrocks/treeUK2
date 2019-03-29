@extends('layouts.master')

@section('contact', 'Contact')
@section('content')
    <img class="banner" src="{{asset('/img/banner2.jpg')}}" alt="">

<div class="homeText">
  <h1>Create a Tree Plant Event</h1>
  <h5>Do you want to own the next Great British woodland? Create an event for volunteers to plant native trees on your land.</h5>
  <h5>Upon creation, treeUK staff will be in touch to discuss the project (proof of land ownership required).</p>
</div>

{!! Form::open(array('action' => 'ProjectAdminController@store', 'id' => 'createproject')) !!}
    <div class="row large-12 columns">
        {!! Form::label('land_owners_username', 'Name:') !!}
        {!! Form::text('land_owners_username', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('event_date', 'Date:') !!}
        {!! Form::text('event_date', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('event_time', 'Time:') !!}
        {!! Form::text('event_time', null, ['class' => 'large-8 columns']) !!}
    </div>

    <div class="row large-12 columns">
        {!! Form::label('location', 'Location:') !!}
        {!! Form::text('location', null, ['class' => 'large-8 columns']) !!}
    </div>


    <div class="row large-4 columns">
        {!! Form::submit('Add Event', ['class' => 'signIn']) !!}
    </div>
{!! Form::close() !!}

@endsection
