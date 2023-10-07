<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataController;

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


Route::get('/data',[dataController::class, 'index'])->name('data');
Route::get('/datadijual',[dataController::class, 'datadijual'])->name('datadijual');
Route::get('/tambahdata',[dataController::class, 'tambahdata'])->name('tambahdata');
Route::post('/insertdata',[dataController::class, 'insertdata'])->name('insertdata');
Route::get('/tampildata/{id_produk}',[dataController::class, 'tampildata'])->name('tampildata');
Route::post('/updatedata/{id_produk}',[dataController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id_produk}',[dataController::class, 'delete'])->name('delete');

