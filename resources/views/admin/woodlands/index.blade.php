@extends('layouts.master')
@section('title', 'My Home Page')
@section('content')

  <section>
    @if (isset ($woodlands))

      <ul class="treeList">
        @foreach ($woodlands as $woodland)
          <li><a href="/admin/woodlands/{{ $woodland->id}}" name="{{ $woodland->name }}">{{ $woodland->name}}</a></li>
        @endforeach
      </ul>
    @else
      <p> no woodlands added yet </p>
    @endif
  </section>

  {{ Form::open(array('action' => 'WoodlandsController@create', 'method' => 'get')) }}
    <div class="row">
      {!! Form::submit('Add Woodland', ['class' => 'button']) !!}
    </div>
@endsection
