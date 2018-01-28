<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function showRecruiter(){
    	return view('pages.recruiter');
    }
    public function showRecord(){
    	return view('pages.record');
    }
    public function showSpeak(){
    	return view('pages.speak');
    }
    public function showGallery(){
    	return view('pages.gallery');
    }
}
