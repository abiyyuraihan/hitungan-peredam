<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterAdminController extends Controller
{
    public function index() {
        return view('admin.register_admin', []);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:40',
            'username' => 'required|max:40|unique:admins',
            'password' => 'required|min:8|max:12',
            'tlp' => 'required|min:8|max:14'
        ]);

        $validatedData['password'] = Hash::make($validatedData["password"]);

        admin::create($validatedData);

        //menampilkan notifikasi success login
        // $request->session()->flash('success', 'Registration Seccessfull! Please Login');

        return redirect('/login_admin')->with('success', 'Registration Seccessfull! Please Login');
    }
}
