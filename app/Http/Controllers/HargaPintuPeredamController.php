<?php

namespace App\Http\Controllers;

use App\Models\HargaJendela;
use App\Models\HargaPintuPeredam;
use Illuminate\Http\Request;

class HargaPintuPeredamController extends Controller
{
    public function index() {
        return view('admin.pintu', [
            'title' => 'Pintu',
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'jendela' => HargaJendela::latest()->first(),
        ]);
    } 

    public function pintu(Request $request)
    {
        $rules = [
            'tebal_4cm' => 'required',
            'tebal_7cm' => 'required',
            'jasa_pasang_pintu' => 'required',
        ];

        $validatedData = $request->validate($rules);

        HargaPintuPeredam::where('id', 1)->update($validatedData);

        return redirect('/pintu_peredam')->with('success', 'Harga Pintu Peredam BERHASIL di UPDATE');
    }

    public function jendela(Request $request)
    {
        $rules = [
            'harga_jendela' => 'required',
            'jasa_pasang_jendela' => 'required',
        ];

        $validatedData = $request->validate($rules);

        HargaJendela::where('id', 1)->update($validatedData);

        return redirect('/pintu_peredam')->with('success', 'Harga Pintu Peredam BERHASIL di UPDATE');
    }
}
