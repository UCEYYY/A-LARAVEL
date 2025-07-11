<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\UserController; // Tambahkan ini jika belum ada

Route::get('/', function () {
    return view('welcome');
});

// belajar method/function 
Route::get('/get', function () {
    echo "Ini Adalah method GET";
});

Route::any('/any', function () {
    echo "Menerima Semua Method";
});

// belajar route parameter
Route::get('/parameter/{parameter}', function ($parameter) {
    echo "Menerima Parameter " . $parameter;
});

Route::get('/parameter-opsional/{parameter?}', function ($parameter = 'belum ada parameter') {
    echo "Parameter " . $parameter;
});

// view di dalam folder (misal: resources/views/index/index.blade.php)
Route::get('/view1', function () {
    return view('index.index');
});

// view di luar folder (resources/views/index.blade.php)
Route::get('/view', function () {
    $nama = 'Exlyn';
    $umur = 20;
    $jurusan = 'Teknik Informatika';
    return view('index', compact('nama', 'umur', 'jurusan'));
});

Route::get('/view2', function () {
    return view('index', [
        'nama' => 'Exlyn',
        'umur' => 20,
        'jurusan' => 'Teknik Informatika'
    ]);
});

// Mengirim Request dari method GET
Route::get('/request', function (Request $request) {
    // Cara 1 (pakai helper Laravel)
    $nama = request('nama');
    $umur = request('umur');
    $jurusan = request('jurusan');

    // Cara 3 (cara paling disarankan di Laravel)
    // $nama = $request->input('nama');
    // $umur = $request->input('umur');
    // $jurusan = $request->input('jurusan');

    return view('index', compact('nama', 'umur', 'jurusan'));
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/kirim-form', function (Request $request) {
    return $request->input('nama');
});

// Route controller (pastikan UserController sudah dibuat dan di-import)
Route::get('/user', [UserController::class, 'index']);

Route::resource('books', BookController::class);
Route::get('/petugas', [PetugasController::class, 'index']);