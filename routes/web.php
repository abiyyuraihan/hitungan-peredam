<?php

use App\Http\Controllers\DiffuserBasstrapController;
use App\Http\Controllers\GamingRoom;
use App\Http\Controllers\GrPenawaranEns;
use App\Http\Controllers\GrPenawaranEs;
use App\Http\Controllers\GrPenawaranLs;
use App\Http\Controllers\HargaListrikController;
use App\Http\Controllers\HargaPeredamController;
use App\Http\Controllers\HargaPintuPeredamController;
use App\Http\Controllers\KaraokeRoom;
use App\Http\Controllers\KrPenawaranEns;
use App\Http\Controllers\KrPenawaranEs;
use App\Http\Controllers\KrPenawaranLs;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\MeetingRoom;
use App\Http\Controllers\MrPenawaranEns;
use App\Http\Controllers\MrPenawaranEs;
use App\Http\Controllers\MrPenawaranLs;
use App\Http\Controllers\MsPenawaranEns;
use App\Http\Controllers\MsPenawaranEs;
use App\Http\Controllers\MsPenawaranLs;
use App\Http\Controllers\MsPenawaranO;
use App\Http\Controllers\MsPenawaranOE;
use App\Http\Controllers\MusicStudio;
use App\Http\Controllers\PekerjaanLantaiController;
use App\Http\Controllers\PenawaranAdmin;
use App\Http\Controllers\PodcastRoom;
use App\Http\Controllers\PrPenawaranEns;
use App\Http\Controllers\PrPenawaranEs;
use App\Http\Controllers\PrPenawaranLs;
use App\Http\Controllers\RegisterAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('fungsi_ruangan');
})->name('login');

// Register Admin
Route::get('/register_admin', [RegisterAdminController::class, 'index']);
Route::post('/register_admin', [RegisterAdminController::class, 'store']);

// Login admin
Route::get('/login_admin', [LoginAdminController::class, 'index']);
Route::post('/login_admin', [LoginAdminController::class, 'authenticate']);
Route::post('/logout_admin', [LoginAdminController::class, 'logout']);

//contact us
Route::get('/min_kontakt01654', function (){
    return view('admin.contact_us');
});

//Bank Harga
Route::get('/harga_peredam', [HargaPeredamController::class, 'index'])->middleware('auth:webadmin');
Route::post('/harga_peredam@jasaPeredamDindingPlafon', [HargaPeredamController::class, 'jasaPeredamDindingPlafon']);
Route::post('/harga_peredam@hargaMeetingRoom', [HargaPeredamController::class, 'hargaMeetingRoom']);
Route::post('/harga_peredam@hargaPodcastRoom', [HargaPeredamController::class, 'hargaPodcastRoom']);
Route::post('/harga_peredam@hargaMusicStudio', [HargaPeredamController::class, 'hargaMusicStudio']);
Route::post('/harga_peredam@hargaKaraokeRoom', [HargaPeredamController::class, 'hargaKaraokeRoom']);
Route::post('/harga_peredam@hargaGamingRoom', [HargaPeredamController::class, 'hargaGamingRoom']);

Route::get('/pintu_peredam', [HargaPintuPeredamController::class, 'index'])->middleware('auth:webadmin');
Route::post('/pintu_peredam@pintu', [HargaPintuPeredamController::class, 'pintu']);
Route::post('/pintu_peredam@jendela', [HargaPintuPeredamController::class, 'jendela']);

Route::get('/listrik', [HargaListrikController::class, 'index'])->middleware('auth:webadmin');
Route::post('/listrik@hargaListrik', [HargaListrikController::class, 'hargaListrik']);

Route::get('/pekerjaan_lantai', [PekerjaanLantaiController::class, 'index'])->middleware('auth:webadmin');
Route::post('/pekerjaan_lantai@pekerjaanLantai', [PekerjaanLantaiController::class, 'pekerjaanLantai']);

//Penawaran Admin
Route::get('/AdminPenawaran', [PenawaranAdmin::class, 'index'])->middleware('auth:webadmin');

//fungsi ruangan
Route::get('/ruang_meeting', function (){
    return view('dinding_ruang_meeting', []);
});
Route::get('/ruang_podcast', function (){
    return view('dinding_ruang_podcast', []);
});
Route::get('/ruang_musicstudio', function (){
    return view('dinding_ruang_musicstudio', []);
});
Route::get('/ruang_karaoke', function (){
    return view('dinding_ruang_karaoke', []);
});
Route::get('/ruang_gamingroom', function (){
    return view('dinding_ruang_gamingroom', []);
});

Route::get('/coming_soon', function () {
    return view('coming_soon', []);
});

//Meeting Room
//Penawaran Empat Sisi
Route::get('/mr_es', [MeetingRoom::class, 'meetingRoomEmpatSisi']);
//Gypsum Standard
Route::get('/mr_penawaran_es_gs', [MrPenawaranEs::class, 'penawaranGypsumStandard']);
Route::post('/mr_penawaran_es_gs@store', [MrPenawaranEs::class, 'store']);
Route::get('/mr_penawaran_es_gs/{p_es_mr:id}', [MrPenawaranEs::class, 'showGs']);
//Gypsum Medium
Route::get('/mr_penawaran_es_gm', [MrPenawaranEs::class, 'penawaranGypsumMedium']);
Route::post('/mr_penawaran_es_gm@store', [MrPenawaranEs::class, 'store']);
Route::get('/mr_penawaran_es_gm/{p_es_mr:id}', [MrPenawaranEs::class, 'showGm']);
// Panel Akustik Standard
Route::get('/mr_penawaran_es_as', [MrPenawaranEs::class, 'penawaranAkustikStandard']);
Route::post('/mr_penawaran_es_as@store', [MrPenawaranEs::class, 'store']);
Route::get('/mr_penawaran_es_as/{p_es_mr:id}', [MrPenawaranEs::class, 'showAs']);
// Panel Akustik Medium
Route::get('/mr_penawaran_es_am', [MrPenawaranEs::class, 'penawaranAkustikMedium']);
Route::post('/mr_penawaran_es_am@store', [MrPenawaranEs::class, 'store']);
Route::get('/mr_penawaran_es_am/{p_es_mr:id}', [MrPenawaranEs::class, 'showAm']);
// Panel Akustik High
Route::get('/mr_penawaran_es_ah', [MrPenawaranEs::class, 'penawaranAkustikHigh']);
Route::post('/mr_penawaran_es_ah@store', [MrPenawaranEs::class, 'store']);
Route::get('/mr_penawaran_es_ah/{p_es_mr:id}', [MrPenawaranEs::class, 'showAh']);

//Penawaran Lima Sisi
Route::get('/mr_ls', [MeetingRoom::class, 'meetingRoomLimaSisi']);
//Gypsum Standard
Route::get('/mr_penawaran_ls_gs', [MrPenawaranLs::class, 'penawaranGypsumStandard']);
Route::post('/mr_penawaran_ls_gs@store', [MrPenawaranLs::class, 'store']);
Route::get('/mr_penawaran_ls_gs/{p_ls_mr:id}', [MrPenawaranLs::class, 'showGs']);
//Gypsum Medium
Route::get('/mr_penawaran_ls_gm', [MrPenawaranLs::class, 'penawaranGypsumMedium']);
Route::post('/mr_penawaran_ls_gm@store', [MrPenawaranLs::class, 'store']);
Route::get('/mr_penawaran_ls_gm/{p_ls_mr:id}', [MrPenawaranLs::class, 'showGm']);
// Panel Akustik Standard
Route::get('/mr_penawaran_ls_as', [MrPenawaranLs::class, 'penawaranAkustikStandard']);
Route::post('/mr_penawaran_ls_as@store', [MrPenawaranLs::class, 'store']);
Route::get('/mr_penawaran_ls_as/{p_ls_mr:id}', [MrPenawaranLs::class, 'showAs']);
// Panel Akustik Medium
Route::get('/mr_penawaran_ls_am', [MrPenawaranLs::class, 'penawaranAkustikMedium']);
Route::post('/mr_penawaran_ls_am@store', [MrPenawaranLs::class, 'store']);
Route::get('/mr_penawaran_ls_am/{p_ls_mr:id}', [MrPenawaranLs::class, 'showAm']);
// Panel Akustik High
Route::get('/mr_penawaran_ls_ah', [MrPenawaranLs::class, 'penawaranAkustikHigh']);
Route::post('/mr_penawaran_ls_ah@store', [MrPenawaranLs::class, 'store']);
Route::get('/mr_penawaran_ls_ah/{p_ls_mr:id}', [MrPenawaranLs::class, 'showAh']);

//Penawaran Enam Sisi
Route::get('/mr_ens', [MeetingRoom::class, 'meetingRoomEnamSisi']);
//Gypsum Standard
Route::get('/mr_penawaran_ens_gs', [MrPenawaranEns::class, 'penawaranGypsumStandard']);
Route::post('/mr_penawaran_ens_gs@store', [MrPenawaranEns::class, 'store']);
Route::get('/mr_penawaran_ens_gs/{p_ens_mr:id}', [MrPenawaranEns::class, 'showGs']);
//Gypsum Medium
Route::get('/mr_penawaran_ens_gm', [MrPenawaranEns::class, 'penawaranGypsumMedium']);
Route::post('/mr_penawaran_ens_gm@store', [MrPenawaranEns::class, 'store']);
Route::get('/mr_penawaran_ens_gm/{p_ens_mr:id}', [MrPenawaranEns::class, 'showGm']);
// Panel Akustik Standard
Route::get('/mr_penawaran_ens_as', [MrPenawaranEns::class, 'penawaranAkustikStandard']);
Route::post('/mr_penawaran_ens_as@store', [MrPenawaranEns::class, 'store']);
Route::get('/mr_penawaran_ens_as/{p_ens_mr:id}', [MrPenawaranEns::class, 'showAs']);
// Panel Akustik Medium
Route::get('/mr_penawaran_ens_am', [MrPenawaranEns::class, 'penawaranAkustikMedium']);
Route::post('/mr_penawaran_ens_am@store', [MrPenawaranEns::class, 'store']);
Route::get('/mr_penawaran_ens_am/{p_ens_mr:id}', [MrPenawaranEns::class, 'showAm']);
// Panel Akustik High
Route::get('/mr_penawaran_ens_ah', [MrPenawaranEns::class, 'penawaranAkustikHigh']);
Route::post('/mr_penawaran_ens_ah@store', [MrPenawaranEns::class, 'store']);
Route::get('/mr_penawaran_ens_ah/{p_ens_mr:id}', [MrPenawaranEns::class, 'showAh']);
//End Meeting Room

//Podcast Room
//Penawaran Empat Sisi
Route::get('/pr_es', [PodcastRoom::class, 'podcastRoomEmpatSisi']);
//Gypsum Standard
Route::get('/pr_penawaran_es_gs', [PrPenawaranEs::class, 'penawaranGypsumStandard']);
Route::post('/pr_penawaran_es_gs@store', [PrPenawaranEs::class, 'store']);
Route::get('/pr_penawaran_es_gs/{p_es_pr:id}', [PrPenawaranEs::class, 'showGs']);
//Gypsum Medium
Route::get('/pr_penawaran_es_gm', [PrPenawaranEs::class, 'penawaranGypsumMedium']);
Route::post('/pr_penawaran_es_gm@store', [PrPenawaranEs::class, 'store']);
Route::get('/pr_penawaran_es_gm/{p_es_pr:id}', [PrPenawaranEs::class, 'showGm']);
// Panel Akustik Standard
Route::get('/pr_penawaran_es_as', [PrPenawaranEs::class, 'penawaranAkustikStandard']);
Route::post('/pr_penawaran_es_as@store', [PrPenawaranEs::class, 'store']);
Route::get('/pr_penawaran_es_as/{p_es_pr:id}', [PrPenawaranEs::class, 'showAs']);
// Panel Akustik Medium
Route::get('/pr_penawaran_es_am', [PrPenawaranEs::class, 'penawaranAkustikMedium']);
Route::post('/pr_penawaran_es_am@store', [PrPenawaranEs::class, 'store']);
Route::get('/pr_penawaran_es_am/{p_es_pr:id}', [PrPenawaranEs::class, 'showAm']);
// Panel Akustik High
Route::get('/pr_penawaran_es_ah', [PrPenawaranEs::class, 'penawaranAkustikHigh']);
Route::post('/pr_penawaran_es_ah@store', [PrPenawaranEs::class, 'store']);
Route::get('/pr_penawaran_es_ah/{p_es_pr:id}', [PrPenawaranEs::class, 'showAh']);

//Penawaran Lima Sisi
Route::get('/pr_ls', [PodcastRoom::class, 'podcastRoomLimaSisi']);
//Gypsum Standard
Route::get('/pr_penawaran_ls_gs', [PrPenawaranLs::class, 'penawaranGypsumStandard']);
Route::post('/pr_penawaran_ls_gs@store', [PrPenawaranLs::class, 'store']);
Route::get('/pr_penawaran_ls_gs/{p_ls_pr:id}', [PrPenawaranLs::class, 'showGs']);
//Gypsum Medium
Route::get('/pr_penawaran_ls_gm', [PrPenawaranLs::class, 'penawaranGypsumMedium']);
Route::post('/pr_penawaran_ls_gm@store', [PrPenawaranLs::class, 'store']);
Route::get('/pr_penawaran_ls_gm/{p_ls_pr:id}', [PrPenawaranLs::class, 'showGm']);
// Panel Akustik Standard
Route::get('/pr_penawaran_ls_as', [PrPenawaranLs::class, 'penawaranAkustikStandard']);
Route::post('/pr_penawaran_ls_as@store', [PrPenawaranLs::class, 'store']);
Route::get('/pr_penawaran_ls_as/{p_ls_pr:id}', [PrPenawaranLs::class, 'showAs']);
// Panel Akustik Medium
Route::get('/pr_penawaran_ls_am', [PrPenawaranLs::class, 'penawaranAkustikMedium']);
Route::post('/pr_penawaran_ls_am@store', [PrPenawaranLs::class, 'store']);
Route::get('/pr_penawaran_ls_am/{p_ls_pr:id}', [PrPenawaranLs::class, 'showAm']);
// Panel Akustik High
Route::get('/pr_penawaran_ls_ah', [PrPenawaranLs::class, 'penawaranAkustikHigh']);
Route::post('/pr_penawaran_ls_ah@store', [PrPenawaranLs::class, 'store']);
Route::get('/pr_penawaran_ls_ah/{p_ls_pr:id}', [PrPenawaranLs::class, 'showAh']);

// //Penawaran Enam Sisi
Route::get('/pr_ens', [PodcastRoom::class, 'podcastRoomEnamSisi']);
//Gypsum Standard
Route::get('/pr_penawaran_ens_gs', [PrPenawaranEns::class, 'penawaranGypsumStandard']);
Route::post('/pr_penawaran_ens_gs@store', [PrPenawaranEns::class, 'store']);
Route::get('/pr_penawaran_ens_gs/{p_ens_pr:id}', [PrPenawaranEns::class, 'showGs']);
//Gypsum Medium
Route::get('/pr_penawaran_ens_gm', [PrPenawaranEns::class, 'penawaranGypsumMedium']);
Route::post('/pr_penawaran_ens_gm@store', [PrPenawaranEns::class, 'store']);
Route::get('/pr_penawaran_ens_gm/{p_ens_pr:id}', [PrPenawaranEns::class, 'showGm']);
// Panel Akustik Standard
Route::get('/pr_penawaran_ens_as', [PrPenawaranEns::class, 'penawaranAkustikStandard']);
Route::post('/pr_penawaran_ens_as@store', [PrPenawaranEns::class, 'store']);
Route::get('/pr_penawaran_ens_as/{p_ens_pr:id}', [PrPenawaranEns::class, 'showAs']);
// Panel Akustik Medium
Route::get('/pr_penawaran_ens_am', [PrPenawaranEns::class, 'penawaranAkustikMedium']);
Route::post('/pr_penawaran_ens_am@store', [PrPenawaranEns::class, 'store']);
Route::get('/pr_penawaran_ens_am/{p_ens_pr:id}', [PrPenawaranEns::class, 'showAm']);
// Panel Akustik High
Route::get('/pr_penawaran_ens_ah', [PrPenawaranEns::class, 'penawaranAkustikHigh']);
Route::post('/pr_penawaran_ens_ah@store', [PrPenawaranEns::class, 'store']);
Route::get('/pr_penawaran_ens_ah/{p_ens_pr:id}', [PrPenawaranEns::class, 'showAh']);
//End Podcast Room

//Music Studio
//Penawaran Empat Sisi
Route::get('/ms_es', [MusicStudio::class, 'musicStudioEmpatSisi']);
//Gypsum Standard
Route::get('/ms_penawaran_es_gs', [MsPenawaranEs::class, 'penawaranGypsumStandard']);
Route::post('/ms_penawaran_es_gs@store', [MsPenawaranEs::class, 'store']);
Route::get('/ms_penawaran_es_gs/{p_es_ms:id}', [MsPenawaranEs::class, 'showGs']);
//Gypsum Medium
Route::get('/ms_penawaran_es_gm', [MsPenawaranEs::class, 'penawaranGypsumMedium']);
Route::post('/ms_penawaran_es_gm@store', [MsPenawaranEs::class, 'store']);
Route::get('/ms_penawaran_es_gm/{p_es_ms:id}', [MsPenawaranEs::class, 'showGm']);
//Gypsum High
Route::get('/ms_penawaran_es_gh', [MsPenawaranEs::class, 'penawaranGypsumHigh']);
Route::post('/ms_penawaran_es_gh@store', [MsPenawaranEs::class, 'store']);
Route::get('/ms_penawaran_es_gh/{p_es_ms:id}', [MsPenawaranEs::class, 'showGh']);
// Panel Akustik Standard
Route::get('/ms_penawaran_es_as', [MsPenawaranEs::class, 'penawaranAkustikStandard']);
Route::post('/ms_penawaran_es_as@store', [MsPenawaranEs::class, 'store']);
Route::get('/ms_penawaran_es_as/{p_es_ms:id}', [MsPenawaranEs::class, 'showAs']);
// Panel Akustik Medium
Route::get('/ms_penawaran_es_am', [MsPenawaranEs::class, 'penawaranAkustikMedium']);
Route::post('/ms_penawaran_es_am@store', [MsPenawaranEs::class, 'store']);
Route::get('/ms_penawaran_es_am/{p_es_ms:id}', [MsPenawaranEs::class, 'showAm']);
// Panel Akustik High
Route::get('/ms_penawaran_es_ah', [MsPenawaranEs::class, 'penawaranAkustikHigh']);
Route::post('/ms_penawaran_es_ah@store', [MsPenawaranEs::class, 'store']);
Route::get('/ms_penawaran_es_ah/{p_es_ms:id}', [MsPenawaranEs::class, 'showAh']);
// Panel Akustik Deluxe
Route::get('/ms_penawaran_es_ad', [MsPenawaranEs::class, 'penawaranAkustikDeluxe']);
Route::post('/ms_penawaran_es_ad@store', [MsPenawaranEs::class, 'store']);
Route::get('/ms_penawaran_es_ad/{p_es_ms:id}', [MsPenawaranEs::class, 'showAd']);

//Penawaran Lima Sisi
Route::get('/ms_ls', [MusicStudio::class, 'musicStudioLimaSisi']);
//Gypsum Standard
Route::get('/ms_penawaran_ls_gs', [MsPenawaranLs::class, 'penawaranGypsumStandard']);
Route::post('/ms_penawaran_ls_gs@store', [MsPenawaranLs::class, 'store']);
Route::get('/ms_penawaran_ls_gs/{p_ls_ms:id}', [MsPenawaranLs::class, 'showGs']);
//Gypsum Medium
Route::get('/ms_penawaran_ls_gm', [MsPenawaranLs::class, 'penawaranGypsumMedium']);
Route::post('/ms_penawaran_ls_gm@store', [MsPenawaranLs::class, 'store']);
Route::get('/ms_penawaran_ls_gm/{p_ls_ms:id}', [MsPenawaranLs::class, 'showGm']);
//Gypsum High
Route::get('/ms_penawaran_ls_gh', [MsPenawaranLs::class, 'penawaranGypsumHigh']);
Route::post('/ms_penawaran_ls_gh@store', [MsPenawaranLs::class, 'store']);
Route::get('/ms_penawaran_ls_gh/{p_ls_ms:id}', [MsPenawaranLs::class, 'showGh']);
// Panel Akustik Standard
Route::get('/ms_penawaran_ls_as', [MsPenawaranLs::class, 'penawaranAkustikStandard']);
Route::post('/ms_penawaran_ls_as@store', [MsPenawaranLs::class, 'store']);
Route::get('/ms_penawaran_ls_as/{p_ls_ms:id}', [MsPenawaranLs::class, 'showAs']);
// Panel Akustik Medium
Route::get('/ms_penawaran_ls_am', [MsPenawaranLs::class, 'penawaranAkustikMedium']);
Route::post('/ms_penawaran_ls_am@store', [MsPenawaranLs::class, 'store']);
Route::get('/ms_penawaran_ls_am/{p_ls_ms:id}', [MsPenawaranLs::class, 'showAm']);
// Panel Akustik High
Route::get('/ms_penawaran_ls_ah', [MsPenawaranLs::class, 'penawaranAkustikHigh']);
Route::post('/ms_penawaran_ls_ah@store', [MsPenawaranLs::class, 'store']);
Route::get('/ms_penawaran_ls_ah/{p_ls_ms:id}', [MsPenawaranLs::class, 'showAh']);
// Panel Akustik Deluxe
Route::get('/ms_penawaran_ls_ad', [MsPenawaranLs::class, 'penawaranAkustikDeluxe']);
Route::post('/ms_penawaran_ls_ad@store', [MsPenawaranLs::class, 'store']);
Route::get('/ms_penawaran_ls_ad/{p_ls_ms:id}', [MsPenawaranLs::class, 'showAd']);

//Penawaran Enam Sisi
Route::get('/ms_ens', [MusicStudio::class, 'musicStudioEnamSisi']);
//Gypsum Standard
Route::get('/ms_penawaran_ens_gs', [MsPenawaranEns::class, 'penawaranGypsumStandard']);
Route::post('/ms_penawaran_ens_gs@store', [MsPenawaranEns::class, 'store']);
Route::get('/ms_penawaran_ens_gs/{p_ens_ms:id}', [MsPenawaranEns::class, 'showGs']);
//Gypsum Medium
Route::get('/ms_penawaran_ens_gm', [MsPenawaranEns::class, 'penawaranGypsumMedium']);
Route::post('/ms_penawaran_ens_gm@store', [MsPenawaranEns::class, 'store']);
Route::get('/ms_penawaran_ens_gm/{p_ens_ms:id}', [MsPenawaranEns::class, 'showGm']);
//Gypsum High
Route::get('/ms_penawaran_ens_gh', [MsPenawaranEns::class, 'penawaranGypsumHigh']);
Route::post('/ms_penawaran_ens_gh@store', [MsPenawaranEns::class, 'store']);
Route::get('/ms_penawaran_ens_gh/{p_ens_ms:id}', [MsPenawaranEns::class, 'showGh']);
// Panel Akustik Standard
Route::get('/ms_penawaran_ens_as', [MsPenawaranEns::class, 'penawaranAkustikStandard']);
Route::post('/ms_penawaran_ens_as@store', [MsPenawaranEns::class, 'store']);
Route::get('/ms_penawaran_ens_as/{p_ens_ms:id}', [MsPenawaranEns::class, 'showAs']);
// Panel Akustik Medium
Route::get('/ms_penawaran_ens_am', [MsPenawaranEns::class, 'penawaranAkustikMedium']);
Route::post('/ms_penawaran_ens_am@store', [MsPenawaranEns::class, 'store']);
Route::get('/ms_penawaran_ens_am/{p_ens_ms:id}', [MsPenawaranEns::class, 'showAm']);
// Panel Akustik High
Route::get('/ms_penawaran_ens_ah', [MsPenawaranEns::class, 'penawaranAkustikHigh']);
Route::post('/ms_penawaran_ens_ah@store', [MsPenawaranEns::class, 'store']);
Route::get('/ms_penawaran_ens_ah/{p_ens_ms:id}', [MsPenawaranEns::class, 'showAh']);
// Panel Akustik Deluxe
Route::get('/ms_penawaran_ens_ad', [MsPenawaranEns::class, 'penawaranAkustikDeluxe']);
Route::post('/ms_penawaran_ens_ad@store', [MsPenawaranEns::class, 'store']);
Route::get('/ms_penawaran_ens_ad/{p_ens_ms:id}', [MsPenawaranEns::class, 'showAd']);

//Penawaran Operator
Route::get('/ms_o', [MusicStudio::class, 'musicStudioOperator']);
//Gypsum Standard
Route::get('/ms_penawaran_o_gs', [MsPenawaranO::class, 'penawaranGypsumStandard']);
Route::post('/ms_penawaran_o_gs@store', [MsPenawaranO::class, 'store']);
Route::get('/ms_penawaran_o_gs/{p_o_ms:id}', [MsPenawaranO::class, 'showGs']);
//Gypsum Medium
Route::get('/ms_penawaran_o_gm', [MsPenawaranO::class, 'penawaranGypsumMedium']);
Route::post('/ms_penawaran_o_gm@store', [MsPenawaranO::class, 'store']);
Route::get('/ms_penawaran_o_gm/{p_o_ms:id}', [MsPenawaranO::class, 'showGm']);
//Gypsum High
Route::get('/ms_penawaran_o_gh', [MsPenawaranO::class, 'penawaranGypsumHigh']);
Route::post('/ms_penawaran_o_gh@store', [MsPenawaranO::class, 'store']);
Route::get('/ms_penawaran_o_gh/{p_o_ms:id}', [MsPenawaranO::class, 'showGh']);
// Panel Akustik Standard
Route::get('/ms_penawaran_o_as', [MsPenawaranO::class, 'penawaranAkustikStandard']);
Route::post('/ms_penawaran_o_as@store', [MsPenawaranO::class, 'store']);
Route::get('/ms_penawaran_o_as/{p_o_ms:id}', [MsPenawaranO::class, 'showAs']);
// Panel Akustik Medium
Route::get('/ms_penawaran_o_am', [MsPenawaranO::class, 'penawaranAkustikMedium']);
Route::post('/ms_penawaran_o_am@store', [MsPenawaranO::class, 'store']);
Route::get('/ms_penawaran_o_am/{p_o_ms:id}', [MsPenawaranO::class, 'showAm']);
// Panel Akustik High
Route::get('/ms_penawaran_o_ah', [MsPenawaranO::class, 'penawaranAkustikHigh']);
Route::post('/ms_penawaran_o_ah@store', [MsPenawaranO::class, 'store']);
Route::get('/ms_penawaran_o_ah/{p_o_ms:id}', [MsPenawaranO::class, 'showAh']);
// Panel Akustik Deluxe
Route::get('/ms_penawaran_o_ad', [MsPenawaranO::class, 'penawaranAkustikDeluxe']);
Route::post('/ms_penawaran_o_ad@store', [MsPenawaranO::class, 'store']);
Route::get('/ms_penawaran_o_ad/{p_o_ms:id}', [MsPenawaranO::class, 'showAd']);

//Penawaran Operator
Route::get('/ms_o_e', [MusicStudio::class, 'musicStudioOperatorEntrance']);
//Gypsum Standard
Route::get('/ms_penawaran_o_e_gs', [MsPenawaranOE::class, 'penawaranGypsumStandard']);
Route::post('/ms_penawaran_o_e_gs@store', [MsPenawaranOE::class, 'store']);
Route::get('/ms_penawaran_o_e_gs/{p_o_e_ms:id}', [MsPenawaranOE::class, 'showGs']);
//Gypsum Medium
Route::get('/ms_penawaran_o_e_gm', [MsPenawaranOE::class, 'penawaranGypsumMedium']);
Route::post('/ms_penawaran_o_e_gm@store', [MsPenawaranOE::class, 'store']);
Route::get('/ms_penawaran_o_e_gm/{p_o_e_ms:id}', [MsPenawaranOE::class, 'showGm']);
//Gypsum High
Route::get('/ms_penawaran_o_e_gh', [MsPenawaranOE::class, 'penawaranGypsumHigh']);
Route::post('/ms_penawaran_o_e_gh@store', [MsPenawaranOE::class, 'store']);
Route::get('/ms_penawaran_o_e_gh/{p_o_e_ms:id}', [MsPenawaranOE::class, 'showGh']);
// Panel Akustik Standard
Route::get('/ms_penawaran_o_e_as', [MsPenawaranOE::class, 'penawaranAkustikStandard']);
Route::post('/ms_penawaran_o_e_as@store', [MsPenawaranOE::class, 'store']);
Route::get('/ms_penawaran_o_e_as/{p_o_e_ms:id}', [MsPenawaranOE::class, 'showAs']);
// Panel Akustik Medium
Route::get('/ms_penawaran_o_e_am', [MsPenawaranOE::class, 'penawaranAkustikMedium']);
Route::post('/ms_penawaran_o_e_am@store', [MsPenawaranOE::class, 'store']);
Route::get('/ms_penawaran_o_e_am/{p_o_e_ms:id}', [MsPenawaranOE::class, 'showAm']);
// Panel Akustik High
Route::get('/ms_penawaran_o_e_ah', [MsPenawaranOE::class, 'penawaranAkustikHigh']);
Route::post('/ms_penawaran_o_e_ah@store', [MsPenawaranOE::class, 'store']);
Route::get('/ms_penawaran_o_e_ah/{p_o_e_ms:id}', [MsPenawaranOE::class, 'showAh']);
// Panel Akustik Deluxe
Route::get('/ms_penawaran_o_e_ad', [MsPenawaranOE::class, 'penawaranAkustikDeluxe']);
Route::post('/ms_penawaran_o_e_ad@store', [MsPenawaranOE::class, 'store']);
Route::get('/ms_penawaran_o_e_ad/{p_o_e_ms:id}', [MsPenawaranOE::class, 'showAd']);
//End Music Studio

//Karaoke Room
//Penawaran Empat Sisi
Route::get('/kr_es', [KaraokeRoom::class, 'karaokeRoomEmpatSisi']);
//Gypsum Standard
Route::get('/kr_penawaran_es_gs', [KrPenawaranEs::class, 'penawaranGypsumStandard']);
Route::post('/kr_penawaran_es_gs@store', [KrPenawaranEs::class, 'store']);
Route::get('/kr_penawaran_es_gs/{p_es_kr:id}', [KrPenawaranEs::class, 'showGs']);
//Gypsum Medium
Route::get('/kr_penawaran_es_gm', [KrPenawaranEs::class, 'penawaranGypsumMedium']);
Route::post('/kr_penawaran_es_gm@store', [KrPenawaranEs::class, 'store']);
Route::get('/kr_penawaran_es_gm/{p_es_kr:id}', [KrPenawaranEs::class, 'showGm']);
//Gypsum High
Route::get('/kr_penawaran_es_gh', [KrPenawaranEs::class, 'penawaranGypsumHigh']);
Route::post('/kr_penawaran_es_gh@store', [KrPenawaranEs::class, 'store']);
Route::get('/kr_penawaran_es_gh/{p_es_kr:id}', [KrPenawaranEs::class, 'showGh']);
// Panel Akustik Standard
Route::get('/kr_penawaran_es_as', [KrPenawaranEs::class, 'penawaranAkustikStandard']);
Route::post('/kr_penawaran_es_as@store', [KrPenawaranEs::class, 'store']);
Route::get('/kr_penawaran_es_as/{p_es_kr:id}', [KrPenawaranEs::class, 'showAs']);
// Panel Akustik Medium
Route::get('/kr_penawaran_es_am', [KrPenawaranEs::class, 'penawaranAkustikMedium']);
Route::post('/kr_penawaran_es_am@store', [KrPenawaranEs::class, 'store']);
Route::get('/kr_penawaran_es_am/{p_es_kr:id}', [KrPenawaranEs::class, 'showAm']);
// Panel Akustik High
Route::get('/kr_penawaran_es_ah', [KrPenawaranEs::class, 'penawaranAkustikHigh']);
Route::post('/kr_penawaran_es_ah@store', [KrPenawaranEs::class, 'store']);
Route::get('/kr_penawaran_es_ah/{p_es_kr:id}', [KrPenawaranEs::class, 'showAh']);
// Panel Akustik Deluxe
Route::get('/kr_penawaran_es_ad', [KrPenawaranEs::class, 'penawaranAkustikDeluxe']);
Route::post('/kr_penawaran_es_ad@store', [KrPenawaranEs::class, 'store']);
Route::get('/kr_penawaran_es_ad/{p_es_kr:id}', [KrPenawaranEs::class, 'showAd']);

//Penawaran Lima Sisi
Route::get('/kr_ls', [KaraokeRoom::class, 'karaokeRoomLimaSisi']);
//Gypsum Standard
Route::get('/kr_penawaran_ls_gs', [KrPenawaranLs::class, 'penawaranGypsumStandard']);
Route::post('/kr_penawaran_ls_gs@store', [KrPenawaranLs::class, 'store']);
Route::get('/kr_penawaran_ls_gs/{p_ls_kr:id}', [KrPenawaranLs::class, 'showGs']);
//Gypsum Medium
Route::get('/kr_penawaran_ls_gm', [KrPenawaranLs::class, 'penawaranGypsumMedium']);
Route::post('/kr_penawaran_ls_gm@store', [KrPenawaranLs::class, 'store']);
Route::get('/kr_penawaran_ls_gm/{p_ls_kr:id}', [KrPenawaranLs::class, 'showGm']);
//Gypsum High
Route::get('/kr_penawaran_ls_gh', [KrPenawaranLs::class, 'penawaranGypsumHigh']);
Route::post('/kr_penawaran_ls_gh@store', [KrPenawaranLs::class, 'store']);
Route::get('/kr_penawaran_ls_gh/{p_ls_kr:id}', [KrPenawaranLs::class, 'showGh']);
// Panel Akustik Standard
Route::get('/kr_penawaran_ls_as', [KrPenawaranLs::class, 'penawaranAkustikStandard']);
Route::post('/kr_penawaran_ls_as@store', [KrPenawaranLs::class, 'store']);
Route::get('/kr_penawaran_ls_as/{p_ls_kr:id}', [KrPenawaranLs::class, 'showAs']);
// Panel Akustik Medium
Route::get('/kr_penawaran_ls_am', [KrPenawaranLs::class, 'penawaranAkustikMedium']);
Route::post('/kr_penawaran_ls_am@store', [KrPenawaranLs::class, 'store']);
Route::get('/kr_penawaran_ls_am/{p_ls_kr:id}', [KrPenawaranLs::class, 'showAm']);
// Panel Akustik High
Route::get('/kr_penawaran_ls_ah', [KrPenawaranLs::class, 'penawaranAkustikHigh']);
Route::post('/kr_penawaran_ls_ah@store', [KrPenawaranLs::class, 'store']);
Route::get('/kr_penawaran_ls_ah/{p_ls_kr:id}', [KrPenawaranLs::class, 'showAh']);
// Panel Akustik Deluxe
Route::get('/kr_penawaran_ls_ad', [KrPenawaranLs::class, 'penawaranAkustikDeluxe']);
Route::post('/kr_penawaran_ls_ad@store', [KrPenawaranLs::class, 'store']);
Route::get('/kr_penawaran_ls_ad/{p_ls_kr:id}', [KrPenawaranLs::class, 'showAd']);

//Penawaran Enam Sisi
Route::get('/kr_ens', [KaraokeRoom::class, 'karaokeRoomEnamSisi']);
//Gypsum Standard
Route::get('/kr_penawaran_ens_gs', [KrPenawaranEns::class, 'penawaranGypsumStandard']);
Route::post('/kr_penawaran_ens_gs@store', [KrPenawaranEns::class, 'store']);
Route::get('/kr_penawaran_ens_gs/{p_ens_kr:id}', [KrPenawaranEns::class, 'showGs']);
//Gypsum Medium
Route::get('/kr_penawaran_ens_gm', [KrPenawaranEns::class, 'penawaranGypsumMedium']);
Route::post('/kr_penawaran_ens_gm@store', [KrPenawaranEns::class, 'store']);
Route::get('/kr_penawaran_ens_gm/{p_ens_kr:id}', [KrPenawaranEns::class, 'showGm']);
//Gypsum High
Route::get('/kr_penawaran_ens_gh', [KrPenawaranEns::class, 'penawaranGypsumHigh']);
Route::post('/kr_penawaran_ens_gh@store', [KrPenawaranEns::class, 'store']);
Route::get('/kr_penawaran_ens_gh/{p_ens_kr:id}', [KrPenawaranEns::class, 'showGh']);
// Panel Akustik Standard
Route::get('/kr_penawaran_ens_as', [KrPenawaranEns::class, 'penawaranAkustikStandard']);
Route::post('/kr_penawaran_ens_as@store', [KrPenawaranEns::class, 'store']);
Route::get('/kr_penawaran_ens_as/{p_ens_kr:id}', [KrPenawaranEns::class, 'showAs']);
// Panel Akustik Medium
Route::get('/kr_penawaran_ens_am', [KrPenawaranEns::class, 'penawaranAkustikMedium']);
Route::post('/kr_penawaran_ens_am@store', [KrPenawaranEns::class, 'store']);
Route::get('/kr_penawaran_ens_am/{p_ens_kr:id}', [KrPenawaranEns::class, 'showAm']);
// Panel Akustik High
Route::get('/kr_penawaran_ens_ah', [KrPenawaranEns::class, 'penawaranAkustikHigh']);
Route::post('/kr_penawaran_ens_ah@store', [KrPenawaranEns::class, 'store']);
Route::get('/kr_penawaran_ens_ah/{p_ens_kr:id}', [KrPenawaranEns::class, 'showAh']);
// Panel Akustik Deluxe
Route::get('/kr_penawaran_ens_ad', [KrPenawaranEns::class, 'penawaranAkustikDeluxe']);
Route::post('/kr_penawaran_ens_ad@store', [KrPenawaranEns::class, 'store']);
Route::get('/kr_penawaran_ens_ad/{p_ens_kr:id}', [KrPenawaranEns::class, 'showAd']);

//End Karaoke Room

//Gaming Room
//Penawaran Empat Sisi
Route::get('/gr_es', [GamingRoom::class, 'gamingRoomEmpatSisi']);
//Gypsum Standard
Route::get('/gr_penawaran_es_gs', [GrPenawaranEs::class, 'penawaranGypsumStandard']);
Route::post('/gr_penawaran_es_gs@store', [GrPenawaranEs::class, 'store']);
Route::get('/gr_penawaran_es_gs/{p_es_gr:id}', [GrPenawaranEs::class, 'showGs']);
//Gypsum Medium
Route::get('/gr_penawaran_es_gm', [GrPenawaranEs::class, 'penawaranGypsumMedium']);
Route::post('/gr_penawaran_es_gm@store', [GrPenawaranEs::class, 'store']);
Route::get('/gr_penawaran_es_gm/{p_es_gr:id}', [GrPenawaranEs::class, 'showGm']);
//Gypsum High
Route::get('/gr_penawaran_es_gh', [GrPenawaranEs::class, 'penawaranGypsumHigh']);
Route::post('/gr_penawaran_es_gh@store', [GrPenawaranEs::class, 'store']);
Route::get('/gr_penawaran_es_gh/{p_es_gr:id}', [GrPenawaranEs::class, 'showGh']);
// Panel Akustik Standard
Route::get('/gr_penawaran_es_as', [GrPenawaranEs::class, 'penawaranAkustikStandard']);
Route::post('/gr_penawaran_es_as@store', [GrPenawaranEs::class, 'store']);
Route::get('/gr_penawaran_es_as/{p_es_gr:id}', [GrPenawaranEs::class, 'showAs']);
// Panel Akustik Medium
Route::get('/gr_penawaran_es_am', [GrPenawaranEs::class, 'penawaranAkustikMedium']);
Route::post('/gr_penawaran_es_am@store', [GrPenawaranEs::class, 'store']);
Route::get('/gr_penawaran_es_am/{p_es_gr:id}', [GrPenawaranEs::class, 'showAm']);
// Panel Akustik High
Route::get('/gr_penawaran_es_ah', [GrPenawaranEs::class, 'penawaranAkustikHigh']);
Route::post('/gr_penawaran_es_ah@store', [GrPenawaranEs::class, 'store']);
Route::get('/gr_penawaran_es_ah/{p_es_gr:id}', [GrPenawaranEs::class, 'showAh']);
// Panel Akustik Deluxe
Route::get('/gr_penawaran_es_ad', [GrPenawaranEs::class, 'penawaranAkustikDeluxe']);
Route::post('/gr_penawaran_es_ad@store', [GrPenawaranEs::class, 'store']);
Route::get('/gr_penawaran_es_ad/{p_es_gr:id}', [GrPenawaranEs::class, 'showAd']);

//Penawaran Lima Sisi
Route::get('/gr_ls', [GamingRoom::class, 'gamingRoomLimaSisi']);
//Gypsum Standard
Route::get('/gr_penawaran_ls_gs', [GrPenawaranLs::class, 'penawaranGypsumStandard']);
Route::post('/gr_penawaran_ls_gs@store', [GrPenawaranLs::class, 'store']);
Route::get('/gr_penawaran_ls_gs/{p_ls_gr:id}', [GrPenawaranLs::class, 'showGs']);
//Gypsum Medium
Route::get('/gr_penawaran_ls_gm', [GrPenawaranLs::class, 'penawaranGypsumMedium']);
Route::post('/gr_penawaran_ls_gm@store', [GrPenawaranLs::class, 'store']);
Route::get('/gr_penawaran_ls_gm/{p_ls_gr:id}', [GrPenawaranLs::class, 'showGm']);
//Gypsum High
Route::get('/gr_penawaran_ls_gh', [GrPenawaranLs::class, 'penawaranGypsumHigh']);
Route::post('/gr_penawaran_ls_gh@store', [GrPenawaranLs::class, 'store']);
Route::get('/gr_penawaran_ls_gh/{p_ls_gr:id}', [GrPenawaranLs::class, 'showGh']);
// Panel Akustik Standard
Route::get('/gr_penawaran_ls_as', [GrPenawaranLs::class, 'penawaranAkustikStandard']);
Route::post('/gr_penawaran_ls_as@store', [GrPenawaranLs::class, 'store']);
Route::get('/gr_penawaran_ls_as/{p_ls_gr:id}', [GrPenawaranLs::class, 'showAs']);
// Panel Akustik Medium
Route::get('/gr_penawaran_ls_am', [GrPenawaranLs::class, 'penawaranAkustikMedium']);
Route::post('/gr_penawaran_ls_am@store', [GrPenawaranLs::class, 'store']);
Route::get('/gr_penawaran_ls_am/{p_ls_gr:id}', [GrPenawaranLs::class, 'showAm']);
// Panel Akustik High
Route::get('/gr_penawaran_ls_ah', [GrPenawaranLs::class, 'penawaranAkustikHigh']);
Route::post('/gr_penawaran_ls_ah@store', [GrPenawaranLs::class, 'store']);
Route::get('/gr_penawaran_ls_ah/{p_ls_gr:id}', [GrPenawaranLs::class, 'showAh']);
// Panel Akustik Deluxe
Route::get('/gr_penawaran_ls_ad', [GrPenawaranLs::class, 'penawaranAkustikDeluxe']);
Route::post('/gr_penawaran_ls_ad@store', [GrPenawaranLs::class, 'store']);
Route::get('/gr_penawaran_ls_ad/{p_ls_gr:id}', [GrPenawaranLs::class, 'showAd']);

//Penawaran Enam Sisi
Route::get('/gr_ens', [GamingRoom::class, 'gamingRoomEnamSisi']);
//Gypsum Standard
Route::get('/gr_penawaran_ens_gs', [GrPenawaranEns::class, 'penawaranGypsumStandard']);
Route::post('/gr_penawaran_ens_gs@store', [GrPenawaranEns::class, 'store']);
Route::get('/gr_penawaran_ens_gs/{p_ens_gr:id}', [GrPenawaranEns::class, 'showGs']);
//Gypsum Medium
Route::get('/gr_penawaran_ens_gm', [GrPenawaranEns::class, 'penawaranGypsumMedium']);
Route::post('/gr_penawaran_ens_gm@store', [GrPenawaranEns::class, 'store']);
Route::get('/gr_penawaran_ens_gm/{p_ens_gr:id}', [GrPenawaranEns::class, 'showGm']);
//Gypsum High
Route::get('/gr_penawaran_ens_gh', [GrPenawaranEns::class, 'penawaranGypsumHigh']);
Route::post('/gr_penawaran_ens_gh@store', [GrPenawaranEns::class, 'store']);
Route::get('/gr_penawaran_ens_gh/{p_ens_gr:id}', [GrPenawaranEns::class, 'showGh']);
// Panel Akustik Standard
Route::get('/gr_penawaran_ens_as', [GrPenawaranEns::class, 'penawaranAkustikStandard']);
Route::post('/gr_penawaran_ens_as@store', [GrPenawaranEns::class, 'store']);
Route::get('/gr_penawaran_ens_as/{p_ens_gr:id}', [GrPenawaranEns::class, 'showAs']);
// Panel Akustik Medium
Route::get('/gr_penawaran_ens_am', [GrPenawaranEns::class, 'penawaranAkustikMedium']);
Route::post('/gr_penawaran_ens_am@store', [GrPenawaranEns::class, 'store']);
Route::get('/gr_penawaran_ens_am/{p_ens_gr:id}', [GrPenawaranEns::class, 'showAm']);
// Panel Akustik High
Route::get('/gr_penawaran_ens_ah', [GrPenawaranEns::class, 'penawaranAkustikHigh']);
Route::post('/gr_penawaran_ens_ah@store', [GrPenawaranEns::class, 'store']);
Route::get('/gr_penawaran_ens_ah/{p_ens_gr:id}', [GrPenawaranEns::class, 'showAh']);
// Panel Akustik Deluxe
Route::get('/gr_penawaran_ens_ad', [GrPenawaranEns::class, 'penawaranAkustikDeluxe']);
Route::post('/gr_penawaran_ens_ad@store', [GrPenawaranEns::class, 'store']);
Route::get('/gr_penawaran_ens_ad/{p_ens_gr:id}', [GrPenawaranEns::class, 'showAd']);

// End Gaming Room
