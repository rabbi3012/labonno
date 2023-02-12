<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function regform(){
        return view('auth.registration');
    }
        public function regformsubmit(Request $request){
            $request->validate([
                'name'=>'required',
                'email'=>'required|unique:users,email',
                'mobile_number'=>'required',
                'password'=>'required'
            ]);
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'mobile_number'=>$request->mobile_number,
                //'password'=>$request->password,
                'password'=>bcrypt($request['password'])
           ]);
           return to_route('login.form');
    }

    public function login(){
        
        return view('auth.login');
    }


    public function store(Request $request){
        //dd($request->all());

        $creadentials = $request->except('_token');

        if(auth()->attempt($creadentials)){
           return to_route('admin.dashboard');
        }
        else{
            return to_route('login.form');
        }
    }
    public function logout(){
    auth()->logout();
    return to_route('login.form');
    }     
}