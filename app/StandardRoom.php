<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StandardRoom extends Model
{
  protected $table= 'standardRooms';
  protected $fillable = [
    'img'
  ];
}
