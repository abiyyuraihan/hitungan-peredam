<?php

namespace App\Http\Controllers;

use App\Models\HargaGamingRoom;
use App\Models\HargaListrik;
use App\Models\HargaPintuPeredam;
use App\Models\JasaPeredam;
use Illuminate\Http\Request;

class GamingRoom extends Controller
{
    public function gamingRoomEmpatSisi() {
        return view('gr.empat_sisi.empat_sisi_gamingroom', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }
    public function gamingRoomLimaSisi() {
        return view('gr.lima_sisi.lima_sisi_gamingroom', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }
    public function gamingRoomEnamSisi() {
        return view('gr.enam_sisi.enam_sisi_gamingroom', [
            'gr' => HargaGamingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }
}
