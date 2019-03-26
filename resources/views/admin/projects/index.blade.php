@extends('layouts.master')

@section('title', 'My Home Page')
@section('content')

@can('see_adminnav')
  @include('admin/includes/adminnav')
@endcan

  <h1>All Projects</h1>
  @if (isset ($projects))

      <table>
          <tr>
              <th>Landowner</th>
              <th>Date</th>
              <th>Time</th>
              <th>Location</th>
          </tr>
          @foreach ($projects as $project)
              <tr>
                  <td>{{ $project->land_owners_username }}</td>
                  <td> {{ $project->event_date }}</td>
                  <td>{{ $project->event_time }}</td>
                  <td>{{ $project->location }}</td>

                  <td> <a href="projects/{{ $project->id }}/edit">Update</a></td>
                  <td>
                  {!! Form::open(['method' => 'DELETE', 'route' => ['admin.projects.destroy', $project->id]]) !!}
                  {!! Form::submit('Delete') !!}
                  {!! Form::close() !!}
                  </td>
              </tr>
          @endforeach
      </table>
  @else
      <p>No Projects</p>
  @endif
@endsection
