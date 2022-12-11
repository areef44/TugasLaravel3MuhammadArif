<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ArticlesController;
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

Route::get('/', [ArticlesController::class, 'index',])->name('index');

Route::get('/dataproduk', [ProdukController::class, 'dataproduk'])->name('dataproduk');

Route::get('/tampildata', [ProdukController::class, 'tampildata'])->name('tampildata');

Route::get('/tambahdata', [ProdukController::class, 'tambahdata'])->name('tambahdata');

Route::post('/insertdata', [ProdukController::class, 'insertdata'])->name('insertdata');

Route::get('/detaildata/{id}', [ProdukController::class, 'detaildata'])->name('detaildata');

Route::post('/updatedata/{id}', [ProdukController::class, 'updatedata'])->name('updatedata');

Route::get('/deletedata/{id}', [ProdukController::class, 'deletedata'])->name('deletedata');


Route::get('/dataarticle', [ArticlesController::class, 'dataarticle'])->name('dataarticle');

Route::get('/tambaharticle', [ArticlesController::class, 'tambaharticle'])->name('tambaharticle');

Route::post('/insertarticle', [ArticlesController::class, 'insertarticle'])->name('insertarticle');

Route::get('/detailarticle/{id}', [ArticlesController::class, 'detailarticle'])->name('detailarticle');

Route::post('/updatearticle/{id}', [ArticlesController::class, 'updatearticle'])->name('updatearticle');

Route::get('/deletearticle/{id}', [ArticlesController::class, 'deletearticle'])->name('deletearticle');

Route::get('/showarticle/{id}', [ArticlesController::class, 'showarticle'])->name('showarticle');
