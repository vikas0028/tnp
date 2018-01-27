<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recordController extends Controller
{
    public function showRecord(){
    	return view('pages.record');
    }
}
