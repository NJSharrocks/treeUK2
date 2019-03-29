@extends('layouts.master')
@section('title', 'My Home Page')
@section('content')

@can('see_adminnav')
  @include('admin/includes/adminnav')
@endcan

  <h1>All Woodlands</h1>
  {{ Form::open(array('action' => 'WoodlandsController@create', 'method' => 'get')) }}
      <div class="signIn">
          {!! Form::submit('Add Woodland') !!}
      </div>
  {{ Form::close() }}

  @if (isset ($woodlands))

      <table>
          <tr>
              <th>Woodland</th>
              <th>Longitude & Latitude</th>
              <th>Description</th>
          </tr>
          @foreach ($woodlands as $woodland)
              <tr>
                  <td><a href="/admin/woodlands/{{ $woodland->id }}" name="{{ $woodland->name }}">{{ $woodland->name }}</a></td>
                  <td> {{ $woodland->longitude_and_latitude }}</td>
                  <td> {{ $woodland->description }} </td>
                  <td> <a href="woodlands/{{ $woodland->id }}/edit">Update</a></td>
                  <td>
                  {!! Form::open(['method' => 'DELETE', 'route' => ['admin.woodlands.destroy', $woodland->id]]) !!}
                  {!! Form::submit('Delete') !!}
                  {!! Form::close() !!}
                  </td>
              </tr>
          @endforeach
      </table>
  @else
      <p>No woodlands</p>
  @endif
@endsection
