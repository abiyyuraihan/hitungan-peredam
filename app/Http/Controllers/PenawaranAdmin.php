<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenawaranEmpatSisiGR;
use App\Models\PenawaranEmpatSisiKR;
use App\Models\PenawaranEmpatSisiMR;
use App\Models\PenawaranEmpatSisiMS;
use App\Models\PenawaranEmpatSisiPR;
use App\Models\PenawaranEnamSisiGR;
use App\Models\PenawaranEnamSisiKR;
use App\Models\PenawaranEnamSisiMR;
use App\Models\PenawaranEnamSisiMS;
use App\Models\PenawaranEnamSisiPR;
use App\Models\PenawaranLimaSisiGR;
use App\Models\PenawaranLimaSisiKR;
use App\Models\PenawaranLimaSisiMR;
use App\Models\PenawaranLimaSisiMS;
use App\Models\PenawaranLimaSisiPR;
use App\Models\PenawaranOEMS;
use App\Models\PenawaranOMS;

class PenawaranAdmin extends Controller
{
    public function index() {
        return view('admin.penawaran_admin', [
            'title' => 'Penawaran',
            //Meeting Room
            //Empat Sisi (Meeting Room)
            'p_es_mr_gs' => PenawaranEmpatSisiMR::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_ES_MR_GS'),
            'p_es_mr_gm' => PenawaranEmpatSisiMR::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_ES_MR_GM'),
            'p_es_mr_as' => PenawaranEmpatSisiMR::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_ES_MR_AS'),
            'p_es_mr_am' => PenawaranEmpatSisiMR::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_ES_MR_AM'),
            'p_es_mr_ah' => PenawaranEmpatSisiMR::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_ES_MR_AH'),

            //Lima Sisi (Meeting Room)
            'p_ls_mr_gs' => PenawaranLimaSisiMR::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_LS_MR_GS'),
            'p_ls_mr_gm' => PenawaranLimaSisiMR::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_LS_MR_GM'),
            'p_ls_mr_as' => PenawaranLimaSisiMR::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_LS_MR_AS'),
            'p_ls_mr_am' => PenawaranLimaSisiMR::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_LS_MR_AM'),
            'p_ls_mr_ah' => PenawaranLimaSisiMR::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_LS_MR_AH'),

            //Enam Sisi (Meeting Room)
            'p_ens_mr_gs' => PenawaranEnamSisiMR::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_ENS_MR_GS'),
            'p_ens_mr_gm' => PenawaranEnamSisiMR::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_ENS_MR_GM'),
            'p_ens_mr_as' => PenawaranEnamSisiMR::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_ENS_MR_AS'),
            'p_ens_mr_am' => PenawaranEnamSisiMR::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_ENS_MR_AM'),
            'p_ens_mr_ah' => PenawaranEnamSisiMR::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_ENS_MR_AH'),
            //End Meeting Room

            //Podcast Room
            //Empat Sisi (Podcast Room)
            'p_es_pr_gs' => PenawaranEmpatSisiPR::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_ES_PR_GS'),
            'p_es_pr_gm' => PenawaranEmpatSisiPR::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_ES_PR_GM'),
            'p_es_pr_as' => PenawaranEmpatSisiPR::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_ES_PR_AS'),
            'p_es_pr_am' => PenawaranEmpatSisiPR::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_ES_PR_AM'),
            'p_es_pr_ah' => PenawaranEmpatSisiPR::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_ES_PR_AH'),

            //Lima Sisi (Podcat Room)
            'p_ls_pr_gs' => PenawaranLimaSisiPR::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_LS_PR_GS'),
            'p_ls_pr_gm' => PenawaranLimaSisiPR::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_LS_PR_GM'),
            'p_ls_pr_as' => PenawaranLimaSisiPR::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_LS_PR_AS'),
            'p_ls_pr_am' => PenawaranLimaSisiPR::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_LS_PR_AM'),
            'p_ls_pr_ah' => PenawaranLimaSisiPR::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_LS_PR_AH'),

            //Enam Sisi (Podcast Room)
            'p_ens_pr_gs' => PenawaranEnamSisiPR::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_ENS_PR_GS'),
            'p_ens_pr_gm' => PenawaranEnamSisiPR::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_ENS_PR_GM'),
            'p_ens_pr_as' => PenawaranEnamSisiPR::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_ENS_PR_AS'),
            'p_ens_pr_am' => PenawaranEnamSisiPR::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_ENS_PR_AM'),
            'p_ens_pr_ah' => PenawaranEnamSisiPR::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_ENS_PR_AH'),
            //End Podcast Room

            //Music Studio
            //Empat Sisi (Music Studio)
            'p_es_ms_gs' => PenawaranEmpatSisiMS::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_ES_MS_GS'),
            'p_es_ms_gm' => PenawaranEmpatSisiMS::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_ES_MS_GM'),
            'p_es_ms_gh' => PenawaranEmpatSisiMS::where('mrType', 'gh')->latest()->paginate(5, ['*'], 'P_ES_MS_GH'),
            'p_es_ms_as' => PenawaranEmpatSisiMS::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_ES_MS_AS'),
            'p_es_ms_am' => PenawaranEmpatSisiMS::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_ES_MS_AM'),
            'p_es_ms_ah' => PenawaranEmpatSisiMS::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_ES_MS_AH'),
            'p_es_ms_ad' => PenawaranEmpatSisiMS::where('mrType', 'ad')->latest()->paginate(5, ['*'], 'P_ES_MS_AD'),

            //Lima Sisi (Music Studio)
            'p_ls_ms_gs' => PenawaranLimaSisiMS::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_LS_MS_GS'),
            'p_ls_ms_gm' => PenawaranLimaSisiMS::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_LS_MS_GM'),
            'p_ls_ms_gh' => PenawaranLimaSisiMS::where('mrType', 'gh')->latest()->paginate(5, ['*'], 'P_LS_MS_GH'),
            'p_ls_ms_as' => PenawaranLimaSisiMS::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_LS_MS_AS'),
            'p_ls_ms_am' => PenawaranLimaSisiMS::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_LS_MS_AM'),
            'p_ls_ms_ah' => PenawaranLimaSisiMS::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_LS_MS_AH'),
            'p_ls_ms_ad' => PenawaranLimaSisiMS::where('mrType', 'ad')->latest()->paginate(5, ['*'], 'P_LS_MS_AD'),

            //Enam Sisi (Music Studio)
            'p_ens_ms_gs' => PenawaranEnamSisiMS::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_ENS_MS_GS'),
            'p_ens_ms_gm' => PenawaranEnamSisiMS::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_ENS_MS_GM'),
            'p_ens_ms_gh' => PenawaranEnamSisiMS::where('mrType', 'gh')->latest()->paginate(5, ['*'], 'P_ENS_MS_GH'),
            'p_ens_ms_as' => PenawaranEnamSisiMS::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_ENS_MS_AS'),
            'p_ens_ms_am' => PenawaranEnamSisiMS::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_ENS_MS_AM'),
            'p_ens_ms_ah' => PenawaranEnamSisiMS::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_ENS_MS_AH'),
            'p_ens_ms_ad' => PenawaranEnamSisiMS::where('mrType', 'ad')->latest()->paginate(5, ['*'], 'P_ENS_MS_AD'),

            //Operator (Music Studio)
            'p_o_ms_gs' => PenawaranOMS::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_O_MS_GS'),
            'p_o_ms_gm' => PenawaranOMS::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_O_MS_GM'),
            'p_o_ms_gh' => PenawaranOMS::where('mrType', 'gh')->latest()->paginate(5, ['*'], 'P_O_MS_GH'),
            'p_o_ms_as' => PenawaranOMS::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_O_MS_AS'),
            'p_o_ms_am' => PenawaranOMS::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_O_MS_AM'),
            'p_o_ms_ah' => PenawaranOMS::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_O_MS_AH'),
            'p_o_ms_ad' => PenawaranOMS::where('mrType', 'ad')->latest()->paginate(5, ['*'], 'P_O_MS_AD'),

            //Operator Entrance (Music Studio)
            'p_o_e_ms_gs' => PenawaranOEMS::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_O_E_MS_GS'),
            'p_o_e_ms_gm' => PenawaranOEMS::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_O_E_MS_GM'),
            'p_o_e_ms_gh' => PenawaranOEMS::where('mrType', 'gh')->latest()->paginate(5, ['*'], 'P_O_E_MS_GH'),
            'p_o_e_ms_as' => PenawaranOEMS::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_O_E_MS_AS'),
            'p_o_e_ms_am' => PenawaranOEMS::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_O_E_MS_AM'),
            'p_o_e_ms_ah' => PenawaranOEMS::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_O_E_MS_AH'),
            'p_o_e_ms_ad' => PenawaranOEMS::where('mrType', 'ad')->latest()->paginate(5, ['*'], 'P_O_E_MS_AD'),
            //End Music Room
            
            //Karaoke Room
            //Empat Sisi (Karaoke Room)
            'p_es_kr_gs' => PenawaranEmpatSisiKR::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_ES_KR_GS'),
            'p_es_kr_gm' => PenawaranEmpatSisiKR::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_ES_KR_GM'),
            'p_es_kr_gh' => PenawaranEmpatSisiKR::where('mrType', 'gh')->latest()->paginate(5, ['*'], 'P_ES_KR_GH'),
            'p_es_kr_as' => PenawaranEmpatSisiKR::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_ES_KR_AS'),
            'p_es_kr_am' => PenawaranEmpatSisiKR::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_ES_KR_AM'),
            'p_es_kr_ah' => PenawaranEmpatSisiKR::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_ES_KR_AH'),
            'p_es_kr_ad' => PenawaranEmpatSisiKR::where('mrType', 'ad')->latest()->paginate(5, ['*'], 'P_ES_KR_AD'),

            //Lima Sisi (Karaoke Room)
            'p_ls_kr_gs' => PenawaranLimaSisiKR::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_LS_KR_GS'),
            'p_ls_kr_gm' => PenawaranLimaSisiKR::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_LS_KR_GM'),
            'p_ls_kr_gh' => PenawaranLimaSisiKR::where('mrType', 'gh')->latest()->paginate(5, ['*'], 'P_LS_KR_GH'),
            'p_ls_kr_as' => PenawaranLimaSisiKR::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_LS_KR_AS'),
            'p_ls_kr_am' => PenawaranLimaSisiKR::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_LS_KR_AM'),
            'p_ls_kr_ah' => PenawaranLimaSisiKR::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_LS_KR_AH'),
            'p_ls_kr_ad' => PenawaranLimaSisiKR::where('mrType', 'ad')->latest()->paginate(5, ['*'], 'P_LS_KR_AD'),

            //Enam Sisi (Karaoke Room)
            'p_ens_kr_gs' => PenawaranEnamSisiKR::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_ENS_KR_GS'),
            'p_ens_kr_gm' => PenawaranEnamSisiKR::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_ENS_KR_GM'),
            'p_ens_kr_gh' => PenawaranEnamSisiKR::where('mrType', 'gh')->latest()->paginate(5, ['*'], 'P_ENS_KR_GH'),
            'p_ens_kr_as' => PenawaranEnamSisiKR::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_ENS_KR_AS'),
            'p_ens_kr_am' => PenawaranEnamSisiKR::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_ENS_KR_AM'),
            'p_ens_kr_ah' => PenawaranEnamSisiKR::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_ENS_KR_AH'),
            'p_ens_kr_ad' => PenawaranEnamSisiKR::where('mrType', 'ad')->latest()->paginate(5, ['*'], 'P_ENS_KR_AD'),
            //End Karaoke Room

            //Gaming Room
            //Empat Sisi (Gaming Room)
            'p_es_gr_gs' => PenawaranEmpatSisiGR::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_ES_GR_GS'),
            'p_es_gr_gm' => PenawaranEmpatSisiGR::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_ES_GR_GM'),
            'p_es_gr_gh' => PenawaranEmpatSisiGR::where('mrType', 'gh')->latest()->paginate(5, ['*'], 'P_ES_GR_GH'),
            'p_es_gr_as' => PenawaranEmpatSisiGR::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_ES_GR_AS'),
            'p_es_gr_am' => PenawaranEmpatSisiGR::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_ES_GR_AM'),
            'p_es_gr_ah' => PenawaranEmpatSisiGR::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_ES_GR_AH'),
            'p_es_gr_ad' => PenawaranEmpatSisiGR::where('mrType', 'ad')->latest()->paginate(5, ['*'], 'P_ES_GR_AD'),

            //Lima Sisi (Gaming Room)
            'p_ls_gr_gs' => PenawaranLimaSisiGR::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_LS_GR_GS'),
            'p_ls_gr_gm' => PenawaranLimaSisiGR::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_LS_GR_GM'),
            'p_ls_gr_gh' => PenawaranLimaSisiGR::where('mrType', 'gh')->latest()->paginate(5, ['*'], 'P_LS_GR_GH'),
            'p_ls_gr_as' => PenawaranLimaSisiGR::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_LS_GR_AS'),
            'p_ls_gr_am' => PenawaranLimaSisiGR::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_LS_GR_AM'),
            'p_ls_gr_ah' => PenawaranLimaSisiGR::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_LS_GR_AH'),
            'p_ls_gr_ad' => PenawaranLimaSisiGR::where('mrType', 'ad')->latest()->paginate(5, ['*'], 'P_LS_GR_AD'),

            //Enam Sisi (Gaming Room)
            'p_ens_gr_gs' => PenawaranEnamSisiGR::where('mrType', 'gs')->latest()->paginate(5, ['*'], 'P_ENS_GR_GS'),
            'p_ens_gr_gm' => PenawaranEnamSisiGR::where('mrType', 'gm')->latest()->paginate(5, ['*'], 'P_ENS_GR_GM'),
            'p_ens_gr_gh' => PenawaranEnamSisiGR::where('mrType', 'gh')->latest()->paginate(5, ['*'], 'P_ENS_GR_GH'),
            'p_ens_gr_as' => PenawaranEnamSisiGR::where('mrType', 'as')->latest()->paginate(5, ['*'], 'P_ENS_GR_AS'),
            'p_ens_gr_am' => PenawaranEnamSisiGR::where('mrType', 'am')->latest()->paginate(5, ['*'], 'P_ENS_GR_AM'),
            'p_ens_gr_ah' => PenawaranEnamSisiGR::where('mrType', 'ah')->latest()->paginate(5, ['*'], 'P_ENS_GR_AH'),
            'p_ens_gr_ad' => PenawaranEnamSisiGR::where('mrType', 'ad')->latest()->paginate(5, ['*'], 'P_ENS_GR_AD'),
            //End Gaming Room
        ]);
    }
}
