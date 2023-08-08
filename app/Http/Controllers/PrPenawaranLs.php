<?php

namespace App\Http\Controllers;

use App\Models\HargaJendela;
use App\Models\HargaListrik;
use App\Models\HargaPintuPeredam;
use App\Models\HargaPodcastRoom;
use App\Models\JasaPeredam;
use App\Models\PekerjaanLantai;
use App\Models\PenawaranLimaSisiPR;
use Illuminate\Http\Request;

class PrPenawaranLs extends Controller
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

        PenawaranLimaSisiPR::create($validatedData);

        return redirect('/min_kontakt01654')->with('success', 'Data Ruangan Anda Sudah Tersimpan');
    }
    public function penawaranGypsumStandard()
    {
        return view('pr.lima_sisi.Penawaran_gs.penawaran_lima_sisi_pr_gs', [
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGs(PenawaranLimaSisiPR $p_ls_pr)
    {
        return view('pr.lima_sisi.Penawaran_gs.penawaran_lengkap_lima_sisi_pr_gs', [
            'title' => 'Penawaran',
            'p_ls_pr' => $p_ls_pr,
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    public function penawaranGypsumMedium()
    {
        return view('pr.lima_sisi.Penawaran_gm.penawaran_lima_sisi_pr_gm', [
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGm(PenawaranLimaSisiPR $p_ls_pr)
    {
        return view('pr.lima_sisi.Penawaran_gm.penawaran_lengkap_lima_sisi_pr_gm', [
            'title' => 'Penawaran',
            'p_ls_pr' => $p_ls_pr,
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    public function penawaranAkustikStandard()
    {
        return view('pr.lima_sisi.Penawaran_as.penawaran_lima_sisi_pr_as', [
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAs(PenawaranLimaSisiPR $p_ls_pr)
    {
        return view('pr.lima_sisi.Penawaran_as.penawaran_lengkap_lima_sisi_pr_as', [
            'title' => 'Penawaran',
            'p_ls_pr' => $p_ls_pr,
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    public function penawaranAkustikMedium()
    {
        return view('pr.lima_sisi.Penawaran_am.penawaran_lima_sisi_pr_am', [
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAm(PenawaranLimaSisiPR $p_ls_pr)
    {
        return view('pr.lima_sisi.Penawaran_am.penawaran_lengkap_lima_sisi_pr_am', [
            'title' => 'Penawaran',
            'p_ls_pr' => $p_ls_pr,
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
    public function penawaranAkustikHigh()
    {
        return view('pr.lima_sisi.Penawaran_ah.penawaran_lima_sisi_pr_ah', [
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAh(PenawaranLimaSisiPR $p_ls_pr)
    {
        return view('pr.lima_sisi.Penawaran_ah.penawaran_lengkap_lima_sisi_pr_ah', [
            'title' => 'Penawaran',
            'p_ls_pr' => $p_ls_pr,
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
}
