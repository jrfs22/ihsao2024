<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PoinController;
use App\Http\Controllers\SoalController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\DownloadRulebook;
use App\Http\Controllers\JawabanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {
    return view('test');
});

Route::get('/daftar-lomba', function () {
    return redirect('https://docs.google.com/forms/d/e/1FAIpQLSfg8AeUPGCBP97Y7GOCn_GyGenEKm1jN0oR8woVGOLHLQV1Mw/viewform');
})->name('daftar-lomba');

Route::get('/instagram', function () {
    return redirect('https://www.instagram.com/ihsao2024');
})->name('instagram');

Route::get('/tiktok', function () {
    return redirect('https://www.tiktok.com/@ihsao2024');
})->name('tiktok');

Route::get('/email', function () {
    return redirect('mailto:pcrihsao@gmail.com');
})->name('email');

Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('login');
    }else {
        return view('before-login.home');
    }
});


Route::post('/loginPost', [AuthController::class, 'loginPost'])->name('loginPost');

Route::middleware(['checklogin', 'web'])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::get('', [DashboardController::class, 'index'])->name('dashboard');

        Route::prefix('/peserta')->group(function () {
            Route::get('/', [PesertaController::class, 'admin'])->name('admin-peserta');
            Route::get('/insert', [AkunController::class, 'insertPeserta'])->name('admin-insert-peserta');
            Route::post('/store', [AkunController::class, 'store'])->name('admin-store-peserta');
        });
    
        Route::prefix('/soal')->group(function () {
            Route::get('/', [SoalController::class, 'index'])->name('admin-soal');
            Route::post('/store', [SoalController::class, 'store'])->name('admin-store-soal');
            Route::get('/insert', [SoalController::class, 'insert'])->name('admin-insert-soal');
            Route::get('/edit/{id}', [SoalController::class, 'edit'])->name('admin-ubah-atribut');
            Route::put('/update/{id}', [SoalController::class, 'update'])->name('admin-update-atribut');
        });
    
        Route::prefix('/hasil')->group(function () {
            Route::get('', [HasilController::class, 'index'])->name('admin-hasil');
            Route::get('/detail/{id}', [HasilController::class, 'detail'])->name('admin-detail-hasil');
        });
        
        Route::prefix('/akun')->group(function () {
            Route::get('', [AkunController::class, 'index'])->name('admin-akun');
            Route::get('/edit', [AkunController::class, 'edit'])->name('admin-edit-akun');
            Route::put('/update', [AkunController::class, 'update'])->name('admin-update-akun');
        });
    });
    
    Route::prefix('/auth')->group(function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
    
    Route::prefix('/peserta')->group(function () {
        Route::get('', [PesertaController::class, 'index'])->name('peserta');
        Route::post('/kode-akses', [PesertaController::class, 'kodeAkses'])->name('kode-akses');    
        Route::get('/start', [PesertaController::class, 'start'])->name('peserta-start-test');
        
        Route::middleware('akseskode')->group(function () {
            Route::get('/test', [PesertaController::class, 'test'])->name('peserta-test-test')->middleware('onlineTest');
            Route::post('/test/add', [PesertaController::class, 'add'])->name('upload-hasil-test')->middleware('onlineTest');
            Route::get('/instruksi', [PesertaController::class, 'instruksi'])->name('instruksi');
        });
    });
});

Route::prefix('/auth')->group(function () {
    Route::get('/', [AuthController::class, 'login'])->name('login');
});
Route::get('/download/rulebook/{lomba}', [DownloadRulebook::class, 'download'])->name('download');

// Route::fallback(function () {
//     return redirect()->route('/');
// });