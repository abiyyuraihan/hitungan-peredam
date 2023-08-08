<?php

namespace App\Http\Controllers;

use App\Models\HargaKaraokeRoom;
use App\Models\HargaListrik;
use App\Models\HargaPintuPeredam;
use App\Models\JasaPeredam;
use Illuminate\Http\Request;

class KaraokeRoom extends Controller
{
    public function karaokeRoomEmpatSisi() {
        return view('kr.empat_sisi.empat_sisi_karaokeroom', [
            'kr' => HargaKaraokeRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }
    public function karaokeRoomLimaSisi() {
        return view('kr.lima_sisi.lima_sisi_karaokeroom', [
            'kr' => HargaKaraokeRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }
    public function karaokeRoomEnamSisi() {
        return view('kr.enam_sisi.enam_sisi_karaokeroom', [
            'kr' => HargaKaraokeRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }
}
