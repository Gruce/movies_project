<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;

class Logout extends Controller
{
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
      }
}
