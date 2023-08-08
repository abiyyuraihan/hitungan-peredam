<?php

namespace App\Http\Controllers;

use App\Models\HargaJendela;
use App\Models\HargaListrik;
use App\Models\HargaMeetingRoom;
use App\Models\HargaPintuPeredam;
use App\Models\JasaPeredam;
use App\Models\PekerjaanLantai;
use App\Models\PenawaranLimaSisiMR;
use Illuminate\Http\Request;

class MrPenawaranLs extends Controller
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

        PenawaranLimaSisiMR::create($validatedData);

        return redirect('/min_kontakt01654')->with('success', 'Data Ruangan Anda Sudah Tersimpan');
    }
    public function penawaranGypsumStandard()
    {
        return view('mr.lima_sisi.Penawaran_gs.penawaran_lima_sisi_mr_gs', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGs(PenawaranLimaSisiMR $p_ls_mr)
    {
        return view('mr.lima_sisi.Penawaran_gs.penawaran_lengkap_lima_sisi_mr_gs', [
            'title' => 'Penawaran',
            'p_ls_mr' => $p_ls_mr,
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }

    public function penawaranGypsumMedium()
    {
        return view('mr.lima_sisi.Penawaran_gm.penawaran_lima_sisi_mr_gm', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGm(PenawaranLimaSisiMR $p_ls_mr)
    {
        return view('mr.lima_sisi.Penawaran_gm.penawaran_lengkap_lima_sisi_mr_gm', [
            'title' => 'Penawaran',
            'p_ls_mr' => $p_ls_mr,
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }

    public function penawaranAkustikStandard()
    {
        return view('mr.lima_sisi.Penawaran_as.penawaran_lima_sisi_mr_as', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAs(PenawaranLimaSisiMR $p_ls_mr)
    {
        return view('mr.lima_sisi.Penawaran_as.penawaran_lengkap_lima_sisi_mr_as', [
            'title' => 'Penawaran',
            'p_ls_mr' => $p_ls_mr,
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }

    public function penawaranAkustikMedium()
    {
        return view('mr.lima_sisi.Penawaran_am.penawaran_lima_sisi_mr_am', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAm(PenawaranLimaSisiMR $p_ls_mr)
    {
        return view('mr.lima_sisi.Penawaran_am.penawaran_lengkap_lima_sisi_mr_am', [
            'title' => 'Penawaran',
            'p_ls_mr' => $p_ls_mr,
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }

    public function penawaranAkustikHigh()
    {
        return view('mr.lima_sisi.Penawaran_ah.penawaran_lima_sisi_mr_ah', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAh(PenawaranLimaSisiMR $p_ls_mr)
    {
        return view('mr.lima_sisi.Penawaran_ah.penawaran_lengkap_lima_sisi_mr_ah', [
            'title' => 'Penawaran',
            'p_ls_mr' => $p_ls_mr,
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
}
