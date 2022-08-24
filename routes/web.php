<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\regController;
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



Route::get('/form', function () {
    return view('pages.form');
});

Route::get('/data', function () {
    return view('pages.data');
});

Route::get('/regRegist', function () {
    return view('pages.register.regRegist');
});

Route::get('/regSugoi', function () {
    return view('pages.register.regData');
});

Route::get('/', function () {
    return view('pages.register.regRegist');
});


// yang diatas adlah routes untuk sidebar



Route::post('/addReg', [regController::class, 'addData']);
Route::get('/regAll', [regController::class, 'indexRegist']);
Route::get('/regData', [regController::class, 'returnData']);
Route::delete('/hapus/{id}', [regController::class, 'hapusdata']);