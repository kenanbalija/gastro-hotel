<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use Request;
use App\Text;
use App\Room;
use App\Event;
use App\Contact;
use App\Gallery;
use Input;
use App\DownloadPrice;
use Response;
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
        \Session::flash('flash_message', 'Uspjesno ste izmjenili podatke');
        return redirect('/');
      } else {
        \Session::flash('flash_message', 'Logujte se');

        return redirect('/');
      }

    }


    public function rooms(){
      $rooms = Room::all();
      return view('rooms/rooms', compact('rooms'));
    }
    //upload cjenovnik
    // public function uploadPrice(){
    //   if(Input::hasFile('cjenovnik')){
    //     $file = Input::file('cjenovnik');
    //     $file->move('uploads', $file->getClientOriginalName());
    //     return redirect('/rooms');
    //   }
    // }
    public function downloadPrice(){
      $path = public_path()."/uploads/cjenovnik.pdf";
      return Response::download($path);
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
        \Session::flash('flash_message', 'Uspjesno ste izmjenili podatke');
        return redirect('/rooms');
      } else {
        \Session::flash('flash_message', 'Logujte se');
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
            'meetingsEn'=> $eventInput['meetingEn'],
            'services'=> $eventInput['service'],
            'servicesEn'=> $eventInput['serviceEn']
          ]);
          \Session::flash('flash_message', 'Uspjesno ste izmjenili podatke');

        return redirect('/events');
      } else {
        \Session::flash('flash_message', 'Logujte se');

        return redirect('/events')->with('message', 'LOG IN');
      }

    }


    public function contact(){
      $contacts = Contact::all();

      return view('contact.contact', compact('contacts'));
    }
    public function contact_edit($id){
      $contacts = Contact::all();
      return view('edits.contactEdit', compact('contacts'));
    }

    public function contact_save($id){
      if(Auth::check()){
        $contactInput = Request::all();
        Contact::find($id)->update([
          'contact'=> $contactInput['contact'],
          'contactEn'=> $contactInput['contactEn']
        ]);
        \Session::flash('flash_message', 'Uspjesno ste izmjenili podatke');
         return redirect('/contact');
      }else {
        \Session::flash('flash_message', 'Logujte se');

        return redirect('/contact')->with('message', 'LOG IN');
      }
    }
    public function photos(){
      $galleries = Gallery::all();
      return view('gallery.photos')
           ->with('galleries', $galleries);
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
      $contacts = Contact::all();
      return view('en.contact.contact', compact('contacts'));
    }
    public function photosEn(){
      $galleries = Gallery::all();

      return view('en.gallery.photos')
       ->with('galleries', $galleries);
    }
    public function servicesEn(){
      return view('en.services.services');
    }

}
