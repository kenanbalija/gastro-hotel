<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ApartmanGallery;
use Image;
use Illuminate\Support\Facades\Input;
class PhotoController extends Controller
{
    public function apartmants(){
      $images = ApartmanGallery::all();
      return view('gallery.apartmants', compact('images'));
    }

    public function apartmants_add(){
      return view('edits.apartmantsAdd');
    }

    public function apartmants_save(){
      $destinationPath = public_path().'/img/hotels/apartments/';
      $image = Input::file('img');
      $extension = $image->getClientOriginalExtension();
      $fileName = time().rand(11111,99999).'.'.$extension;
      Image::make($image->getRealPath())->save($destinationPath.$fileName);
      $input['img']=$fileName;
      $slika = ApartmanGallery::create($input);
      return redirect('/photos/apartmants');
    }

    public function restaurants(){
      return view('gallery.restaurants');
    }
    public function exterior(){
      return view('gallery.exterior');
    }

    //en side
    public function apartmantsEn(){
      return view('en.gallery.apartmants');
    }
    public function restaurantsEn(){
      return view('en.gallery.restaurants');
    }
    public function exteriorEn(){
      return view('en.gallery.exterior');
    }
}
