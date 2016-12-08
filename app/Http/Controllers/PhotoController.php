<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ApartmanGallery;
use App\RestoranGallery;
use App\EksterijerGallery;
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
      $images = RestoranGallery::all();
      return view('gallery.restaurants', compact('images'));
    }
    public function restaurants_add(){
      return view('edits.restaurantsAdd');
    }
    public function restaurants_save(){
      $destinationPath = public_path().'/img/hotels/restaurants/';
      $image = Input::file('img');
      $extension = $image->getClientOriginalExtension();
      $fileName = time().rand(11111,99999).'.'.$extension;
      Image::make($image->getRealPath())->save($destinationPath.$fileName);
      $input['img']=$fileName;
      $slika = RestoranGallery::create($input);
      return redirect('/photos/restaurants');
    }


    public function exterior(){
      $images = EksterijerGallery::all();
      return view('gallery.exterior', compact('images'));
    }
    public function exterior_add(){
      return view('edits.exteriorAdd');
    }
    public function exterior_save(){
      $destinationPath = public_path().'/img/hotels/exterior/';
      $image = Input::file('img');
      $extension = $image->getClientOriginalExtension();
      $fileName = time().rand(11111,99999).'.'.$extension;
      Image::make($image->getRealPath())->save($destinationPath.$fileName);
      $input['img']=$fileName;
      $slika = EksterijerGallery::create($input);
      return redirect('/photos/exterior');
    }

    //en side
    public function apartmantsEn(){
      $images = ApartmanGallery::all();
      return view('en.gallery.apartmants', compact('images'));
    }
    public function restaurantsEn(){
      $images = RestoranGallery::all();
      return view('en.gallery.restaurants', compact('images'));
    }
    public function exteriorEn(){
      $images = EksterijerGallery::all();
      return view('en.gallery.exterior', compact('images'));
    }
}
