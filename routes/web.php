<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dosen')->group(function () {

    Route::get('/profil', function (){
        $title = "Halaman Profil Dosen";
        $teks = "INI HALAMAN PROFIL DOSEN";

        return view('dosen.index', compact ('title', 'teks'));
    })->name('dosen.profil');

    Route::get('/data_pengampu', function (){
        $title = "Halaman Mata Kuliah";
        $teks = "INI HALAMAN DATA MATA KULIAH YANG DIAMPU";

        return view('dosen/index', compact('title', 'teks'));
    })->name('dosen.data_pengampu');
});
