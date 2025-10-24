<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\MapelController;
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


Route::get('/hello', function(){
    return view('hello');
});

Route::get('/kelas', [KelasController::class,'index']);
Route::get('anak', [AnakController::class, 'index']);
Route::get('/mapel', [MapelController::class, 'index']);
    

