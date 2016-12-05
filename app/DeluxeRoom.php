<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DeluxeRoom extends Model
{
  protected $table= 'deluxeRooms';
  protected $fillable = [
    'img'
  ];
}
