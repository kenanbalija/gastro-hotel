<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EksterijerGallery extends Model
{
  protected $table= 'exteriors';
  protected $fillable = [
    'img'
  ];
}
