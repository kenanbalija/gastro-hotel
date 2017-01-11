<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookingRequest;
use Mail;

class MailController extends Controller
{
    //sends email form
    public function send(Request $request){
      $tokenbaba = $request->input('g-recaptcha-response');
      if ($tokenbaba){
        #success
        Mail::send('mails.mail', [
          'name'=>$request->input('firstname'),
          'lastname'=>$request->input('lastname'),
          'email'=>$request->input('email'),
          'phone'=>$request->input('phonenumber'),
          'checkin'=>$request->input('checkin'),
          'checkout'=>$request->input('checkout'),
          'room'=>$request->input('roomkind')
        ], function($message){
          $message->to('kenan_balija@hotmail.com', 'NO REPLY')->subject('Rezervacija');
          $message->to('conanobalija@gmail.com', 'NO REPLY')->subject('Rezervacija');
        });
        return redirect('/');
      } else {
        return redirect('/');
      }

    }
    // what
}
