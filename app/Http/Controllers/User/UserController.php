<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function logout()
    {
    	Auth::logout();
    	return back();
    }
    public function login(request $request)
    {
    	if (Auth::attempt(['email'=>$request->email,'password'=>$request->password])) {
    		return redirect('posts');
    	}
        else
        {
            return back();
        }
    	
    }
    public function showlogin()
    {
    	return view('user.login');
    }
    public function showregister()
    {
    	return view('user.register');
    }
    public function register(request $request)
    {
    	$request->validate([
    		'name'=>'required',
    		'email'=>'required|email',
    		'password'=>'required'
    	]);

    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->save();

    	Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
    	return redirect('posts');
    }
}
