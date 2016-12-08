<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Auth;

use App\Http\Requests;
use Request;
use App\eventOffer;

class EventsController extends Controller
{
    public function wedding() {
      $texts = eventOffer::all();
      return view('events.wedding', compact('texts'));
    }
    public function team() {
      $texts = eventOffer::all();
      return view('events.team', compact('texts'));
    }
    public function conference() {
      $texts = eventOffer::all();
      return view('events.conference', compact('texts'));
    }
    public function birthday() {
      $texts = eventOffer::all();
      return view('events.birthday', compact('texts'));
    }
    public function editOffer($id){
      $texts = eventOffer::all();
      return view('edits.eventOfferEdit', compact('texts'));
    }
    public function saveOffer($id){
      if(Auth::check()){
        $input = Request::all();
        eventOffer::find($id)->update(
          ['wedding' => $input['wedding'],
          'weddingEn' => $input['weddingEn'],
          'teambuilding' => $input['teambuilding'],
          'teambuildingEn' => $input['teambuildingEn'],
          'conference' => $input['conference'],
          'conferenceEn' => $input['conferenceEn'],
          'birthday' => $input['birthday'],
          'birthdayEn' => $input['birthdayEn']
        ]);
        return redirect('/')->with('message', 'SUCCESS');
      } else {
        return redirect('/')->with('message', 'LOG IN');
      }
    }

    //en side

    public function weddingEn() {
      $texts = eventOffer::all();
      return view('en.events.wedding', compact('texts'));
    }
    public function teamEn() {
      $texts = eventOffer::all();
      return view('en.events.team', compact('texts'));
    }
    public function conferenceEn() {
      $texts = eventOffer::all();
      return view('en.events.conference', compact('texts'));
    }
    public function birthdayEn() {
      $texts = eventOffer::all();
      return view('en.events.birthday', compact('texts'));
    }
}
