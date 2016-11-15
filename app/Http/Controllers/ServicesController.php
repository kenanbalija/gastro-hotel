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
}
