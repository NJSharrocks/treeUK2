<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Woodland;

class Woodland extends Model
{

    protected $fillable = [
      'name',
      'longitude_and_latitude',
      'description'
    ];
}
