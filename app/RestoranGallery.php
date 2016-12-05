<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestoranGallery extends Model
{
  protected $table= 'restaurants';
  protected $fillable = [
    'img'
  ];
}
