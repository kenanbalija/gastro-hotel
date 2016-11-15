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
}
