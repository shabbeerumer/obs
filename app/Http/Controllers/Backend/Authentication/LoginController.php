<?php

namespace App\Http\Controllers\Backend\Authentication;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->route('frontend.index')->with('success', 'Login successful!');
    } else {
        return redirect()->back()
            ->with('error', 'Invalid credentials.')
            ->with('showLoginModal', true)
            ->withInput();
    }
}

}

