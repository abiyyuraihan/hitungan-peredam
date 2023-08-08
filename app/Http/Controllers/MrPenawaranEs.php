<?php

namespace App\Http\Controllers;

use App\Models\HargaJendela;
use App\Models\HargaListrik;
use App\Models\HargaMeetingRoom;
use App\Models\HargaPintuPeredam;
use App\Models\JasaPeredam;
use App\Models\PekerjaanLantai;
use App\Models\PenawaranEmpatSisiMR;
use Illuminate\Http\Request;

class MrPenawaranEs extends Controller
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
            'panjang' => 'required',
            'lebar' => 'required',
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

        PenawaranEmpatSisiMR::create($validatedData);

        return redirect('/min_kontakt01654')->with('success', 'Data Ruangan Anda Sudah Tersimpan');
    }

    //Penawaran Gypsum Standard
    public function penawaranGypsumStandard()
    {
        return view('mr.empat_sisi.Penawaran_gs.penawaran_empat_sisi_mr_gs', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGs(PenawaranEmpatSisiMR $p_es_mr){
        return view('mr.empat_sisi.Penawaran_gs.penawaran_lengkap_empat_sisi_mr_gs', [
            'title' => 'Penawaran',
            'p_es_mr' => $p_es_mr,
            'mr' => HargaMeetingRoom::latest()->first(),
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
        return view('mr.empat_sisi.Penawaran_gm.penawaran_empat_sisi_mr_gm', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGm(PenawaranEmpatSisiMR $p_es_mr){
        return view('mr.empat_sisi.Penawaran_gm.penawaran_lengkap_empat_sisi_mr_gm', [
            'title' => 'Penawaran',
            'p_es_mr' => $p_es_mr,
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    //Penawaran Panel Akustik Standard
    public function penawaranAkustikStandard()
    {
        return view('mr.empat_sisi.Penawaran_as.penawaran_empat_sisi_mr_as', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAs(PenawaranEmpatSisiMR $p_es_mr){
        return view('mr.empat_sisi.Penawaran_as.penawaran_lengkap_empat_sisi_mr_as', [
            'title' => 'Penawaran',
            'p_es_mr' => $p_es_mr,
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    //Penawaran Panel Akustik Medium
    public function penawaranAkustikMedium()
    {
        return view('mr.empat_sisi.Penawaran_am.penawaran_empat_sisi_mr_am', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAm(PenawaranEmpatSisiMR $p_es_mr){
        return view('mr.empat_sisi.Penawaran_am.penawaran_lengkap_empat_sisi_mr_am', [
            'title' => 'Penawaran',
            'p_es_mr' => $p_es_mr,
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    //Penawaran Panel Akustik High
    public function penawaranAkustikHigh()
    {
        return view('mr.empat_sisi.Penawaran_ah.penawaran_empat_sisi_mr_ah', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAh(PenawaranEmpatSisiMR $p_es_mr){
        return view('mr.empat_sisi.Penawaran_ah.penawaran_lengkap_empat_sisi_mr_ah', [
            'title' => 'Penawaran',
            'p_es_mr' => $p_es_mr,
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
}

