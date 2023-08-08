<?php

namespace App\Http\Controllers;

use App\Models\HargaGamingRoom;
use App\Models\HargaJendela;
use App\Models\HargaListrik;
use App\Models\HargaPintuPeredam;
use App\Models\JasaPeredam;
use App\Models\PekerjaanLantai;
use App\Models\PenawaranEmpatSisiGR;
use Illuminate\Http\Request;

class GrPenawaranEs extends Controller
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

        PenawaranEmpatSisiGR::create($validatedData);

        return redirect('/min_kontakt01654')->with('success', 'Data Ruangan Anda Sudah Tersimpan');
    }

    //Penawaran Gypsum Standard
    public function penawaranGypsumStandard()
    {
        return view('gr.empat_sisi.Penawaran_gs.penawaran_empat_sisi_gr_gs', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGs(PenawaranEmpatSisiGR $p_es_gr){
        return view('gr.empat_sisi.Penawaran_gs.penawaran_lengkap_empat_sisi_gr_gs', [
            'title' => 'Penawaran',
            'p_es_gr' => $p_es_gr,
            'gr' => HargaGamingRoom::latest()->first(),
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
        return view('gr.empat_sisi.Penawaran_gm.penawaran_empat_sisi_gr_gm', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGm(PenawaranEmpatSisiGR $p_es_gr){
        return view('gr.empat_sisi.Penawaran_gm.penawaran_lengkap_empat_sisi_gr_gm', [
            'title' => 'Penawaran',
            'p_es_gr' => $p_es_gr,
            'gr' => HargaGamingRoom::latest()->first(),
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
        return view('gr.empat_sisi.Penawaran_gh.penawaran_empat_sisi_gr_gh', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGh(PenawaranEmpatSisiGR $p_es_gr){
        return view('gr.empat_sisi.Penawaran_gh.penawaran_lengkap_empat_sisi_gr_gh', [
            'title' => 'Penawaran',
            'p_es_gr' => $p_es_gr,
            'gr' => HargaGamingRoom::latest()->first(),
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
        return view('gr.empat_sisi.Penawaran_as.penawaran_empat_sisi_gr_as', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAs(PenawaranEmpatSisiGR $p_es_gr){
        return view('gr.empat_sisi.Penawaran_as.penawaran_lengkap_empat_sisi_gr_as', [
            'title' => 'Penawaran',
            'p_es_gr' => $p_es_gr,
            'gr' => HargaGamingRoom::latest()->first(),
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
        return view('gr.empat_sisi.Penawaran_am.penawaran_empat_sisi_gr_am', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAm(PenawaranEmpatSisiGR $p_es_gr){
        return view('gr.empat_sisi.Penawaran_am.penawaran_lengkap_empat_sisi_gr_am', [
            'title' => 'Penawaran',
            'p_es_gr' => $p_es_gr,
            'gr' => HargaGamingRoom::latest()->first(),
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
        return view('gr.empat_sisi.Penawaran_ah.penawaran_empat_sisi_gr_ah', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAh(PenawaranEmpatSisiGR $p_es_gr){
        return view('gr.empat_sisi.Penawaran_ah.penawaran_lengkap_empat_sisi_gr_ah', [
            'title' => 'Penawaran',
            'p_es_gr' => $p_es_gr,
            'gr' => HargaGamingRoom::latest()->first(),
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
        return view('gr.empat_sisi.Penawaran_ad.penawaran_empat_sisi_gr_ad', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAd(PenawaranEmpatSisiGR $p_es_gr){
        return view('gr.empat_sisi.Penawaran_ad.penawaran_lengkap_empat_sisi_gr_ad', [
            'title' => 'Penawaran',
            'p_es_gr' => $p_es_gr,
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
}
