<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UsersController extends Controller
{
    public function __construct() {
        $this->middleware('auth')->except(['login']);

        $this->middleware('guest')->only(['login']);
    }

    public function index(){
        $data = User::all();

        return view('admin.users.index', compact('data'));
    }

    public function login(){

        // if request is post - validate login form
        if(request()->isMethod('post')){

            // this is post request
            // submit login form

            $this->validate(request(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);

            // if valalidation is TRUE (SUCCESS)
            // try to login user
            if( Auth::attempt([
                'email' => request('email'),
                'password' => request('password'),

                ]) ){
                // login is successful
                // redirect to '/welcome' route
                // with message
                return redirect()->intended(route('users-welcome'));
            } else {
                // credentials are wrong
                // return back (redirect) with CUSTOM message
                // 'Email or password does not match records!!!'

                return back()
                        ->withErrors([
                            'email' => 'Email or password does not match records!!!'
                            ])
                        ->withInput([
                            'email' => request('email')
                        ]);
            }

        }

        // this is view for get request
        return view('admin.users.login');
    }

    public function welcome(){

        return view('admin.users.welcome');
    }



    
    public function logout(){
        Auth::logout();

        return redirect( route('users-login') );
    }
}
