<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RoomController extends Controller
{
    public function standard(){
      return view('rooms.standard');
    }
    public function superior(){
      return view('rooms.superior');
    }
    public function deluxe(){
      return view('rooms.deluxe');
    }
    public function catalog(){
      return view('rooms.catalog');
    }
    //en side
    public function standardEn(){
      return view('en.rooms.standard');
    }
    public function superiorEn(){
      return view('en.rooms.superior');
    }
    public function deluxeEn(){
      return view('en.rooms.deluxe');
    }
    public function catalogEn(){
      return view('en.rooms.catalog');
    }

    
}
