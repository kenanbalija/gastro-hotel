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
}
