<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Woodlands</title>
</head>
<body>
  <h1>Woodlands</h1>

  <section>
    @if (isset ($woodlands))

      <ul>
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
</body>
</html>
