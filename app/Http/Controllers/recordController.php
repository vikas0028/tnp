<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\Company;
use DB;

class recordController extends Controller
{

	public function showRecord(){

		 $data = Record::all();
		return view('admin.placementRecord')->with('data',$data);
	}
	public function showCompany(){

		return view('admin.companyRecord');
	}
	public function addCompany(Request $req){

		$company = new Company;

		$company->name = $req->name;
		$company->email = $req->email;
		$company->contact = $req->contact;
		$company->branch = $req->branch;
		$company->year = $req->year;
		$company->student_placed = $req->student_placed;
		$company->package = $req->package;
		$company->city = $req->city;
		$company->state = $req->state;
		$company->company_logo = $req->company_logo;
		$company->save();

		$data = Company::all();
		return view('admin.companyRecord')->with('data',$data);

	}
}
