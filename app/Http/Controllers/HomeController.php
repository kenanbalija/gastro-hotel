<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use Request;
use App\Text;
use App\Room;
use App\Event;

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

    public function edit($id){
      $texts = Text::all();
      return view('edits/homeEdit', compact('texts'));
    }

    public function save($id){
      if(Auth::check()){
        $input = Request::all();
        Text::find($id)->update(
          ['about_tekst' => $input['about'],
          'about_tekst_sub' => $input['aboutSub'],
          'about_tekst_en' => $input['aboutEn'],
          'about_tekst_sub_en' => $input['aboutSubEn']
        ]);
        return redirect('/')->with('message', 'SUCCESS');
      } else {
        return redirect('/')->with('message', 'LOG IN');
      }

    }


    public function rooms(){
      $rooms = Room::all();
      return view('rooms/rooms', compact('rooms'));
    }
    public function rooms_edit($id){
      $rooms = Room::all();
      return view('edits/roomsEdit', compact('rooms'));
    }

    public function rooms_save($id){
      if(Auth::check()){
        $roomInput = Request::all();
        Room::find($id)->update([
            'standard_room'=> $roomInput['standard'],
            'standard_room_en'=>$roomInput['standardEn'],
            'superior_room'=>$roomInput['superior'],
            'superior_room_en'=>$roomInput['superiorEn'],
            'deluxe_room'=>$roomInput['deluxe'],
            'deluxe_room_en'=>$roomInput['deluxeEn']
          ]);
        return redirect('/rooms')->with('message', 'SUCCESS');
      } else {
        return redirect('/rooms')->with('message', 'LOG IN');
      }

    }

    public function about(){
      return view('about.about');
    }

    public function events(){
      $events = Event::all();
      return view('events.events', compact('events'));
    }

    public function events_edit($id){
      $events = Event::all();
      return view('edits/eventsEdit', compact('events'));
    }

    public function events_save($id){
      if(Auth::check()){
        $eventInput = Request::all();
        Event::find($id)->update([
            'meetings'=> $eventInput['meeting'],
            'services'=> $eventInput['service']
          ]);
        return redirect('/events')->with('message', 'SUCCESS');
      } else {
        return redirect('/events')->with('message', 'LOG IN');
      }

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
      $rooms = Room::all();
      return view('en.rooms.rooms', compact('rooms'));
    }
    public function eventsEn(){
      $events = Event::all();
      return view('en.events.events', compact('events'));
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
