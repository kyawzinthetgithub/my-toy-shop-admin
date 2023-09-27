<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //direct login page

    public function login(){
        return view('login');
    }

    //direct register page
    public function register(){
        return view('register');
    }

    //direct dashboard page
    public function dashboard(){
        if (Auth::user()->role == 'admin') {
            return view('admin.dashboard');
        }
        return abort(403);
    }
}
