<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Marks;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            // 'name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            // 'password' => 'required|string|min:6|confirmed',
        ]);
        // return true;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // die('lol');
         Marks::create([
            'enrollment'=> $data['enrollment'],
            'sem1'=> $data['sem1'],
            'sem2'=> $data['sem2'],
            'sem3'=> $data['sem3'],
            'sem4'=> $data['sem4'],
            'sem5'=> $data['sem5'],
            'sem6'=> $data['sem6'],
            'sem7'=> $data['sem7'],
            'sem8'=> $data['sem8'],
            'cpi'=> $data['cpi'],
            'cblocks'=> $data['cblocks'],
            'tblocks'=> $data['tblocks'],
            'cgpa'=> $data['cgpa']
         ]);
        
     return    User::create([
            'name'      => "",
            'email'     => $data['email'],
            'password'  => bcrypt($data['password']),
            'enrollment'=> $data['enrollment'],
            'fname'     => $data['fname'],
            'mname'     => $data['mname'],
            'lname'     => $data['lname'],
            'dob'       => $data['dob'],
            'address'   => "",
            'city'      => $data['city'],
            'pincode'   => $data['pincode'],
            'street'    => $data['street'],
            'state'     => $data['state'],
            'branch'    => $data['branch'],
            'division'  => $data['division'],
            'sem'       => $data['sem'],
            'resume'    => "",
            'avatar'    => ""
        ]);

         return true;
    }
}
