<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
    	//
    }

    public function index()
    {
    	return view("login");
    }

    public function login(Request $request){
	    $this->validate($request, [
	        'username' => 'required',
	        'password' => 'required',
	        ]);
	    if (\Auth::attempt([
	        'username' => $request->username,
	        'password' => $request->password])
	    ){
	    	return redirect('/home');
	        
	    }
	    return redirect('/login')->with('error', 'Invalid Email address or Password');
	}
	/* GET
	*/
	public function logout(Request $request)
	{
	    if(\Auth::check())
	    {
	        \Auth::logout();
	        $request->session()->invalidate();
	    }
	    return  redirect('/');
	}

    public function home()
    {
        return view("index");
    }

	//petugas
	public function FormLoginAdmin()
	{
		return view('admin.auth.login');
	}

	public function LoginPetugas()
	{

		$auth = request()->only('username', 'password');
		if(Auth()->guard('petugas')->attempt($auth))
		{
			return redirect()->to('/');
		}
		return redirect('/petugas/login')->with('error', 'Invalid Email address or Password');
	}
}
