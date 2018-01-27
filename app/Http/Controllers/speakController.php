<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class speakController extends Controller
{
    public function showSpeak(){
    	return view('pages.speak');
    }
}
