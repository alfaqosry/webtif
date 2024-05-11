<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CapaianPembelajaranController;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageBiayaController;
use App\Http\Controllers\JadwalKuliahController;
use App\Http\Controllers\KalenderAkademikController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KerjasamaController;
use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\RpsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DepanController::class, 'index'])->name('index');

Route::get('/sejarah', [DepanController::class, 'sejarah'])->name('sejarah');

Route::get('/visi-misi', function () {
    return view('depan.visi-misi');
})->name('visi-misi');

Route::get('/struktur-organisasi', [DepanController::class, 'strukturOrganisasi'])->name('struktur-organisasi');

Route::get('/tujuan-keunggulan', function () {
    return view('depan.tujuan-keunggulan');
})->name('tujuan-keunggulan');

Route::get('/sambutan', [DepanController::class, 'sambutanKaProdi'])->name('sambutan');

Route::get('/dosen-staff', [DepanController::class, 'dosenStaff'])->name('dosen-staff');
Route::get('/dosen-staff/{dosen:slug}', [DepanController::class, 'dosenStaffDetail'])->name('dosen-staff-show');

Route::get('/pendekatan-perkuliahan', function () {
    return view('depan.pendekatan');
})->name('pendekatan-perkuliahan');

Route::get('/prestasi-unit', function () {
    return view('depan.prestasi-unit');
})->name('prestasi-unit');

Route::get('/capaian-pembelajaran', [CapaianPembelajaranController::class, 'show'])->name('capaian-pembelajaran');

Route::get('/dokumen-rps', [DepanController::class, 'rpsDepan'])->name('dokumen-rps');

route::get('/dokumen-rps/{rps}', [DepanController::class, 'detailRps'])->name('dokumen-rps-detail');

Route::get('/kalender-akademik', [DepanController::class, 'kalenderAkademik'])->name('kalender-akademik');

Route::get('/jadwal-kuliah', [DepanController::class, 'jadwalKuliah'])->name('jadwal-kuliah');

Route::get('/jadwal-kuliah/{jadwalKuliah}', [DepanController::class, 'jadwalKuliahDetail'])->name('jadwal-kuliah-detail');

Route::get('/fasilitas/{item}', [DepanController::class, 'fasilitas'])->name('fasilitas');

Route::get('/berita', [BeritaController::class, 'indexDepan'])->name('berita-depan');

Route::get('/berita/{berita:slug}', [BeritaController::class, 'show'])->name('berita-detail');

Route::get('/kategori', [KategoriController::class, 'show'])->name('kategori.show');

Route::get('/pendaftaran', [DepanController::class, 'pendaftaran'])->name('pendaftaran');

Route::get('/prospek-karir', [DepanController::class, 'prospekKarir'])->name('prospek-karir');

Route::get('/testimoni', [DepanController::class, 'testimoni'])->name('testimoni');

Route::get('/kurikulum', [DepanController::class, 'kurikulum'])->name('kurikulum');

Route::get('/dokumen-akreditasi', [DepanController::class, 'dokumenAkreditasi'])->name('dokumen-akreditasi');

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Users
    Route::prefix('home/user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
        Route::put('/update/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/delete/{user}', [UserController::class, 'destroy'])->name('delete');
    });

    // Kategori
    Route::prefix('home/kategori')->name('kategori.')->group(function () {
        Route::get('/', [KategoriController::class, 'index'])->name('index');
        Route::get('/create', [KategoriController::class, 'create'])->name('create');
        Route::post('/store', [KategoriController::class, 'store'])->name('store');
        Route::get('/edit/{kategori}', [KategoriController::class, 'edit'])->name('edit');
        Route::put('/update/{kategori}', [KategoriController::class, 'update'])->name('update');
        Route::delete('/delete/{kategori}', [KategoriController::class, 'destroy'])->name('delete');
    });

    // Berita
    Route::prefix('home/berita/')->name('berita.')->group(function () {
        Route::get('/', [BeritaController::class, 'index'])->name('index');
        Route::get('/create', [BeritaController::class, 'create'])->name('create');
        Route::post('/store', [BeritaController::class, 'store'])->name('store');
        Route::get('/edit/{berita}', [BeritaController::class, 'edit'])->name('edit');
        Route::put('/update/{berita}', [BeritaController::class, 'update'])->name('update');
        Route::delete('/delete/{berita}', [BeritaController::class, 'destroy'])->name('delete');
    });

    // Capaian Pembelajaran
    Route::prefix('home/capaian-pembelajaran/')->name('capaian-pembelajaran.')->group(function () {
        Route::get('/{query}', [CapaianPembelajaranController::class, 'index'])->name('index');
        Route::get('/{query}/create', [CapaianPembelajaranController::class, 'create'])->name('create');
        Route::post('/{query}/store', [CapaianPembelajaranController::class, 'store'])->name('store');
        Route::get('/{query}/edit/{id}', [CapaianPembelajaranController::class, 'edit'])->name('edit');
        Route::put('/{query}/update/{id}', [CapaianPembelajaranController::class, 'update'])->name('update');
        Route::delete('/{query}/delete/{id}', [CapaianPembelajaranController::class, 'destroy'])->name('delete');
    });

    // Dosen
    Route::prefix('home/dosen/')->name('dosen.')->group(function () {
        Route::get('/', [DosenController::class, 'index'])->name('index');
        Route::get('/create', [DosenController::class, 'create'])->name('create');
        Route::post('/store', [DosenController::class, 'store'])->name('store');
        Route::get('/edit/{dosen}', [DosenController::class, 'edit'])->name('edit');
        Route::put('/update/{dosen}', [DosenController::class, 'update'])->name('update');
        Route::delete('/delete/{dosen}', [DosenController::class, 'destroy'])->name('delete');
    });

    // Kurikulum
    Route::prefix('home/kurikulum/')->name('kurikulum.')->group(function () {
        Route::get('/', [KurikulumController::class, 'index'])->name('index');
        Route::get('/create', [KurikulumController::class, 'create'])->name('create');
        Route::post('/store', [KurikulumController::class, 'store'])->name('store');
        Route::get('/edit/{kurikulum}', [KurikulumController::class, 'edit'])->name('edit');
        Route::put('/update/{kurikulum}', [KurikulumController::class, 'update'])->name('update');
        Route::delete('/delete/{kurikulum}', [KurikulumController::class, 'destroy'])->name('delete');
    });

    // Rps
    Route::prefix('home/rps/')->name('rps.')->group(function () {
        Route::get('/', [RpsController::class, 'index'])->name('index');
        Route::get('/create', [RpsController::class, 'create'])->name('create');
        Route::post('/store', [RpsController::class, 'store'])->name('store');
        Route::get('/edit/{rps}', [RpsController::class, 'edit'])->name('edit');
        Route::put('/update/{rps}', [RpsController::class, 'update'])->name('update');
        Route::delete('/delete/{rps}', [RpsController::class, 'destroy'])->name('delete');
    });

    // Kalender Akademik
    Route::prefix('home/kalender-akademik/')->name('kalender-akademik.')->group(function () {
        Route::get('/', [KalenderAkademikController::class, 'index'])->name('index');
        Route::get('/create', [KalenderAkademikController::class, 'create'])->name('create');
        Route::post('/store', [KalenderAkademikController::class, 'store'])->name('store');
        Route::get('/edit/{kalenderAkademik}', [KalenderAkademikController::class, 'edit'])->name('edit');
        Route::put('/update/{kalenderAkademik}', [KalenderAkademikController::class, 'update'])->name('update');
        Route::delete('/delete/{kalenderAkademik}', [KalenderAkademikController::class, 'destroy'])->name('delete');
    });

    // Jadwal Kuliah
    Route::prefix('home/jadwal-kuliah/')->name('jadwal-kuliah.')->group(function () {
        Route::get('/', [JadwalKuliahController::class, 'index'])->name('index');
        Route::get('/create', [JadwalKuliahController::class, 'create'])->name('create');
        Route::post('/store', [JadwalKuliahController::class, 'store'])->name('store');
        Route::get('/edit/{jadwalKuliah}', [JadwalKuliahController::class, 'edit'])->name('edit');
        Route::put('/update/{jadwalKuliah}', [JadwalKuliahController::class, 'update'])->name('update');
        Route::delete('/delete/{jadwalKuliah}', [JadwalKuliahController::class, 'destroy'])->name('delete');
    });

    // Fasilitas
    Route::prefix('home/fasilitas/')->name('fasilitas.')->group(function () {
        Route::get('/', [FasilitasController::class, 'index'])->name('index');
        Route::get('/create', [FasilitasController::class, 'create'])->name('create');
        Route::post('/store', [FasilitasController::class, 'store'])->name('store');
        Route::get('/edit/{fasilitas}', [FasilitasController::class, 'edit'])->name('edit');
        Route::put('/update/{fasilitas}', [FasilitasController::class, 'update'])->name('update');
        Route::delete('/delete/{fasilitas}', [FasilitasController::class, 'destroy'])->name('delete');
    });

    // Informasi Pendaftaran
    Route::prefix('home/informasi-pendaftaran/')->name('informasi-pendaftaran.')->group(function () {
        Route::get('/', [ImageBiayaController::class, 'index'])->name('index');
        Route::get('/create', [ImageBiayaController::class, 'create'])->name('create');
        Route::post('/store', [ImageBiayaController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [ImageBiayaController::class, 'edit'])->name('edit');
        Route::put('/update/{id}', [ImageBiayaController::class, 'update'])->name('update');
        Route::delete('/delete/{id}', [ImageBiayaController::class, 'destroy'])->name('delete');
    });

    // Testimoni
    Route::prefix('home/testimoni/')->name('testimoni.')->group(function () {
        Route::get('/', [TestimoniController::class, 'index'])->name('index');
        Route::get('/create', [TestimoniController::class, 'create'])->name('create');
        Route::post('/store', [TestimoniController::class, 'store'])->name('store');
        Route::get('/edit/{testimoni}', [TestimoniController::class, 'edit'])->name('edit');
        Route::put('/update/{testimoni}', [TestimoniController::class, 'update'])->name('update');
        Route::delete('/delete/{testimoni}', [TestimoniController::class, 'destroy'])->name('delete');
    });

    // Slider
    Route::prefix('home/slider/')->name('slider.')->group(function () {
        Route::get('/', [SliderController::class, 'index'])->name('index');
        Route::get('/create', [SliderController::class, 'create'])->name('create');
        Route::post('/store', [SliderController::class, 'store'])->name('store');
        Route::get('/edit/{slider}', [SliderController::class, 'edit'])->name('edit');
        Route::put('/update/{slider}', [SliderController::class, 'update'])->name('update');
        Route::delete('/delete/{slider}', [SliderController::class, 'destroy'])->name('delete');
    });

    // Kerjasama
    Route::prefix('home/kerjasama/')->name('kerjasama.')->group(function () {
        Route::get('/', [KerjasamaController::class, 'index'])->name('index');
        Route::get('/create', [KerjasamaController::class, 'create'])->name('create');
        Route::post('/store', [KerjasamaController::class, 'store'])->name('store');
        Route::get('/edit/{kerjasama}', [KerjasamaController::class, 'edit'])->name('edit');
        Route::put('/update/{kerjasama}', [KerjasamaController::class, 'update'])->name('update');
        Route::delete('/delete/{kerjasama}', [KerjasamaController::class, 'destroy'])->name('delete');
    });
});
