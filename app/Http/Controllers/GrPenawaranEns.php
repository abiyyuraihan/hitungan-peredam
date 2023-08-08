<?php

namespace App\Http\Controllers;

use App\Models\HargaGamingRoom;
use App\Models\HargaJendela;
use App\Models\HargaListrik;
use App\Models\HargaPintuPeredam;
use App\Models\JasaPeredam;
use App\Models\PekerjaanLantai;
use App\Models\PenawaranEnamSisiGR;
use Illuminate\Http\Request;

class GrPenawaranEns extends Controller
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
            'dindingEnam' => 'required',
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

        PenawaranEnamSisiGR::create($validatedData);

        return redirect('/min_kontakt01654')->with('success', 'Data Ruangan Anda Sudah Tersimpan');
    }

    public function penawaranGypsumStandard()
    {
        return view('gr.enam_sisi.Penawaran_gs.penawaran_enam_sisi_gr_gs', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGs(PenawaranEnamSisiGR $p_ens_gr)
    {
        return view('gr.enam_sisi.Penawaran_gs.penawaran_lengkap_enam_sisi_gr_gs', [
            'title' => 'Penawaran',
            'p_ens_gr' => $p_ens_gr,
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
        return view('gr.enam_sisi.Penawaran_gm.penawaran_enam_sisi_gr_gm', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGm(PenawaranEnamSisiGR $p_ens_gr)
    {
        return view('gr.enam_sisi.Penawaran_gm.penawaran_lengkap_enam_sisi_gr_gm', [
            'title' => 'Penawaran',
            'p_ens_gr' => $p_ens_gr,
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
        return view('gr.enam_sisi.Penawaran_gh.penawaran_enam_sisi_gr_gh', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showGh(PenawaranEnamSisiGR $p_ens_gr)
    {
        return view('gr.enam_sisi.Penawaran_gh.penawaran_lengkap_enam_sisi_gr_gh', [
            'title' => 'Penawaran',
            'p_ens_gr' => $p_ens_gr,
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
        return view('gr.enam_sisi.Penawaran_as.penawaran_enam_sisi_gr_as', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAs(PenawaranEnamSisiGR $p_ens_gr)
    {
        return view('gr.enam_sisi.Penawaran_as.penawaran_lengkap_enam_sisi_gr_as', [
            'title' => 'Penawaran',
            'p_ens_gr' => $p_ens_gr,
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
        return view('gr.enam_sisi.Penawaran_am.penawaran_enam_sisi_gr_am', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAm(PenawaranEnamSisiGR $p_ens_gr)
    {
        return view('gr.enam_sisi.Penawaran_am.penawaran_lengkap_enam_sisi_gr_am', [
            'title' => 'Penawaran',
            'p_ens_gr' => $p_ens_gr,
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
        return view('gr.enam_sisi.Penawaran_ah.penawaran_enam_sisi_gr_ah', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAh(PenawaranEnamSisiGR $p_ens_gr)
    {
        return view('gr.enam_sisi.Penawaran_ah.penawaran_lengkap_enam_sisi_gr_ah', [
            'title' => 'Penawaran',
            'p_ens_gr' => $p_ens_gr,
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
        return view('gr.enam_sisi.Penawaran_ad.penawaran_enam_sisi_gr_ad', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function showAd(PenawaranEnamSisiGR $p_ens_gr)
    {
        return view('gr.enam_sisi.Penawaran_ad.penawaran_lengkap_enam_sisi_gr_ad', [
            'title' => 'Penawaran',
            'p_ens_gr' => $p_ens_gr,
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'pekerjaanLantai' => PekerjaanLantai::latest()->first(),
            'jendela' => HargaJendela::latest()->first()
        ]);
    }
}
