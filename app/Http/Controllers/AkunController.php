<?php

namespace App\Http\Controllers;

use App\Models\PesertaModel;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AkunController extends Controller
{
    public function index()
    {
        return view('after-login.admin.akun.index');
    }

    public function edit()
    {
        $akun = User::findOrFail(auth()->user()->id);
        return view('after-login.admin.akun.edit', compact('akun'));
    }

    public function update(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required',
                'password_lama' => [
                    'required',
                    'min:8',
                    function ($attribute, $value, $fail) use ($request) {
                        $user = User::where('id', auth()->user()->id)->first();

                        if (!$user || !Hash::check($value, $user->password)) {
                            $fail('The password is incorrect.');
                        }
                    },
                ],
                'password_baru' => 'required|min:8',
            ]);
        } catch (ValidationException $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function insertPeserta()
    {
        return view('after-login.admin.peserta.insert');
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama_lengkap' => 'required',
                'email' => 'required|email|unique:users',
                'asal_sekolah' => 'required',
                'lomba' => 'required'
            ]);

            if ($validator->fails()) {
                return redirect()->route('admin-peserta')->with('alert-add-peserta', 'error');
            }

            $password = generateRandomPassword();
            if ($request->lomba === "sma") {
                $cabang_lomba_id = 1;
            } else if ($request->lomba === "smk") {
                $cabang_lomba_id = 2;
            } else if ($request->lomba === "myob") {
                $cabang_lomba_id = 3;
            }

            DB::transaction(function () use ($request, $password, $cabang_lomba_id) {
                $user = User::create([
                    'nama_lengkap' => $request->nama_lengkap,
                    'email' => $request->email,
                    'role' => $request->lomba,
                    'password' => Hash::make($password),
                    'password_rand' => $password,
                ]);

                PesertaModel::create([
                    'asal_sekolah' => $request->asal_sekolah,
                    'users_id' => $user->id,
                    'cabang_lomba_id' => $cabang_lomba_id,
                ]);
            });

            return redirect()->route('admin-peserta')->with('alert-add-peserta', 'success');
        } catch (ValidationException $e) {
            return redirect()->route('admin-peserta')->with('alert-add-peserta', 'error');
        }
    }
}
