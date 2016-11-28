<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ServicesController extends Controller
{
  public function ski() {
    return view('services.skiing');
  }
  public function golf() {
    return view('services.golfing');
  }
  public function ride() {
    return view('services.riding');
  }
  public function raft() {
    return view('services.rafting');
  }
  //en side
  public function skiEn() {
    return view('en.services.skiing');
  }
  public function golfEn() {
    return view('en.services.golfing');
  }
  public function rideEn() {
    return view('en.services.riding');
  }
  public function raftEn() {
    return view('en.services.rafting');
  }
}
