<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
  protected $fillable = [
    'day_ku_night',
    'day_of_week_start',
    'time_start',
    'day_of_week_stop',
    'time_stop',
    'date_start',
    'date_stop',
    'date_ku_night',
    'announce'
  ];
}