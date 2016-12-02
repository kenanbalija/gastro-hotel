<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApartmanGallery extends Model
{
    protected $table= 'apartmants';
    protected $fillable = [
      'img'
    ];
}
