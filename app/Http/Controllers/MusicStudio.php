<?php

namespace App\Http\Controllers;

use App\Models\HargaListrik;
use App\Models\HargaMusicStudio;
use App\Models\HargaPintuPeredam;
use App\Models\JasaPeredam;
use Illuminate\Http\Request;

class MusicStudio extends Controller
{
    public function musicStudioEmpatSisi() {
        return view('ms.empat_sisi.empat_sisi_musicstudio', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function musicStudioLimaSisi() {
        return view('ms.lima_sisi.lima_sisi_musicstudio', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }

    public function musicStudioEnamSisi() {
        return view('ms.enam_sisi.enam_sisi_musicstudio', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }
    public function musicStudioOperator() {
        return view('ms.operator.operator_musicstudio', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }
    public function musicStudioOperatorEntrance() {
        return view('ms.operator_entrance.operator_entrance_musicstudio', [
            'ms' => HargaMusicStudio::latest()->first(),
            'pintuPeredam' => HargaPintuPeredam::latest()->first(),
            'listrik' => HargaListrik::latest()->first(),
            'jasaPeredam' => JasaPeredam::latest()->first(),
        ]);
    }
}
