<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ApartmanGallery;
use App\RestoranGallery;
use App\EksterijerGallery;
use Image;
use App\Gallery;
use Illuminate\Support\Facades\Validator;

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


    public function save_gallery(Request $request){
      //validate reques
      $validator = Validator::make($request->all(), [
        'gallery_name' => 'required|min:3',
        'gallery_name_en' => 'required|min:3'
      ]);
      //take action on failed
      if ($validator->fails()){
        return redirect('photos')->withErrors($validator)->withInput();
      }
      $gallery = new Gallery;
      //save new gallery
      $gallery->name=$request->input('gallery_name');
      $gallery->name_en=$request->input('gallery_name_en');
      $gallery->published = 1;
      $gallery->save();
      return redirect()->back();
    }

    public function view_gallery($id){
      $gallery = Gallery::findOrFail($id);
      return view('gallery.gallery-view')->with('gallery', $gallery);
    }
    public function do_image_upload(Request $request){
      //get file from postrequest
      $file = $request->file('file');
      //set new fileName
      $filename = uniqid() .$file -> getClientOriginalName();
      //move file to location
      $file->move('gallery/images/', $filename);
      //save image
      $gallery = Gallery::find($request->input('gallery_id'));
      $image = $gallery->images()->create([
        'gallery_id' => $request->input('gallery_id'),
        'file_name' => $filename,
        'file_size' => $file->getClientSize(),
        'file_mime' => $file->getClientMimeType(),
        'file_path' => 'gallery/images/'. $filename,
      ]);
    }

    public function delete_gallery($id){
      //load galeriju
      $currentGallery = Gallery::findOrFail($id);
      //get images
      $images = $currentGallery->images();
      //delete images
      foreach ($currentGallery->images() as $image){
        unlink(public_path($image->file_path));
      }
      $currentGallery->images()->delete();

      $currentGallery->delete();

      return redirect()->back();
    }
}
