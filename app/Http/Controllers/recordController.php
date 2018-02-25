<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\Company;
use DB;

class recordController extends Controller
{

	public function showRecord(){

		 $data = Record::orderBy('year','desc')->get();
		return view('admin.placementRecord')->with('data',$data);
	}
	public function showCompany(){
		$data = Company::orderBy('year','desc')->get();
		return view('admin.companyRecord')->with('data',$data);
	}
	
	public function editRecord(Request $req){

		$data = Record::where('records.id',$req->id)->first();
		
		
		return view('admin.editPlacement')->with('data',$data);

	}
	public function updateRecord(Request $req){

		$data = Record::where('records.id',$req->id)->first();


		$data->year = $req->year;
		$data->companies_visited = $req->companies_visited;
		$data->students_placed = $req->students_placed;
		$data->update();

		return redirect('/admin/PlacementRecord');

	}
	public function DeletRecord(Request $req){

		$data = Record::where('records.id',$req->id)->first();
		$data->delete();
		return redirect('/admin/PlacementRecord');
	}

	public function editCompany(Request $req){

		$data = Company::where('id',$req->id)->first();
		return view('admin.editCompany')->with('data',$data);
		
	}

	public function updateCompany(Request $req){




		$data = Company::where('id',$req->id)->first();

		$data->name = $req->name;
		$data->email = $req->email;
		$data->contact = $req->contact;
		$data->branch = $req->branch;
		$data->year = $req->year;
		$data->student_placed = $req->student_placed;
		$data->package = $req->package;
		$data->city = $req->city;
		$data->state = $req->state;
		$data->update();

		return redirect('/admin/CompanyRecord');
	}
	public function DeletCompany(Request $req){

		$data = Company::where('id',$req->id)->first();
		
		$data->delete();
		return redirect('/admin/CompanyRecord');

	}
}
