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

// Route::get('/admin', 'App\Http\Controllers\Admincontroller@index')->name('admin');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'admin'], function () {
    //begin
    Route::get('/admin', 'App\Http\Controllers\Admincontroller@index')->name('admin');
    Route::resource('doctors', 'App\Http\Controllers\DoctorController');
    Route::resource('labs', 'App\Http\Controllers\LabController');
    Route::resource('pharmacy', 'App\Http\Controllers\PharmacyController');
});

Route::group(['middleware' => 'doctor'], function () {
    //begin
    Route::get('/doctor', 'App\Http\Controllers\Admincontroller@doctor')->name('doctor');
    Route::resource('reserves', 'App\Http\Controllers\ReserveController');
    Route::resource('consult', 'App\Http\Controllers\ConsultController');
    Route::get('consult-finish', 'App\Http\Controllers\ConsultController@finish')->name('consult.finish');
    Route::get('reserves-finish', 'App\Http\Controllers\ReserveController@finish')->name('finish');
});

Route::group(['middleware' => 'pharmacist'], function () {
    //begin
    Route::get('/pharmacist', 'App\Http\Controllers\Admincontroller@pharmacist')->name('pharmacist');
    Route::resource('Pharmacists', 'App\Http\Controllers\PharmacistController');
    Route::get('Pharmacists-finish', 'App\Http\Controllers\PharmacistController@finish')->name('Pharmacists-finish');
});

Route::group(['middleware' => 'lab'], function () {
    //begin
    Route::get('/lab', 'App\Http\Controllers\Admincontroller@lab')->name('lab');
    Route::resource('checkups', 'App\Http\Controllers\CheckupController');
    Route::get('checkups-finish', 'App\Http\Controllers\CheckupController@finish')->name('checkups-finish');
});
