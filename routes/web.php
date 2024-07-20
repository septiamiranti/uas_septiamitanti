<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\GuruControllerr;
use App\Http\Controllers\HariController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PerkiraanController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'dashboard']); 
//     return view('welcome');
// });

//Route::get('siswa',[SiswaController::class, 'index'])->name('siswa.index');
Route::resource('gallery', GalleryController::class);


Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/tambah', [SiswaController::class, 'tambah'])->name('siswa.tambah');
Route::post('/siswa/tambah', [SiswaController::class, 'tambah_proses'])->name('siswa.tambah_proses');
Route::get('/siswa/edit/{id}', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/edit/{id}', [SiswaController::class, 'edit_proses'])->name('siswa.edit_proses');
Route::get('/siswa/hapus/{id}', [SiswaController::class, 'hapus'])->name('siswa.hapus');
Route::delete('/siswa/hapus/{id}', [SiswaController::class, 'hapus_proses'])->name('siswa.hapus_proses');
Route::get('cetak_siswa', [SiswaController::class, 'cetak_siswa'])->name('cetak_siswa');

Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan.index');


//Route::resource('guru', GuruController::class);
Route::get('guru', [GuruControllerr::class, 'index'])->name('guru');
Route::post('guru', [GuruControllerr::class, 'store'])->name('simpan_guru');
Route::get('guru/create', [GuruControllerr::class, 'create'])->name('tambah_guru');
// Route::put('guru/{id}', [GuruController::class, 'update']);
// Route::delete('guru/{id}', [GuruController::class, 'destroy']);

//other way route
Route::resource('siswa', SiswaController::class);
Route::resource('pelajaran', PelajaranController::class);

Route::resource('kurikulum', KurikulumController::class);
Route::resource('jadwal', JadwalController::class);
Route::get('cetak_jadwal', [JadwalController::class, 'cetak_jadwal'])->name('cetak_jadwal');


// Route::get('jadwal', [JadwalController::class, 'index'])->name('jadwal.index');

// Route::resource('perkiraan', PerkiraanController::class);
Route::get('cetak_perkiraan', [PerkiraanController::class, 'cetak_perkiraan'])->name('cetak_perkiraan');



Route::resource('hari', HariController::class);

Route::resource('pengumuman', PengumumanController::class);
Route::get('cetak_pengumuman', [PengumumanController::class, 'cetak_pengumuman'])->name('cetak_pengumuman');
//Route::resource('guru', GuruController::class);
Route::resource('hari', HariController::class);
Route::resource('jurusan', JurusanController::class);
Route::resource('kurikulum', KurikulumController::class);
Route::resource('pelajaran', PelajaranController::class);
Route::resource('perkiraan', PerkiraanController::class);
Route::resource('nilai', NilaiController::class);
Route::get('cetak_nilai', [NilaiController::class, 'cetak_nilai'])->name('cetak_nilai');
// Route::resource('siswa', SiswaController::class);