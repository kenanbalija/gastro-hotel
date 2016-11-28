<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PhotoController extends Controller
{
    public function apartmants(){
      return view('gallery.apartmants');
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
