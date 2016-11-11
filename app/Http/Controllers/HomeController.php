<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

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
        return view('home');
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

}
