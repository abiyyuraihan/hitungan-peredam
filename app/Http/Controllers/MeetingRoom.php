<?php

namespace App\Http\Controllers;

use App\Models\HargaListrik;
use App\Models\HargaMeetingRoom;
use App\Models\HargaPintuPeredam;
use App\Models\JasaPeredam;
use Illuminate\Http\Request;

class MeetingRoom extends Controller
{
    public function meetingRoomEmpatSisi() {
        return view('mr.empat_sisi.empat_sisi_meetingroom', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function meetingRoomLimaSisi() {
        return view('mr.lima_sisi.lima_sisi_meetingroom', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function meetingRoomEnamSisi() {
        return view('mr.enam_sisi.enam_sisi_meetingroom', [
            'mr' => HargaMeetingRoom::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }
}
