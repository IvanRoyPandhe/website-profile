<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'home'])->name('home');

// Profile Menu
Route::get('/visi-misi', [PublicController::class, 'visiMisi'])->name('visi-misi');
Route::get('/struktur-organisasi', [PublicController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
Route::get('/profile-dosen', [PublicController::class, 'profileDosen'])->name('profile-dosen');
Route::get('/prospek-lulusan', [PublicController::class, 'prospekLulusan'])->name('prospek-lulusan');
Route::get('/biaya-pendidikan', [PublicController::class, 'biayaPendidikan'])->name('biaya-pendidikan');

// Akademik Menu
Route::get('/kurikulum', [PublicController::class, 'kurikulum'])->name('kurikulum');
Route::get('/kalender-akademik', [PublicController::class, 'kalenderAkademik'])->name('kalender-akademik');
Route::get('/jadwal-kuliah', [PublicController::class, 'jadwalKuliah'])->name('jadwal-kuliah');

// Kemahasiswaan Menu
Route::get('/hima', [PublicController::class, 'hima'])->name('hima');
Route::get('/ikahima', [PublicController::class, 'ikahima'])->name('ikahima');
Route::get('/prestasi-mahasiswa', [PublicController::class, 'prestasiMahasiswa'])->name('prestasi-mahasiswa');
Route::get('/survey-pengguna', [PublicController::class, 'surveyPengguna'])->name('survey-pengguna');

// Dokumen Menu
Route::get('/akreditasi', [PublicController::class, 'akreditasi'])->name('akreditasi');
Route::get('/kebijakan', [PublicController::class, 'kebijakan'])->name('kebijakan');

// Publikasi Menu
Route::get('/penelitian', [PublicController::class, 'penelitian'])->name('penelitian');
Route::get('/pengabdian', [PublicController::class, 'pengabdian'])->name('pengabdian');
Route::get('/publikasi-jurnal', [PublicController::class, 'publikasiJurnal'])->name('publikasi-jurnal');

// Informasi Menu
Route::get('/berita', [PublicController::class, 'berita'])->name('berita');
Route::get('/berita/{berita}', [PublicController::class, 'beritaDetail'])->name('berita.detail');
Route::get('/agenda', [PublicController::class, 'agenda'])->name('agenda');
Route::get('/kontak', [PublicController::class, 'kontak'])->name('kontak');
Route::post('/kontak', [PublicController::class, 'kontakSubmit'])->name('kontak.submit');

// Penjaminan Menu
Route::get('/monitoring-evaluasi', [PublicController::class, 'monitoringEvaluasi'])->name('monitoring-evaluasi');
Route::get('/rencana-tindak-lanjut', [PublicController::class, 'rencanaTindakLanjut'])->name('rencana-tindak-lanjut');
Route::get('/survei', [PublicController::class, 'survei'])->name('survei');

// Legacy routes for compatibility
Route::get('/about', [PublicController::class, 'visiMisi']);
Route::get('/staff', [PublicController::class, 'profileDosen']);
Route::get('/curriculum', [PublicController::class, 'kurikulum']);
Route::get('/news', [PublicController::class, 'berita']);
Route::get('/news/{berita}', [PublicController::class, 'beritaDetail']);
Route::get('/contact', [PublicController::class, 'kontak']);
Route::post('/contact', [PublicController::class, 'kontakSubmit']);
