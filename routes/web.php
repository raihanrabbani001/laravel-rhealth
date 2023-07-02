<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('verify.signed')->group(function () {
    Route::get('/', [RoleController::class, 'pickRole'])->name('pick.role');
    Route::post('/verify', [RoleController::class, 'verify'])->name('verify.role');
});

Route::middleware('key.verify')->group(function () {
    Route::resource('keluhans', KeluhanController::class)->only(
        ['index', 'create', 'show', 'store']
    );
    Route::resource('pelanggans', PelangganController::class);
    Route::resource('obats', ObatController::class)->only(
        ['index', 'create', 'store', 'edit', 'update', 'destroy']
    );

    Route::group(['prefix' => 'keluhans'], function () {
        Route::get('/create/pick', [KeluhanController::class, 'pickPelanggan'])->name('keluhans.create.pick');
        Route::get('/create/add', [KeluhanController::class, 'addObat'])->name('keluhans.create.add');

        Route::get('/create/{id}/set', [KeluhanController::class, 'setPelanggan'])->name('keluhans.create.set');
        Route::get('/create/{id}/add', [KeluhanController::class, 'addListObat'])->name('keluhans.create.add.obat');
        Route::post('/create/add/simpan', [KeluhanController::class, 'updateListObat'])->name('keluhans.create.add.obat.simpan');
        Route::post('/create/remove/{obat}', [KeluhanController::class, 'removeListObat'])->name('keluhans.create.remove.obat');
    });
});

Route::group(['prefix' => 'clients'], function () {
    Route::get('', function(){
        return redirect()->route('clients.index', session('uname'));
    });
    Route::get('/{uname}', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/detail/{id}', [ClientController::class, 'show'])->name('clients.show');
});

Route::resource('guides', GuideController::class)->only(
    ['index'],
);
