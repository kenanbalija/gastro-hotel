<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\Http\Requests;
use Request;
use Auth;
use App\serviceOffer;
class ServicesController extends Controller
{
  public function ski() {
    $texts = serviceOffer::all();
    return view('services.skiing', compact('texts'));
  }
  public function golf() {
    $texts = serviceOffer::all();

    return view('services.golfing', compact('texts'));
  }
  public function ride() {
    $texts = serviceOffer::all();

    return view('services.riding', compact('texts'));
  }
  public function raft() {
    $texts = serviceOffer::all();

    return view('services.rafting', compact('texts'));
  }
  public function editOffer($id){
    $texts = serviceOffer::all();
    return view('edits.serviceOfferEdit', compact('texts'));
  }
  public function saveOffer($id){
    if(Auth::check()){
      $input = Request::all();
      serviceOffer::find($id)->update(
        ['ski' => $input['ski'],
        'skiEn' => $input['skiEn'],
        'golf' => $input['golf'],
        'golfEn' => $input['golfEn'],
        'ride' => $input['ride'],
        'rideEn' => $input['rideEn'],
        'raft' => $input['raft'],
        'raftEn' => $input['raftEn']
      ]);
      return redirect('/')->with('message', 'SUCCESS');
    } else {
      return redirect('/')->with('message', 'LOG IN');
    }
  }
  //en side
  public function skiEn() {
    $texts = serviceOffer::all();

    return view('en.services.skiing', compact('texts'));
  }
  public function golfEn() {
    $texts = serviceOffer::all();

    return view('en.services.golfing', compact('texts'));
  }
  public function rideEn() {
    $texts = serviceOffer::all();

    return view('en.services.riding', compact('texts'));
  }
  public function raftEn() {
    $texts = serviceOffer::all();

    return view('en.services.rafting', compact('texts'));
  }
}
