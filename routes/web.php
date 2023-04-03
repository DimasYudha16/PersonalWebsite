<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'confirm' => false,
]);
//untuk meng disable register

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', function() {
    return view('admin');
});

Route::get('/charts', function() {
    return view('chartsjs');
});

Route::get('/chartsflot', function() {
    return view('chartsflot');
});

Route::get('/chartspeity', function() {
    return view('chartspeity');
});

Route::get('/fontawesome', function() {
    return view('fontawesome');
});

Route::get('/fontthemify', function() {
    return view('fontthemify');
});
