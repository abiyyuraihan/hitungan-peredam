<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
    public function index() {
        return view('admin.login_admin', []);
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('webadmin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/harga_peredam');
        }

        return back()->with('loginError', 'Login Failed!');
    }

    public function logout(Request $request) {

        Auth::guard('webadmin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
