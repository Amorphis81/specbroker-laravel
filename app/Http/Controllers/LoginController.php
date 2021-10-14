<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function store(Request $request)
    {
        dd( $request->all() );
    }

    public function logout(): RedirectResponse {
        Auth::logout();
        return redirect()->home();
    }
}
