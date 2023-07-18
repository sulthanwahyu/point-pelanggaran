<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\siswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\PencarianController;
use App\Http\Controllers\pelanggaranController;

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



// Route::get('/ppp', function () {
//     return view('dashboardSiswa');
// });
Route::get('/', function () {
    return view('dashboardHome');
});
// Route::get('/',[HomeController::class,'index']);
// Route::get('/home/detail/{id}',[HomeController::class,'show']); 

// Route::get('/guru', function () {
//     return view('dashboardGuru');
// });


Route::get('/siswa',[siswaController::class,'index']);
Route::get('/siswa/add_siswa',[siswaController::class,'create']);
Route::post('/siswa/add_siswa',[siswaController::class,'store']);
Route::get('/siswa/detail/{id}',[siswaController::class,'show']); 
Route::get('/siswa/edit/{id}',[siswaController::class,'edit']);
Route::put('/siswa/up/{id}',[siswaController::class,'update']);
Route::delete('/siswa/destroy/{id}',[siswaController::class,'destroy']); 




Route::get('/guru', [GuruController::class, 'index']);
Route::get('/guru/add_guru',[GuruController::class,'create']);
Route::post('/guru/add_guru',[GuruController::class,'store']);
Route::get('/guru/edit/{id}',[GuruController::class,'edit']);
Route::patch('/guru/up/{id}',[GuruController::class,'update']);
Route::get('/guru/detail/{id}',[GuruController::class,'show']); 
Route::delete('/guru/destroy/{id}',[GuruController::class,'destroy']);


Route::get('/pelanggaran', [pelanggaranController::class, 'index']);
Route::get('/pelanggaran/add_pelanggaran',[pelanggaranController::class,'create']);
Route::post('/pelanggaran/add_pelanggaran',[pelanggaranController::class,'store']);
Route::get('/pelanggaran/edit/{id}',[pelanggaranController::class,'edit']);
Route::patch('/pelanggaran/up/{id}',[pelanggaranController::class,'update']);
Route::get('/pelanggaran/detail/{id}',[pelanggaranController::class,'show']); 
Route::delete('/pelanggaran/destroy/{id}',[pelanggaranController::class,'destroy']);


Route::get('/laporan', [laporanController::class, 'index'])->name('laporan');
Route::get('/laporan/add_laporan',[laporanController::class,'create']);
Route::post('/laporan/add_laporan',[laporanController::class,'store']);
Route::get('/laporan/edit/{id}',[laporanController::class,'edit']);
Route::patch('/laporan/up/{id}',[laporanController::class,'update']);
Route::get('/laporan/detail/{id}',[laporanController::class,'show']); 
Route::delete('/laporan/destroy/{id}',[laporanController::class,'destroy']);

// Jurusan
Route::get('/jurusan', [JurusanController::class, 'index']);
Route::get('/jurusan/add/jurusan', [JurusanController::class, 'create']);
Route::post('/jurusan/addjurusan', [JurusanController::class, 'store']);
Route::delete('/jurusan/hapusjurusan/{id}', [JurusanController::class, 'destroy']);
Route::get('/jurusan/detailjurusan/{id}', [JurusanController::class, 'show']);
Route::get('/jurusan/{id}/editjurusan', [JurusanController::class, 'edit']);
Route::put('/jurusan/simpaneditjurusan/{id}', [JurusanController::class, 'update']);

// Kelas
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/add/kelas', [KelasController::class, 'create']);
Route::post('/kelas/addkelas', [KelasController::class, 'store']);
Route::delete('/kelas/hapuskelas/{id}', [KelasController::class, 'destroy']);
Route::get('/kelas/detailkelas/{id}', [KelasController::class, 'show']);
Route::get('/kelas/{id}/editkelas', [KelasController::class, 'edit']);
Route::put('/kelas/simpaneditkelas/{id}', [KelasController::class, 'update']);

Route::get('/cari_siswa', [PencarianController::class, 'cari_siswa'])->name('cari_siswa');
Route::get('/cari_guru', [PencarianController::class, 'cari_guru'])->name('cari_guru');

