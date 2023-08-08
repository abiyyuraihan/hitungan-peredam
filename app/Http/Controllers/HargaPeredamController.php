<?php

namespace App\Http\Controllers;

use App\Models\HargaGamingRoom;
use App\Models\HargaKaraokeRoom;
use App\Models\HargaListrik;
use App\Models\HargaMeetingRoom;
use App\Models\HargaMusicStudio;
use App\Models\HargaPintuPeredam;
use App\Models\HargaPodcastRoom;
use App\Models\JasaPeredam;
use Illuminate\Http\Request;

class HargaPeredamController extends Controller
{
    public function index()
    {
        return view('admin.harga_peredam', [
            'title' => 'harga peredam',
            'jasaPeredam' => JasaPeredam::latest()->first(),
            'mr' => HargaMeetingRoom::latest()->first(),
            'pr' => HargaPodcastRoom::latest()->first(),
            'ms' => HargaMusicStudio::latest()->first(),
            'kr' => HargaKaraokeRoom::latest()->first(),
            'gr' => HargaGamingRoom::latest()->first(),
        ]);
    }

    public function jasaPeredamDindingPlafon(Request $request)
    {
        $rules = [
            'jasa_peredam_dinding' => 'required',
            'jasa_peredam_plafon' => 'required',
            'survei_jabodetabek' => 'required'
        ];

        $validatedData = $request->validate($rules);

        JasaPeredam::where('id', 1)->update($validatedData);

        return redirect('/harga_peredam')->with('success', 'Harga Meeting Room BERHASIL di UPDATE');
    }

    public function hargaMeetingRoom(Request $request)
    {
        $rules = [
            'gypsum_standard_mr' => 'required',
            'gypsum_medium_mr' => 'required',
            'panel_standard_mr' => 'required',
            'panel_medium_mr' => 'required',
            'panel_high_mr' => 'required',
        ];

        $validatedData = $request->validate($rules);

        HargaMeetingRoom::where('id', 1)->update($validatedData);

        return redirect('/harga_peredam')->with('success', 'Harga Meeting Room BERHASIL di UPDATE');
    }

    public function hargaPodcastRoom(Request $request)
    {
        $rules = [
            'gypsum_standard_pr' => 'required',
            'gypsum_medium_pr' => 'required',
            'panel_standard_pr' => 'required',
            'panel_medium_pr' => 'required',
            'panel_high_pr' => 'required',
        ];

        $validatedData = $request->validate($rules);

        HargaPodcastRoom::where('id', 1)->update($validatedData);

        return redirect('/harga_peredam')->with('success', 'Harga Podcast Room BERHASIL di UPDATE');
    }

    public function hargaMusicStudio(Request $request)
    {
        $rules = [
            'gypsum_standard_ms' => 'required',
            'gypsum_medium_ms' => 'required',
            'gypsum_high_ms' => 'required',
            'panel_standard_ms' => 'required',
            'panel_medium_ms' => 'required',
            'panel_high_ms' => 'required',
            'panel_deluxe_ms' => 'required',
        ];

        $validatedData = $request->validate($rules);

        HargaMusicStudio::where('id', 1)->update($validatedData);

        return redirect('/harga_peredam')->with('success', 'Harga Music Studio BERHASIL di UPDATE');
    }

    public function hargaKaraokeRoom(Request $request)
    {
        $rules = [
            'gypsum_standard_kr' => 'required',
            'gypsum_medium_kr' => 'required',
            'gypsum_high_kr' => 'required',
            'panel_standard_kr' => 'required',
            'panel_medium_kr' => 'required',
            'panel_high_kr' => 'required',
            'panel_deluxe_kr' => 'required',
        ];

        $validatedData = $request->validate($rules);

        HargaKaraokeRoom::where('id', 1)->update($validatedData);

        return redirect('/harga_peredam')->with('success', 'Harga Karaoke Room BERHASIL di UPDATE');
    }

    public function hargaGamingRoom(Request $request)
    {
        $rules = [
            'gypsum_standard_gr' => 'required',
            'gypsum_medium_gr' => 'required',
            'gypsum_high_gr' => 'required',
            'panel_standard_gr' => 'required',
            'panel_medium_gr' => 'required',
            'panel_high_gr' => 'required',
            'panel_deluxe_gr' => 'required',
        ];

        $validatedData = $request->validate($rules);

        HargaGamingRoom::where('id', 1)->update($validatedData);

        return redirect('/harga_peredam')->with('success', 'Harga Gaming Room BERHASIL di UPDATE');
    }
}
