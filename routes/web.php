<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiroAkademik;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ScholarshipController;

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

Auth::routes([
    'verify' => true,
]);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/download/{file}', [HomeController::class, 'download'])->name('download');
Route::get('/tuition-fee', [HomeController::class, 'tuitionFee'])->name('tuition-fee');
Route::get('/registration-guides', [HomeController::class, 'registrationGuides'])->name('registration-guides');
Route::get('/timeline', [HomeController::class, 'timeline'])->name('timeline');

Route::prefix('cahayascholarship')->name('cahayascholarship.')->group(function () {
    Route::get('/', [HomeController::class, 'cahayaScholarship'])->name('index');
});

Route::middleware(['auth', 'user', 'verified'])->group(function () {
    // Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/biodata', [StudentController::class, 'biodata'])->name('biodata');
    Route::post('/biodata/store', [StudentController::class, 'store'])->name('biodata.store');
    Route::get('/get/program', [FormController::class, 'getProgram'])->name('get-program');
    Route::get('/applicant-form', [FormController::class, 'index'])->name('applicant-form');
    Route::post('/applicant-form/store', [FormController::class, 'store'])->name('applicant-form.store');
    Route::post('/applicant-submit', [FormController::class, 'submit'])->name('applicant-submit');
    Route::get('/preview-data', [FormController::class, 'preview'])->name('preview-data');
    Route::get('/print-card', [FormController::class, 'printCard'])->name('print-card');
    Route::get('/announcement', [StudentController::class, 'announcement'])->name('announcement');

    Route::prefix('cahayascholarship')->name('cahayascholarship.')->group(function () {
        Route::get('/print-card', [StudentController::class, 'printCard'])->name('print-card');
        Route::get('/achievement', [ScholarshipController::class, 'cahayaAchievement'])->name('cahaya-achievement');
        Route::post('/achievement/store', [ScholarshipController::class, 'cahayaAchievementAnsStore'])->name('cahaya-achievement.store');
        Route::post('/achievementlist/store', [ScholarshipController::class, 'cahayaAchievementListStore'])->name('cahaya-achievementlist.store');
        Route::get('/download/certificate-achievement/{file}', [ScholarshipController::class, 'downloadCertificateAchievement'])->name('download.certificate');
    });
});

Route::middleware(['auth', 'ba'])->group(function () {
    Route::prefix('biroakademik')->name('ba.')->group(function () {
        Route::get('/home', [BiroAkademik::class, 'index'])->name('index');
        Route::get('/pendaftar', [BiroAkademik::class, 'pendaftar'])->name('pendaftar');
        Route::get('/pendaftar/export/{year}', [BiroAkademik::class, 'exportForm'])->name('pendaftar.export');
        // Route::get('/pendaftar/export', [BiroAkademik::class, 'exportForm'])->name('pendaftar.export');
        Route::get('/pendaftar/{form:reg_number}', [BiroAkademik::class, 'detailPendaftar'])->name('pendaftar.detail');
        Route::post('/pendaftar/wawancara/store', [BiroAkademik::class, 'wawancara'])->name('pendaftar.wawancara');
        Route::get('/wawancara', [BiroAkademik::class, 'listWawancara'])->name('wawancara');
        Route::post('/pendaftar/accept', [BiroAkademik::class, 'accept'])->name('pendaftar.accept');
        Route::post('/pendaftar/reject', [BiroAkademik::class, 'reject'])->name('pendaftar.reject');
        Route::get('/doc/download/{folder}/{file}', [BiroAkademik::class, 'download'])->name('download');
    });
});