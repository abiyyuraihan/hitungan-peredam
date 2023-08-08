<?php

namespace App\Http\Controllers;

use App\Models\PekerjaanLantai;
use Illuminate\Http\Request;

class PekerjaanLantaiController extends Controller
{
    public function index() {
        return view('admin.pekerjaan_lantai', [
            'title' => 'pekerjaanLantai',
            'pekerjaanLantai' => PekerjaanLantai::latest()->first()
        ]);
    }
    public function pekerjaanLantai(Request $request)
    {
        $rules = [
            'karpet_buanna' => 'required',
            'karpet_kantor' => 'required',
            'vinyl' => 'required',
            'parket_kayu' => 'required',
            'panggung' => 'required',
            'minibar' => 'required'
        ];

        $validatedData = $request->validate($rules);

        PekerjaanLantai::where('id', 1)->update($validatedData);

        return redirect('/pekerjaan_lantai')->with('success', 'Harga Meeting Room BERHASIL di UPDATE');
    }
}
