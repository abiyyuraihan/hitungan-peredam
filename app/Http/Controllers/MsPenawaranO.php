<?php

namespace App\Http\Controllers;

use App\Models\HargaJendela;
use App\Models\HargaListrik;
use App\Models\HargaMusicStudio;
use App\Models\HargaPintuPeredam;
use App\Models\JasaPeredam;
use App\Models\PekerjaanLantai;
use App\Models\PenawaranOMS;
use Illuminate\Http\Request;

class MsPenawaranO extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'mrType' => 'required',
            'nama' => 'required|max:30',
            'alamat' => 'required|max:200',
            'foto1' => 'image|file|max:2048',
            'foto2' => 'image|file|max:2048',
            'foto3' => 'image|file|max:2048',
            'panjangStudio' => 'required',
            'lebarStudio' => 'required',
            'panjangOperator' => 'required',
            'lebarOperator' => 'required',
            'tinggi' => 'required',
            'pintu' => 'required',
            'mobilisasi' => 'required',
            'dropMaterial' => 'max:50',
            'sampah' => 'max:50',
            'transport' => 'max:50',
            'mess' => 'max:50',
            'tiket' => 'max:50'
        ]);

        if ($request->file('foto1')) {
            $validatedData['foto1'] = $request->file('foto1')->store('foto-ruangan');
        }
        if ($request->file('foto2')) {
            $validatedData['foto2'] = $request->file('foto2')->store('foto-ruangan');
        }
        if ($request->file('foto3')) {
            $validatedData['foto3'] = $request->file('foto3')->store('foto-ruangan');
        }

        PenawaranOMS::create($validatedData);

        return redirect('/min_kontakt01654')->with('success', 'Data Ruangan Anda Sudah Tersimpan');
    }
    
    //Penawaran Gypsum Standard
    public function penawaranGypsumStandard()
    {
        return view('ms.operator.Penawaran_gs.penawaran_operator_ms_gs', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGs(PenawaranOMS $p_o_ms){
        return view('ms.operator.Penawaran_gs.penawaran_lengkap_operator_ms_gs', [
            'title' => 'Penawaran',
            'p_o_ms' => $p_o_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    
    //Penawaran Gypsum Medium
    public function penawaranGypsumMedium()
    {
        return view('ms.operator.Penawaran_gm.penawaran_operator_ms_gm', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGm(PenawaranOMS $p_o_ms){
        return view('ms.operator.Penawaran_gm.penawaran_lengkap_operator_ms_gm', [
            'title' => 'Penawaran',
            'p_o_ms' => $p_o_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    
    //Penawaran Gypsum High
    public function penawaranGypsumHigh()
    {
        return view('ms.operator.Penawaran_gh.penawaran_operator_ms_gh', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGh(PenawaranOMS $p_o_ms){
        return view('ms.operator.Penawaran_gh.penawaran_lengkap_operator_ms_gh', [
            'title' => 'Penawaran',
            'p_o_ms' => $p_o_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    
    //Penawaran Akustik Standard
    public function penawaranAkustikStandard()
    {
        return view('ms.operator.Penawaran_as.penawaran_operator_ms_as', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAs(PenawaranOMS $p_o_ms){
        return view('ms.operator.Penawaran_as.penawaran_lengkap_operator_ms_as', [
            'title' => 'Penawaran',
            'p_o_ms' => $p_o_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    
    //Penawaran Akustik Medium
    public function penawaranAkustikMedium()
    {
        return view('ms.operator.Penawaran_am.penawaran_operator_ms_am', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAm(PenawaranOMS $p_o_ms){
        return view('ms.operator.Penawaran_am.penawaran_lengkap_operator_ms_am', [
            'title' => 'Penawaran',
            'p_o_ms' => $p_o_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    
    //Penawaran Akustik High
    public function penawaranAkustikHigh()
    {
        return view('ms.operator.Penawaran_ah.penawaran_operator_ms_ah', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAh(PenawaranOMS $p_o_ms){
        return view('ms.operator.Penawaran_ah.penawaran_lengkap_operator_ms_ah', [
            'title' => 'Penawaran',
            'p_o_ms' => $p_o_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    
    //Penawaran Akustik Deluxe
    public function penawaranAkustikDeluxe()
    {
        return view('ms.operator.Penawaran_ad.penawaran_operator_ms_ad', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAd(PenawaranOMS $p_o_ms){
        return view('ms.operator.Penawaran_ad.penawaran_lengkap_operator_ms_ad', [
            'title' => 'Penawaran',
            'p_o_ms' => $p_o_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
}
