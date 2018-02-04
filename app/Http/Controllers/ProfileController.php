<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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
    public function edit($id){

        $user = User::find($id);

        return view('edit',compact('user'));
    }
    public function update(Request $req, $id){

        dd($id)->with($id);
        $user = User::find($id);
        $user = $req->all();
        $user->update();
        return redirect('/profile')->with($id);
    }
}
