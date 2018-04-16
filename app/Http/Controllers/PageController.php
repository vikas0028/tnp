<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Marks;
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
        $year = DB::table('Companies')->select('year')->groupBy('year')->get(); 
        $ECcom2018 = Company::where('Companies.branch','=','EC')->where('Companies.year','=','2018')->get();
        $ECcom2019 = Company::where('Companies.branch','=','EC')->where('Companies.year','=','2019')->get();
        $MECHcom2018 = Company::where('Companies.branch','=','MECH')->where('Companies.year','=','2018')->get();
        $MECHcom2019 = Company::where('Companies.branch','=','MECH')->where('Companies.year','=','2019')->get();
        $ITcom2018 = Company::where('Companies.branch','=','it')->where('Companies.year','=','2018')->get();
        $ITcom2019 = Company::where('Companies.branch','=','it')->where('Companies.year','=','2019')->get();
        $CEcom2018 = Company::where('Companies.branch','=','ce')->where('Companies.year','=','2018')->get();
        $CEcom2019 = Company::where('Companies.branch','=','ce')->where('Companies.year','=','2019')->get();
    

    	return view('pages.record',compact('branch','year','data','ECcom2018','ECcom2019','MECHcom2018','MECHcom2019','ITcom2018','ITcom2019','CEcom2018','CEcom2019'));
    }
    public function showcompany(Request $req){

        $data = Studentplaced::where('studentplaceds.company','=',$req->com)->get();
        $com = $req->com;
        return view('pages.company')->with('data',$data)->with('com',$com);


    }
    public function showstudent(Request $req){

        $user = User::where('users.enrollment','=',$req->en)
                ->join('marks', 'users.enrollment','=', 'marks.enrollment')->first();
                
        
        return view('pages.student')->with('user', $user);

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
