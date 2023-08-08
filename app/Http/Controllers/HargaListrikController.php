<?php

namespace App\Http\Controllers;

use App\Models\HargaListrik;
use Illuminate\Http\Request;

class HargaListrikController extends Controller
{
    public function index() {
        return view('admin.listrik', [
            'title' => 'listrik',
            'listrik' => HargaListrik::latest()->first()
        ]);
    }
    public function hargaListrik(Request $request)
    {
        $rules = [
            'material_lampu' => 'required',
            'material_lampu_tembak' => 'required',
            'material_lampu_rgb' => 'required',
            'material_stopkontak' => 'required',
            'jasa_instalasi_listrik' => 'required',
        ];

        $validatedData = $request->validate($rules);

        HargaListrik::where('id', 1)->update($validatedData);

        return redirect('/listrik')->with('success', 'Harga Meeting Room BERHASIL di UPDATE');
    }
}
