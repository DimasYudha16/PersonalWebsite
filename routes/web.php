<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortofolioController;
use App\Models\portofolio;


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
    $portofolio = portofolio::all();
    return view('welcome', compact('portofolio'));
});

Auth::routes([
    'register' => true,
    'confirm' => true,
]);
//untuk meng disable register

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/admin', function() {
    return view('admin');
});

Route::get('/table', [PortofolioController::class, 'index'])->name('table');
Route::post('/create', [PortofolioController::class, 'create'])->name('table.create');
Route::post('/edit/{id}', [PortofolioController::class, 'edit'])->name('table.edit');
Route::get('/delete/{id}', [PortofolioController::class, 'delete'])->name('table.delete');
