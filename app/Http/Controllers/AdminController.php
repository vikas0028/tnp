<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruiter;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.index');
    }
    public function search(){
    	return view('admin.search');
    }
    public function Recruiter(){
    	$rec = Recruiter::all();
    	return view('admin.recruiter')->with('rec',$rec);
    }
    public function addRecruiter(Request $req){
    	 $rec = new Recruiter;

    	 $rec->name = $req->name;
    	 $rec->company = $req->company;
    	 $rec->position = $req->position;
    	 $rec->contact = $req->contact;
    	 $rec->speak = $req->speak;
    	 $rec->save();

    	 return redirect('/admin/Recruiter');
    	
    }
    public function editRec(Request $req){
    	$rec = Recruiter::where('recruiters.id','=',$req->id)->first();

    	return view('admin.editRecruiter')->with('rec',$rec); 

    	
    }
    public function updateRec(Request $req){
    	$rec = Recruiter::where('recruiters.id','=',$req->id)->first();
    	 $rec->name = $req->name;
    	 $rec->company = $req->company;
    	 $rec->position = $req->position;
    	 $rec->contact = $req->contact;
    	 $rec->speak = $req->speak;
    	 $rec->update();

    	 return redirect('/admin/Recruiter');
    }
     public function deleteRec(Request $req){
     	$rec = Recruiter::where('recruiters.id','=',$req->id)->first();

     	$rec->delete();
     	return redirect('/admin/Recruiter');

     }
}

 