<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class VisitorLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:visitor');
	}	

    public function showLoginForm()
    {
    	return view('admin.login.visitorLogin');
    }
    public function login(Request $request)
    {
    	$this->validate($request,[
    		'email'    => 'required|email',
    		'password' => 'required|min:6'
    	]);

    	if(Auth::guard('visitor')->attempt(['email'=>$request->email,'password'=>$request->password]))
    	{
    		return redirect()->intended(url('/visitor'));
    	}
    	return redirect()->back()->withInput($request->only('email'));
    }
}
