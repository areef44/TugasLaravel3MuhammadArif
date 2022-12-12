<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\NoAuth;

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

Route::get('/', [ArticlesController::class, 'index'])->name('index');

Route::get('/showarticle/{id}', [ArticlesController::class, 'showarticle'])->name('showarticle');

Route::middleware(['withAuth'])->prefix('article')
    ->controller(ArticlesController::class)
    ->name('article.')->group(
        function () {

            Route::get('/dataarticle',  'dataarticle')->name('dataarticle');

            Route::get('/tambaharticle',  'tambaharticle')->name('tambaharticle');

            Route::post('/insertarticle',  'insertarticle')->name('insertarticle');

            Route::get('/detailarticle/{id}',  'detailarticle')->name('detailarticle');

            Route::post('/updatearticle/{id}',  'updatearticle')->name('updatearticle');

            Route::get('/deletearticle/{id}',  'deletearticle')->name('deletearticle');
        }

    );


Route::get('/dataproduk', [ProdukController::class, 'dataproduk'])->name('dataproduk');

Route::middleware(['withAuth'])->prefix('produk')
    ->controller(ProdukController::class)
    ->name('produk.')->group(
        function () {

            Route::get('/tampildata', 'tampildata')->name('tampildata');

            Route::get('/tambahdata', 'tambahdata')->name('tambahdata');

            Route::post('/insertdata', 'insertdata')->name('insertdata');

            Route::get('/detaildata/{id}', 'detaildata')->name('detaildata');

            Route::post('/updatedata/{id}', 'updatedata')->name('updatedata');

            Route::get('/deletedata/{id}', 'deletedata')->name('deletedata');
        }

    );


Route::get('/dashboard', function () {
    return view('dashboard', ["title" => "Halaman Administrator", "judul" => "Halaman Admin"]);
})->middleware(['withAuth'])->name('dashboard');


Route::any("/login", [AuthController::class, "login"])
    ->name('login')
    ->middleware(["noAuth"]);

Route::any("/logout", [AuthController::class, "logout"])
    ->name('logout')
    ->middleware(["withAuth"]);
