<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProductController;
use \App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SongController;
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



// Route::get('/', function () {
//     return "Bienvenido a la pagina principal";
// });


Route::get('/', HomeController::class);

Route::resource('songs', SongController::class)->names('songs');

Route::resource('movies', MovieController::class)->names('movies');

Route::resource('games', GameController::class)->names('games');


Route::resource('products', ProductController::class)->names('products');
// Route::controller(ProductController::class)->group(function () {
//     Route::get('/products', 'index')->name('products.index');
//     Route::post('/products', 'store')->name('products.store');
//     Route::get('/products/create', 'create')->name('products.create');
//     Route::get('/products/{product}/edit', 'edit')->name('products.edit');
//     Route::put('/products/{product}', 'update')->name('products.update');
//     Route::get('/products/{product}', 'show')->name('products.show');
//     Route::delete('/products/{product}', 'destroy')->name('products.destroy');
// });

Route::controller(AnimalController::class)->group(function () {
    Route::get('/animales', 'index')->name('animales.index');
    Route::get('/animales/create', 'create')->name('animales.create');
    Route::post('animales', 'store')->name('animales.store');
    Route::get('/animales/{animal}', 'show')->name('animales.show');
    Route::get('/animales/{animal}/edit', 'edit')->name('animales.edit');
    Route::put('/animales/{animal}', 'update')->name('animales.update');
    Route::delete('/animales/{animal}', 'destroy')->name('animales.destroy');
});

// Route::resource('animales', AnimalController::class)->names('animales');
