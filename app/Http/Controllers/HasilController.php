<?php

namespace App\Http\Controllers;

use App\Models\CabangLombaModel;
use App\Models\JawabanModel;
use App\Models\PesertaModel;
use App\Models\User;
use Illuminate\Http\Request;

class HasilController extends Controller
{
    public function index()
    {
        // $hasil = JawabanModel::with(['peserta', 'soal'])->get();
        return view('after-login.admin.hasil.index');
    }

    public function detail()
    {
        return view('after-login.admin.hasil.detail');
    }
}
