<?php

namespace App\Http\Controllers;

use App\Models\CabangLombaModel;
use App\Models\PilihanModel;
use App\Models\SoalMyobModel;
use Exception;
use App\Models\SoalModel;
use App\Models\BabakModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SoalController extends Controller
{
    public function index()
    {
        $soal_olimpiade = SoalModel::with(['pilihan', 'cabangLomba', 'babak'])->get()->sortBy('babak_id');
        $cabangLomba = BabakModel::with(['cabangLomba'])->get();
        $soal_myob = SoalMyobModel::with(['cabangLomba', 'babak'])->get();
        // dd($soal_myob);
        return view('after-login.admin.soal.index', compact('soal_olimpiade', 'cabangLomba', 'soal_myob'));
    }

    public function insert()
    {
        $cabang_lomba = CabangLombaModel::all();    
        $babak = BabakModel::all();
        return view('after-login.admin.soal.insert', compact('cabang_lomba', 'babak'));
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'cabanglomba' => 'required',
                'babak' => 'required',
                'pertanyaan' => 'required',
            ]);
    
            
            if ($validator->fails()) {
                return redirect()->back()->with('add-soal', 'error');
            }else {
                $babak_id = BabakModel::where('cabang_lomba_id', $request->cabanglomba)->where('nama_babak', $request->babak)->first();
    
                if ($request->cabanglomba != 3){
                    $tipeSoalValidator = Validator::make($request->all(), [
                        'tipesoal' => 'required',
                    ]);
                    
                    if ($validator->fails()) {
                        return redirect()->back()->with('add-soal', 'error');
                    }else {
                        if ($request->tipesoal == 'ganda') {
                            $validatorLast = Validator::make($request->all(), [
                                'pilihan' => 'required',
                                'options' => 'required'
                            ]);
                            
                            if ($validator->fails()) {
                                return redirect()->back()->with('add-soal', 'error');
                            } else {
                                DB::transaction(function () use ($request, $babak_id) {
                                    $addSoal = SoalModel::create([
                                        'pertanyaan' => $request->pertanyaan,
                                        'cabang_lomba_id' => $request->cabanglomba,
                                        'babak_id' => $babak_id->id
                                    ]);
    
                                    foreach ($request->pilihan as $key => $item) {
                                        $addPilihan = PilihanModel::create([
                                            'deskripsi' => $item,
                                            'soal_id' => $addSoal->id,
                                            'isTrue' => ($key == $request->option) ? 1 : 0
                                        ]);
                                    }
                                });
                            }
                        }else {
                            // Pilihan gambar
                            $validatorLast = Validator::make($request->all(), [
                                'pernyataan' => 'required',
                                'gambar' => 'required|mimes:png,jpg,jpeg'
                            ]);
                            
                            if ($validator->fails()) {
                                return redirect()->back()->with('add-soal', 'error');
                            } else {
                                $namaGambar = time() . '.' . $request->gambar->extension();
    
                                $request->gambar->storeAs('public/gambar/soal-gambar', $namaGambar);
    
                                DB::transaction(function () use ($request, $babak_id, $namaGambar) {
                                    $addSoal = SoalModel::create([
                                        'pertanyaan' => $request->pertanyaan,
                                        'pernyataan' => $request->pernyataan,
                                        'gambar' => $namaGambar,
                                        'cabang_lomba_id' => $request->cabanglomba,
                                        'babak_id' => $babak_id->id
                                    ]);
    
                                    foreach ($request->pilihan as $key => $item) {
                                        $addPilihan = PilihanModel::create([
                                            'deskripsi' => $item,
                                            'soal_id' => $addSoal->id,
                                            'isTrue' => ($key == $request->option) ? 1 : 0
                                        ]);
                                    }
                                });
                            }
                        }
                    }
                } else {
                    $validatorFile = Validator::make($request->all(), [
                        'file' => 'required'
                    ]);
    
                    $namaFile = time(). '-myob.' . $request->file->extension();
    
                    
                    DB::transaction(function () use ($request, $babak_id, $namaFile) {
                        $request->file->storeAs('public/file/soal-myob', $namaFile);
    
                        $addSoal = SoalMyobModel::create([
                            'pertanyaan' => $request->pertanyaan,
                            'file_soal' => $namaFile,
                            'cabang_lomba_id' => $request->cabanglomba,
                            'babak_id' => $babak_id->id
                        ]);
                    });
                }
            }
    
            return redirect()->route('admin-soal')->with('add-soal', 'success');
        } catch (Exception $e) {
            return redirect()->route('admin-soal')->with('add-soal', 'menambahkan soal');
        }
    }

    public function edit($id)
    {
        $babak = BabakModel::with('cabangLomba')->findOrFail($id);
        // dd($babak);
        return view('after-login.admin.soal.edit_attribut', compact('babak'));
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make($request->all(), [
                'waktu_mulai' => 'required',
                'lama_pengerjaan' => 'required',
            ]);
    
            if ($validator->fails()){
                return redirect()->route('admin-soal')->withErrors($validator->errors());
            }
    
            $babak = BabakModel::findOrFail($id);
            $babak->waktu_mulai = $request->input('waktu_mulai');
            $babak->lama_pengerjaan = $request->input('lama_pengerjaan');

            if ($babak->save()) {
                return redirect()->route('admin-soal')->with('update-babak', 'success');
            }
        } catch (Exception $e) {
            return redirect()->route('admin-soal')->with('update-babak', 'error');
        }
    }
}
