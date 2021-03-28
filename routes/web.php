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

Route::get('/', 'HomeController@index')->name('home');
Route::resource('home', 'HomeController');

Route::get('history', 'HistoryController@index')->name('history');
Route::resource('history', 'HistoryController');


Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin'])
    ->group(function(){
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');
            

        Route::resource('complaint', 'ComplaintController');
        Route::get('complaint', ['uses'=>'ComplaintController@index', 'as'=>'complaint.index']);
        Route::resource('pelanggan', 'PelangganController');
        //Route::put('iterasi', 'TransformasiController@iterasi')->name('transformasi.iterasi');
        Route::resource('transformasi', 'TransformasiController');
        Route::resource('pengelompokan', 'PengelompokanController');
        Route::get('iterasi_hasil', 'PengelompokanController@iterasi_hasil')->name('pengelompokan.iterasi_hasil');
        Route::resource('visualisasi', 'VisualisasiController');
    });
Auth::routes();
