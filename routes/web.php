<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;

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

Route::middleware(['auth', 'verified'])->group(function () {
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
        Route::get('/', [HomeController::class, 'cahayaScholarship'])->name('index');
        Route::get('/print-card', [StudentController::class, 'printCard'])->name('print-card');
    });
});