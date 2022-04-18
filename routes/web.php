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
})->name('main');


Route::get('products', function () {
    return 'esta es la lista de productos';
})->name('products.index');


Route::get('products/create', function () {
    return 'esta es el formulario para crear un producto';
})->name('products.create');

Route::post('products', function () {
    //return 'esta es el formulario para crear un producto';
})->name('products.store');


Route::get('products/{product}', function ($product) {
    return "mostrar un producto con el id {$product}";
})->name('products.show');


Route::get('products/{product}/edit', function ($product) {
    return "formulario para editar un producto con el id {$product}";
})->name('products.edit');

Route::match(['put', 'patch'], 'products/{product}/edit', function ($product) {
    // return "formulario para editar un producto con el id {$product}";
})->name('products.update');

Route::delete('products/{product}', function ($product) {
    // return "formulario para editar un producto con el id {$product}";
})->name('products.destroy');

