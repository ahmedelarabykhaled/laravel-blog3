<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;

class LoginController extends Controller
{
    public function showlogin()
    {
    	if(Auth::guard('admin')->check())
    	{
    		return redirect('admin/dashboard');
    	}
    	else
    	{
    		return view('admin.login');
    	}
    }
    public function login(request $request)
    {
    	if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password]))
    	{
    		return redirect('admin/dashboard');
    	}
    	else
    	{
    		return back();
    	}
    }
    public function logout()
    {
    	Auth::guard('admin')->logout();

    	return redirect('posts');
    }
}
