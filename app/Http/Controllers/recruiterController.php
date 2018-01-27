<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class recruiterController extends Controller
{
    public function showRecruiter(){
    	return view('pages.recruiter');
    }
}
