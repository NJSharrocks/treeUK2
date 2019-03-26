<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
      'land_owners_username',
      'event_date',
      'event_time',
      'location'
    ];
}
