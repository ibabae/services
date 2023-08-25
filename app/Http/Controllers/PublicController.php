<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PublicController extends Controller
{
    // login page
    public function Admin(){
        if(Auth::check()){
            return view('admin.index');
        } else {
            return view('admin.login');
        }
    }

    // login post
    public function AdminLogin(Request $request){
        $validator = Validator::make($request->all(),[
            'username' => 'required',
            'password' => 'required',
        ]);
        if($validator->fails()){
            return redirect()->back()->withInputs()->withErrors($validator);
        }

        if(Auth::attempt($request->only(['username','password']),true)){
            return redirect()->route('admin');
        } else {
            return redirect()->back();
        }
    }

    // home
    public function Home(){
        return view('website.home');
    }
}
