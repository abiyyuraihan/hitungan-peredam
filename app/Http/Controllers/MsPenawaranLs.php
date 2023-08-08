<?php

namespace App\Http\Controllers;

use App\Models\HargaJendela;
use App\Models\HargaListrik;
use App\Models\HargaMusicStudio;
use App\Models\HargaPintuPeredam;
use App\Models\JasaPeredam;
use App\Models\PekerjaanLantai;
use App\Models\PenawaranLimaSisiMS;
use Illuminate\Http\Request;

class MsPenawaranLs extends Controller
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
            'dindingSatu' => 'required',
            'dindingDua' => 'required',
            'dindingTiga' => 'required',
            'dindingEmpat' => 'required',
            'dindingLima' => 'required',
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

        PenawaranLimaSisiMS::create($validatedData);

        return redirect('/min_kontakt01654')->with('success', 'Data Ruangan Anda Sudah Tersimpan');
    }

    public function penawaranGypsumStandard()
    {
        return view('ms.lima_sisi.Penawaran_gs.penawaran_lima_sisi_ms_gs', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGs(PenawaranLimaSisiMS $p_ls_ms)
    {
        return view('ms.lima_sisi.Penawaran_gs.penawaran_lengkap_lima_sisi_ms_gs', [
            'title' => 'Penawaran',
            'p_ls_ms' => $p_ls_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    public function penawaranGypsumMedium()
    {
        return view('ms.lima_sisi.Penawaran_gm.penawaran_lima_sisi_ms_gm', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGm(PenawaranLimaSisiMS $p_ls_ms)
    {
        return view('ms.lima_sisi.Penawaran_gm.penawaran_lengkap_lima_sisi_ms_gm', [
            'title' => 'Penawaran',
            'p_ls_ms' => $p_ls_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    public function penawaranGypsumHigh()
    {
        return view('ms.lima_sisi.Penawaran_gh.penawaran_lima_sisi_ms_gh', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGh(PenawaranLimaSisiMS $p_ls_ms)
    {
        return view('ms.lima_sisi.Penawaran_gh.penawaran_lengkap_lima_sisi_ms_gh', [
            'title' => 'Penawaran',
            'p_ls_ms' => $p_ls_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    public function penawaranAkustikStandard()
    {
        return view('ms.lima_sisi.Penawaran_as.penawaran_lima_sisi_ms_as', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAs(PenawaranLimaSisiMS $p_ls_ms)
    {
        return view('ms.lima_sisi.Penawaran_as.penawaran_lengkap_lima_sisi_ms_as', [
            'title' => 'Penawaran',
            'p_ls_ms' => $p_ls_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    public function penawaranAkustikMedium()
    {
        return view('ms.lima_sisi.Penawaran_am.penawaran_lima_sisi_ms_am', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAm(PenawaranLimaSisiMS $p_ls_ms)
    {
        return view('ms.lima_sisi.Penawaran_am.penawaran_lengkap_lima_sisi_ms_am', [
            'title' => 'Penawaran',
            'p_ls_ms' => $p_ls_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    public function penawaranAkustikHigh()
    {
        return view('ms.lima_sisi.Penawaran_ah.penawaran_lima_sisi_ms_ah', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAh(PenawaranLimaSisiMS $p_ls_ms)
    {
        return view('ms.lima_sisi.Penawaran_ah.penawaran_lengkap_lima_sisi_ms_ah', [
            'title' => 'Penawaran',
            'p_ls_ms' => $p_ls_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    public function penawaranAkustikDeluxe()
    {
        return view('ms.lima_sisi.Penawaran_ad.penawaran_lima_sisi_ms_ad', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAd(PenawaranLimaSisiMS $p_ls_ms)
    {
        return view('ms.lima_sisi.Penawaran_ad.penawaran_lengkap_lima_sisi_ms_ad', [
            'title' => 'Penawaran',
            'p_ls_ms' => $p_ls_ms,
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
}
