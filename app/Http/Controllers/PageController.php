<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\Company;

class PageController extends Controller
{

    public function showRecruiter(){
    	return view('pages.recruiter');
    }
    public function showRecord(){
        
        $data = Record::all();
        
    

    	return view('pages.record')->with('data',$data);
    }
    public function showSpeak(){
    	return view('pages.speak');
    }
    public function showGallery(){
    	return view('pages.gallery');
    }
}
