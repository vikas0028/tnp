<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\Company;
use App\Gallery;
use App\Studentplaced;
use App\Recruiter;
use DB;

class PageController extends Controller
{

    public function showRecruiter(){
    	return view('pages.recruiter');
    }
    public function showRecord(){
        
        $branch = DB::table('studentplaceds')->select('branch')->groupBy('branch')->get(); 
        $data = Studentplaced::all();
    

    	return view('pages.record')->with('data',$data)->with('branch',$branch);
    }
    public function showSpeak(){
        $data  = Recruiter::all();
    	return view('pages.speak')->with('data',$data);
    }
    public function showGallery(){
        $data = DB::table('galleries')->select('id','year','img')->groupBy('year')->get();
        
    	return view('pages.gallery')->with('data',$data);
    }

    public function viewImage(Request $req){

        $img  = Gallery::Where('galleries.year','=',$req->year)->get();

        return view('pages.image')->with('img',$img);
    }
}
