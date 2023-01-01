<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuchikomisController;
use App\Http\Controllers\SampleController;

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

Route::controller(SampleController::class)->prefix('sample')->name('sample')->group(function () {
    Route::get('/', 'sample')->name('.sample');
    Route::post('/post', 'sample2')->name('.sample2');
});
