<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StandardRoom;
use App\SuperiorRoom;
use App\DeluxeRoom;
use App\Http\Requests;
use Image;
use Illuminate\Support\Facades\Input;
class RoomController extends Controller
{
    public function standard(){
      return view('rooms.standard');
    }
    public function standard_add(){
      return view('edits.standardRooms');
    }
    public function standard_save(){
      $destinationPath = public_path().'/img/rooms/standard/';
      $image = Input::file('img');
      $extension = $image->getClientOriginalExtension();
      $fileName = time().rand(11111,99999).'.'.$extension;
      Image::make($image->getRealPath())->save($destinationPath.$fileName);
      $input['img']=$fileName;
      $slika = StandardRoom::create($input);
      return redirect('/rooms/standard');
    }


    public function superior(){
      return view('rooms.superior');
    }
    public function superior_add(){
      return view('edits.superiorRooms');
    }
    public function superior_save(){
      $destinationPath = public_path().'/img/rooms/superior/';
      $image = Input::file('img');
      $extension = $image->getClientOriginalExtension();
      $fileName = time().rand(11111,99999).'.'.$extension;
      Image::make($image->getRealPath())->save($destinationPath.$fileName);
      $input['img']=$fileName;
      $slika = SuperiorRoom::create($input);
      return redirect('/rooms/superior');
    }


    public function deluxe(){
      return view('rooms.deluxe');
    }
    public function deluxe_add(){
      return view('edits.deluxeRooms');
    }
    public function deluxe_save(){
      $destinationPath = public_path().'/img/rooms/deluxe/';
      $image = Input::file('img');
      $extension = $image->getClientOriginalExtension();
      $fileName = time().rand(11111,99999).'.'.$extension;
      Image::make($image->getRealPath())->save($destinationPath.$fileName);
      $input['img']=$fileName;
      $slika = DeluxeRoom::create($input);
      return redirect('/rooms/deluxe');
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
