@extends('layouts.master')

@section('title', 'My Home Page')
@section('content')

@can('see_adminnav')
  @include('admin/includes/adminnav')
@endcan

  <h1>All Users</h1>
  @if (isset ($users))

      <table>
          <tr>
              <th>Username</th>
              <th>email</th>
              <th>Permissions</th>
          </tr>
          @foreach ($users as $user)
              <tr>
                  <td><a href="/admin/users/{{ $user->id }}" name="{{ $user->name }}">{{ $user->name }}</a></td>
                  <td> {{ $user->email }}</td>
                  <td>
                      <ul>
                          @foreach($user->roles as $role)
                              <li>{{ $role->label }}</li>
                          @endforeach
                      </ul>
                  </td>
              </tr>
          @endforeach
      </table>
  @else
      <p>no users</p>
  @endif
@endsection
