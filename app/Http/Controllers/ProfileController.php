<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Marks;
use Auth;
class ProfileController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $req )
    {
    	$user = User::where('users.enrollment',Auth::user()->enrollment)
                ->join('marks', 'users.enrollment','=', 'marks.enrollment')->first();
                
        
        return view('profile')->with('user', $user);
    }
    public function indexCard (Request $req)
    {
        $user = User::where('users.enrollment',Auth::user()->enrollment)
                ->join('marks', 'users.enrollment','=', 'marks.enrollment')->first();
                
        
        return view('cardprofile')->with('user', $user);
    }
    public function edit(){

        $user = User::where('users.enrollment',Auth::user()->enrollment)
                ->join('marks', 'users.enrollment','=', 'marks.enrollment')->first();

        return view('edit')->with('user',$user);
    }
    public function update(Request $req){
        // $data =  $req->all();
        // $userData = [];
        // $marksData = [];
        // // foreach (["enrollment","sem1","sem2","sem3","sem4","sem5","sem6","sem7","sem8","tblocks","cblocks","cpi","cgpa"] => $key) {
        // //     $marksData[ $key ] = $data[ $key ];
        // // }
        // // foreach (["enrollment","sem1","sem2","sem3","sem4","sem5","sem6","sem7","sem8","tblocks","cblocks","cpi","cgpa"] => $key) {
        // //     $marksData[ $key ] = $data[ $key ];
        // // }
        // dd($data);
        // if( $req->get('id') == Auth::user()->id){
        //     User::where('id', $req->get('id'))->update($userData);
        //     Marks::where('id', $req->get('id'))->update($userData);
        // }


        // dd($id)->with($id);
        $user = User::find(Auth::user()->id);

        $user->fname = $req->fname;
        $user->mname = $req->mname;
        $user->lname = $req->lname;
        $user->email = $req->email;
        $user->contact = $req->contact;
        $user->dob = $req->dob;
        $user->street = $req->street;
        $user->pincode = $req->pincode;
        $user->city = $req->city;
        $user->state = $req->state;
        $user->division = $req->division;
        $user->sem = $req->sem;
        $user->update();

        $mark = Marks::find(Auth::user()->id);

        $mark->sem1 = $req->sem1;
        $mark->sem2 = $req->sem2;
        $mark->sem3 = $req->sem3;
        $mark->sem4 = $req->sem4;
        $mark->sem5 = $req->sem5;
        $mark->sem6 = $req->sem6;
        $mark->sem7 = $req->sem7;
        $mark->sem8 = $req->sem8;
        $mark->tblocks = $req->tblocks;
        $mark->cblocks = $req->cblocks;
        $mark->cpi = $req->cpi;
        $mark->cgpa = $req->cgpa;
        $mark->update();
        

        return redirect('/profile');

        
    }
}
