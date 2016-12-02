<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    protected $fillable = [
      'standard_room',
      'standard_room_en',
      'superior_room',
      'superior_room_en',
      'deluxe_room',
      'deluxe_room_en'
    ];

}
