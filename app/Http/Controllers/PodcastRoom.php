<?php

namespace App\Http\Controllers;

use App\Models\HargaListrik;
use App\Models\HargaPintuPeredam;
use App\Models\HargaPodcastRoom;
use App\Models\JasaPeredam;
use Illuminate\Http\Request;

class PodcastRoom extends Controller
{
    public function podcastRoomEmpatSisi() {
        return view('pr.empat_sisi.empat_sisi_podcastroom', [
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function podcastRoomLimaSisi() {
        return view('pr.lima_sisi.lima_sisi_podcastroom', [
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function podcastRoomEnamSisi() {
        return view('pr.enam_sisi.enam_sisi_podcastroom', [
            'pr' => HargaPodcastRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }
}
