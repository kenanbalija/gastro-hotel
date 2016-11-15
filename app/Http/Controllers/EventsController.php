<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EventsController extends Controller
{
    public function wedding() {
      return view('events.wedding');
    }
    public function team() {
      return view('events.team');
    }
    public function conference() {
      return view('events.conference');
    }
    public function birthday() {
      return view('events.birthday');
    }
}
