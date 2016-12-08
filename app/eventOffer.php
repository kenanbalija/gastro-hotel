<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventOffer extends Model
{
  protected $table= 'eventoffers';
  protected $fillable = [
    'wedding',
    'weddingEn',
    'teambuilding',
    'teambuildingEn',
    'conference',
    'conferenceEn',
    'birthday',
    'birthdayEn'
  ];
}
