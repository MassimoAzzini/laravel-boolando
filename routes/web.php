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
    return view('home');
})->name('home');

Route::get('/dettaglio-prodotto/{slug}', function ($slug) {

    $products = config('products');

    $product_array = array_filter($products, fn($product) => $product['id'] == $slug);

    if(empty($product_array)) {
        abort(404);
    }

    $product = $product_array[array_key_first($product_array)];


    return view('productDetail', compact('product'));
})->name('productDetail');

Route::get('/informazioni-legali', function () {
    return view('legalInformation');
})->name('legalInformation');

