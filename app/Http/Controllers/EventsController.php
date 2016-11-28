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

    //en side

    public function weddingEn() {
      return view('en.events.wedding');
    }
    public function teamEn() {
      return view('en.events.team');
    }
    public function conferenceEn() {
      return view('en.events.conference');
    }
    public function birthdayEn() {
      return view('en.events.birthday');
    }
}
