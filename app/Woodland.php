<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Woodland extends Model
{
    protected $fillable = [
      'name',
      'longitude_and_latitude',
      'description'
    ];
}
