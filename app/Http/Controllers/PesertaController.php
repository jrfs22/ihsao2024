<?php

namespace App\Http\Controllers;
use App\Models\JawabanModel;
use App\Models\SoalModel;
use App\Models\SoalMyobModel;
use App\Models\User;
use App\Models\BabakModel;
use App\Models\PesertaModel;
use Exception;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class PesertaController extends Controller
{
    public function index() 
    {
        return view('after-login.peserta.landing');
    }

    public function start() 
    {
        $user_id = auth()->user()->id;
        $data = User::with('peserta.babak.cabangLomba')->where('id', $user_id)->first();

        $waktu_mulai = $data->peserta->babak->waktu_mulai;
        $currentDate = now();
        
        if ($currentDate >= $waktu_mulai) {
            Session::put('onlineTest', $data);
            return redirect()->route('peserta-test-test');
        }
        
        return redirect()->route('instruksi');
    }
    
    public function test () 
    {
        // dd(session('onlineTest'));

        $cabang_lomba_id = session('onlineTest')->peserta->babak->cabang_lomba_id;
        $babak_id = session('onlineTest')->peserta->babak->id;

        if ($cabang_lomba_id != 3) {
            $soal = SoalModel::with('pilihanSemua')->where('cabang_lomba_id', $cabang_lomba_id)->where('babak_id', $babak_id)->inRandomOrder()->get();
            // dd($soal);
            // dd($cabang_lomba_id, $soal  ,$babak_id);    
            return view('after-login.peserta.index', compact('soal'));
        } else {
            $soal = SoalMyobModel::where('cabang_lomba_id', $cabang_lomba_id)->where('babak_id', $babak_id)->first();
        }

    }

    public function admin()
    {
        $peserta = User::with(['peserta.cabang_lomba'])
        ->get();

        return view('after-login.admin.peserta.index')-> with('peserta', $peserta);
    }

    public function kodeAkses(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'kode_akses' => 'require|exists:babak,kode_soal',
            ]);

            $akses = BabakModel::where('kode_soal', $request->kode_akses)->first();

            if ($akses) {
                Session::put('aksesCode', $akses);
                return redirect()->route('instruksi')->with('akses-kode', 'success');
            }else {
                return redirect()->route('peserta')->with('akses-kode', 'Kode akses invalid');
            }
        } catch (ValidationException $e) {
            return redirect()->route('peserta')->with('akses-kode', 'Kode akses invalid');
        } catch (\Exception $e) {
            return redirect()->route('peserta')->with('akses-kode', 'Kode akses invalid');
        }

    }

    public function instruksi() {
        $user_id = auth()->user()->id;
        $data = User::with('peserta.babak.cabangLomba')->where('id', $user_id)->first();
        return view('after-login.peserta.instruksi', compact('data'));
    }

    public function add(Request $request) 
    {
        try {
            $userId = auth()->user()->id;
            // dd($request->all());
            // dd($request->options_ . '1');
            DB::transaction(function () use ($request, $userId) {
                $i = 1;
                foreach ($request->soal_id as $key => $item) {
                    $jawaban = JawabanModel::create([
                            'soal_id' => $item,
                            'pilihan_id' => $request->pilihan_ . $i++,
                            'peserta_id' => $userId
    
                        ]
                    );
                }
            });

            return redirect()->route('peserta')->with('jawaban', 'success');
        } catch (Exception $e) {
            return redirect()->route('peserta')->with('jawaban', 'error'); 
        }

    }
}
