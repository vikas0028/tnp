<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\Company;
use App\Studentplaced;
use DB;
use Image;
use Excel;

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

	public function importExcel(Request $request)
    {
        if($request->hasFile('student')){
            Excel::load($request->file('student')->getRealPath(), function ($reader) {
                foreach ($reader->toArray() as $key => $row) {
                    $data['enrollment'] = $row['enrollment'];
                    $data['name'] = $row['name'];
                    $data['company'] = $row['company'];
                    $data['package'] = $row['package'];
                    $data['batch'] = $row['batch'];
                    $data['sem'] = $row['sem'];
                    $data['branch'] = $row['branch'];
                    

                    if(!empty($data)) {
                        DB::table('studentplaceds')->insert($data);
                    }
                }
            });
        }

        return redirect('/admin/PlacementRecord');
    }
	
	// public function editRecord(Request $req){

	// 	$data = Record::where('records.id',$req->id)->first();
		
		
	// 	return view('admin.editPlacement')->with('data',$data);

	// }
	// public function updateRecord(Request $req){

	// 	$data = Record::where('records.id',$req->id)->first();


	// 	$data->year = $req->year;
	// 	$data->companies_visited = $req->companies_visited;
	// 	$data->students_placed = $req->students_placed;
	// 	$data->update();

	// 	return redirect('/admin/PlacementRecord');

	// }
	// public function DeletRecord(Request $req){

	// 	$data = Record::where('records.id',$req->id)->first();
	// 	$data->delete();
	// 	return redirect('/admin/PlacementRecord');
	// }
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
			
		if($req->hasFile('logo')){
    		$logo = $req->file('logo');
    		$filename = $req->name . '.' . $logo->getClientOriginalExtension();
    		$location = public_path('/logo/'.$filename);
    		Image::make($logo)->save($location);
    		$company->logo = $filename;
    		
    		
    	}
		
		$company->save();

		$data = Company::all();
		return redirect('/admin/CompanyRecord');
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
