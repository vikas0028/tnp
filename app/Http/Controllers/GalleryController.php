<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function index(){

    	return view('admin.gallery');
    }

    public function insert(Request $req){

    	$this->validate($req, [

                'img' => 'required',
                'img.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if($req->hasfile('img'))
         {

            foreach($req->file('img') as $image)
            {
                $name=$image->getClientOriginalName();
                $image->move(public_path().'/gallery/', $name);  
	         $gallery = new Gallery;

	         $gallery->year = $req->year;
	         $gallery->img = $name;
	         $gallery->save();
                 
            }
         }

         return redirect('admin/Gallery');
    }
}
