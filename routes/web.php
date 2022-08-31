<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;
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





// Route::get('/data', function () {
//     return view('pages.data');
// });

Route::get('/regRegist', function () {
    return view('pages.register.regRegist');
});

Route::get('/regSugoi', function () {
    return view('pages.register.regData');
});

Route::get('/', function () {
    return view('pages.login.loginPage');
});

Route::get('/dataUbah', function () {
    return view('pages.dataUbah');
});

Route::get('/UserSetting', function () {
    return view('pages.dataUbah');
});

Route::get('/registerToLogin', function () {
    return view('pages.login.loginPage');
});




// yang diatas adlah routes untuk sidebar


// ini untuk register
Route::post('/addReg', [regController::class, 'addData']);
Route::get('/regAll', [regController::class, 'indexRegist']);
Route::get('/regData', [regController::class, 'returnData']);
Route::delete('/hapus/{id}', [regController::class, 'hapusdata']);
// ini routes untuk register



// ini untuk user
Route::get('/dataTable', [postController::class, 'index']);
Route::get('/form', [postController::class, 'returnForm']);
Route::post('/dataTambah', [postController::class, 'tambahData']);
Route::delete('/hapususer/{id}', [postController::class, 'hapusdata']);
Route::get('/data', [postController::class, 'returnTable']);
Route::get('/ubah/{id}', [postController::class, 'ubah']);
Route::put('/ubahdata/{id}', [postController::class, 'ubahdata']);
Route::get('/tableData', [postController::class, 'returnTable']);
// ini untuk user



Route::get('/loginToRegister', [regController::class, 'toRegister']);
//ini untuk login