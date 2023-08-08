<?php

namespace App\Http\Controllers;

use App\Models\HargaJendela;
use App\Models\HargaKaraokeRoom;
use App\Models\HargaListrik;
use App\Models\HargaPintuPeredam;
use App\Models\JasaPeredam;
use App\Models\PekerjaanLantai;
use App\Models\PenawaranEmpatSisiKR;
use Illuminate\Http\Request;

class KrPenawaranEs extends Controller
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

        PenawaranEmpatSisiKR::create($validatedData);

        return redirect('/min_kontakt01654')->with('success', 'Data Ruangan Anda Sudah Tersimpan');
    }

    //Penawaran Gypsum Standard
    public function penawaranGypsumStandard()
    {
        return view('kr.empat_sisi.Penawaran_gs.penawaran_empat_sisi_kr_gs', [
            'kr' => HargaKaraokeRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGs(PenawaranEmpatSisiKR $p_es_kr){
        return view('kr.empat_sisi.Penawaran_gs.penawaran_lengkap_empat_sisi_kr_gs', [
            'title' => 'Penawaran',
            'p_es_kr' => $p_es_kr,
            'kr' => HargaKaraokeRoom::latest()->first(),
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
        return view('kr.empat_sisi.Penawaran_gm.penawaran_empat_sisi_kr_gm', [
            'kr' => HargaKaraokeRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGm(PenawaranEmpatSisiKR $p_es_kr){
        return view('kr.empat_sisi.Penawaran_gm.penawaran_lengkap_empat_sisi_kr_gm', [
            'title' => 'Penawaran',
            'p_es_kr' => $p_es_kr,
            'kr' => HargaKaraokeRoom::latest()->first(),
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
        return view('kr.empat_sisi.Penawaran_gh.penawaran_empat_sisi_kr_gh', [
            'kr' => HargaKaraokeRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGh(PenawaranEmpatSisiKR $p_es_kr){
        return view('kr.empat_sisi.Penawaran_gh.penawaran_lengkap_empat_sisi_kr_gh', [
            'title' => 'Penawaran',
            'p_es_kr' => $p_es_kr,
            'kr' => HargaKaraokeRoom::latest()->first(),
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
        return view('kr.empat_sisi.Penawaran_as.penawaran_empat_sisi_kr_as', [
            'kr' => HargaKaraokeRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAs(PenawaranEmpatSisiKR $p_es_kr){
        return view('kr.empat_sisi.Penawaran_as.penawaran_lengkap_empat_sisi_kr_as', [
            'title' => 'Penawaran',
            'p_es_kr' => $p_es_kr,
            'kr' => HargaKaraokeRoom::latest()->first(),
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
        return view('kr.empat_sisi.Penawaran_am.penawaran_empat_sisi_kr_am', [
            'kr' => HargaKaraokeRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAm(PenawaranEmpatSisiKR $p_es_kr){
        return view('kr.empat_sisi.Penawaran_am.penawaran_lengkap_empat_sisi_kr_am', [
            'title' => 'Penawaran',
            'p_es_kr' => $p_es_kr,
            'kr' => HargaKaraokeRoom::latest()->first(),
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
        return view('kr.empat_sisi.Penawaran_ah.penawaran_empat_sisi_kr_ah', [
            'kr' => HargaKaraokeRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAh(PenawaranEmpatSisiKR $p_es_kr){
        return view('kr.empat_sisi.Penawaran_ah.penawaran_lengkap_empat_sisi_kr_ah', [
            'title' => 'Penawaran',
            'p_es_kr' => $p_es_kr,
            'kr' => HargaKaraokeRoom::latest()->first(),
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
        return view('kr.empat_sisi.Penawaran_ad.penawaran_empat_sisi_kr_ad', [
            'kr' => HargaKaraokeRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAd(PenawaranEmpatSisiKR $p_es_kr){
        return view('kr.empat_sisi.Penawaran_ad.penawaran_lengkap_empat_sisi_kr_ad', [
            'title' => 'Penawaran',
            'p_es_kr' => $p_es_kr,
            'kr' => HargaKaraokeRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
}
