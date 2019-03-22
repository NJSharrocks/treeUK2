<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add Woodland</title>
</head>
<body>
  <h1>Add Woodland</h1>

  {!! Form::open(array('action' => 'WoodlandsController@store', 'id' => 'createwoodlands')) !!}
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
</body>
</html>
