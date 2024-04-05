<?php

namespace App\Http\Controllers;
use App\Models\PesertaModel;
use App\Models\SoalModel;
use App\Models\SoalMyobModel;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // $peserta = User::with(['peserta.cabang_lomba'])->where('role', '!=', 'admin')->get();
        $peserta = PesertaModel::with(['users', 'cabang_lomba'])->get();
        
        // dd($peserta);

        // hitung jumlah peserta
        $peserta_sma = PesertaModel::where('cabang_lomba_id', 1)->count();
        $peserta_smk = PesertaModel::where('cabang_lomba_id', 2)->count();
        $peserta_myob = PesertaModel::where('cabang_lomba_id', 3)->count();

        // hitung jumlah soal
        
        $sma_pemanasan = SoalModel::where('cabang_lomba_id', 1)->where('babak_id', 1)->count();
        $sma_penyisihan = SoalModel::where('cabang_lomba_id', 1)->where('babak_id', 2)->count();
        $sma_final = SoalModel::where('cabang_lomba_id', 1)->where('babak_id', 3)->count();
        
        $smk_pemanasan = SoalModel::where('cabang_lomba_id', 2)->where('babak_id', 4)->count();
        $smk_penyisihan = SoalModel::where('cabang_lomba_id', 2)->where('babak_id', 5)->count();
        $smk_final = SoalModel::where('cabang_lomba_id', 2)->where('babak_id', 6)->count();

        $myob_pemanasan = SoalMyobModel::where('cabang_lomba_id', 3)->where('babak_id', 7)->count();
        $myob_penyisihan = SoalMyobModel::where('cabang_lomba_id', 3)->where('babak_id', 8)->count();
        $myob_final = SoalMyobModel::where('cabang_lomba_id', 3)->where('babak_id', 9)->count();
        
        // return view('after-login.admin.dashboard') -> with('peserta', $peserta);
        return view('after-login.admin.dashboard', compact(
            'peserta',
            'peserta_myob',
            'peserta_sma',
            'peserta_smk',
            'myob_pemanasan',
            'myob_penyisihan',
            'myob_final',
            'sma_pemanasan',
            'sma_penyisihan',
            'sma_final',
            'smk_pemanasan',
            'smk_penyisihan',
            'smk_final'
        ));
        // return view('after-login.admin.dashboard');
    }
}
