<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('home');
// });
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/biodata', function () {
    return view('dashboard.biodata', [
        'title' => 'Biodata',
        'user' => Auth::user()
    ]);
});

Route::get('/school', function () {
    return view('dashboard.school', [
        'title' => 'School Information',
        'user' => Auth::user()
    ]);
});