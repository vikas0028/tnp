<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Marks;
use DB;
class AjaxController extends Controller
{

    public function getFields(Request $req){
    	// return 

    	$userCol = array_values(
    						array_diff(
    										DB::getSchemaBuilder()->getColumnListing((new User())->getTable()),
    										['id', 'created_at','updated_at','avatar','remember_token','resume','address','name','password']
    								  )
							);

    	$marksCol = array_values(
							array_diff(
									DB::getSchemaBuilder()->getColumnListing((new Marks())->getTable()),
									['id', 'created_at','updated_at','enrollment','sem1','sem2','sem3'
									,'sem4','sem5','sem6','sem7','sem8']
							  )
					);

    	return ['user' => $userCol, 'marks' => $marksCol];
    }

	public function getResults	(Request $req)
	{
		$query = $req->get('q');
		$paramFields = $this->getFields($req);
		$params = array();
		foreach ($paramFields['user'] as $key => $value) {
			array_push( $params, 'users.'.$value);
		}
		foreach ($paramFields['marks'] as $key => $value) {
			array_push($params, 'marks.'.$value);
		}
		$params = implode(",", $params);
		
		$q = DB::raw("Select ".$params." from users LEFT JOIN marks ON users.enrollment = marks.enrollment where ".$query );
		
		$results = DB::select( $q );
		return $results;
	}
}
