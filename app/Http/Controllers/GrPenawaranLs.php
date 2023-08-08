<?php

namespace App\Http\Controllers;

use App\Models\HargaGamingRoom;
use App\Models\HargaJendela;
use App\Models\HargaListrik;
use App\Models\HargaPintuPeredam;
use App\Models\JasaPeredam;
use App\Models\PekerjaanLantai;
use App\Models\PenawaranLimaSisiGR;
use Illuminate\Http\Request;

class GrPenawaranLs extends Controller
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

        PenawaranLimaSisiGR::create($validatedData);

        return redirect('/min_kontakt01654')->with('success', 'Data Ruangan Anda Sudah Tersimpan');
    }

    public function penawaranGypsumStandard()
    {
        return view('gr.lima_sisi.Penawaran_gs.penawaran_lima_sisi_gr_gs', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGs(PenawaranLimaSisiGR $p_ls_gr)
    {
        return view('gr.lima_sisi.Penawaran_gs.penawaran_lengkap_lima_sisi_gr_gs', [
            'title' => 'Penawaran',
            'p_ls_gr' => $p_ls_gr,
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }

    public function penawaranGypsumMedium()
    {
        return view('gr.lima_sisi.Penawaran_gm.penawaran_lima_sisi_gr_gm', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGm(PenawaranLimaSisiGR $p_ls_gr)
    {
        return view('gr.lima_sisi.Penawaran_gm.penawaran_lengkap_lima_sisi_gr_gm', [
            'title' => 'Penawaran',
            'p_ls_gr' => $p_ls_gr,
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }

    public function penawaranGypsumHigh()
    {
        return view('gr.lima_sisi.Penawaran_gh.penawaran_lima_sisi_gr_gh', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGh(PenawaranLimaSisiGR $p_ls_gr)
    {
        return view('gr.lima_sisi.Penawaran_gh.penawaran_lengkap_lima_sisi_gr_gh', [
            'title' => 'Penawaran',
            'p_ls_gr' => $p_ls_gr,
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }

    public function penawaranAkustikStandard()
    {
        return view('gr.lima_sisi.Penawaran_as.penawaran_lima_sisi_gr_as', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAs(PenawaranLimaSisiGR $p_ls_gr)
    {
        return view('gr.lima_sisi.Penawaran_as.penawaran_lengkap_lima_sisi_gr_as', [
            'title' => 'Penawaran',
            'p_ls_gr' => $p_ls_gr,
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }

    public function penawaranAkustikMedium()
    {
        return view('gr.lima_sisi.Penawaran_am.penawaran_lima_sisi_gr_am', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAm(PenawaranLimaSisiGR $p_ls_gr)
    {
        return view('gr.lima_sisi.Penawaran_am.penawaran_lengkap_lima_sisi_gr_am', [
            'title' => 'Penawaran',
            'p_ls_gr' => $p_ls_gr,
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }

    public function penawaranAkustikHigh()
    {
        return view('gr.lima_sisi.Penawaran_ah.penawaran_lima_sisi_gr_ah', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAh(PenawaranLimaSisiGR $p_ls_gr)
    {
        return view('gr.lima_sisi.Penawaran_ah.penawaran_lengkap_lima_sisi_gr_ah', [
            'title' => 'Penawaran',
            'p_ls_gr' => $p_ls_gr,
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }

    public function penawaranAkustikDeluxe()
    {
        return view('gr.lima_sisi.Penawaran_ad.penawaran_lima_sisi_gr_ad', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAd(PenawaranLimaSisiGR $p_ls_gr)
    {
        return view('gr.lima_sisi.Penawaran_ad.penawaran_lengkap_lima_sisi_gr_ad', [
            'title' => 'Penawaran',
            'p_ls_gr' => $p_ls_gr,
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
}
