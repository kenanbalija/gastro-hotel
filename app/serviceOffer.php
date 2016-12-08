<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class serviceOffer extends Model
{
  protected $table= 'serviceoffer';
  protected $fillable = [
    'ski',
    'skiEn',
    'golf',
    'golfEn',
    'ride',
    'rideEn',
    'raft',
    'raftEn'
  ];
}
