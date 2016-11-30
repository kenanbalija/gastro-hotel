<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Text;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texts = Text::all();
        return view('home', compact('texts'));
    }
    public function edit(){
      return view('edits/homeEdit');
    }
    public function about(){
      return view('about.about');
    }
    public function rooms(){
      return view('rooms.rooms');
    }
    public function events(){
      return view('events.events');
    }
    public function contact(){
      return view('contact.contact');
    }
    public function photos(){
      return view('gallery.photos');
    }
    public function services(){
      return view('services.services');
    }

    //en Part
    public function indexEn()
    {
        $texts = Text::all();
        return view('en.home', compact('texts'));
    }
    public function aboutEn(){
      return view('en.about.about');
    }
    public function roomsEn(){
      return view('en.rooms.rooms');
    }
    public function eventsEn(){
      return view('en.events.events');
    }
    public function contactEn(){
      return view('en.contact.contact');
    }
    public function photosEn(){
      return view('en.gallery.photos');
    }
    public function servicesEn(){
      return view('en.services.services');
    }

}
