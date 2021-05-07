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

    $pasta = config('pasta');

    $collection = collect($pasta);

    $pasta_lunga = $collection->where('tipo', 'lunga');
    $pasta_corta = $collection->where('tipo', 'corta');
    $pasta_cortissima = $collection->where('tipo', 'cortissima');

    $data = [
        'formati' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];

    return view('home', $data);
})->name('homepage');

Route::get('/products', function () {

    $pasta = config('pasta');

    $collection = collect($pasta);

    $pasta_lunga = $collection->where('tipo', 'lunga');
    $pasta_corta = $collection->where('tipo', 'corta');
    $pasta_cortissima = $collection->where('tipo', 'cortissima');

    $data = [
        'formati' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];

    return view('products', $data);
})->name('products_page');

Route::get('/news', function () {

    $pasta = config('pasta');

    $collection = collect($pasta);

    $pasta_lunga = $collection->where('tipo', 'lunga');
    $pasta_corta = $collection->where('tipo', 'corta');
    $pasta_cortissima = $collection->where('tipo', 'cortissima');

    $data = [
        'formati' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];

    return view('news', $data);
})->name('news_page');

Route::get('/details/{id}', function ($id) {

    $pasta = config('pasta');

    $collection = collect($pasta);

    $pasta_lunga = $collection->where('tipo', 'lunga');
    $pasta_corta = $collection->where('tipo', 'corta');
    $pasta_cortissima = $collection->where('tipo', 'cortissima');

    $data = [
        'formati' => [
            'lunga' => $pasta_lunga,
            'corta' => $pasta_corta,
            'cortissima' => $pasta_cortissima
        ]
    ];

    $pasta = config('pasta');

    $product = [
        'formato' => $pasta[$id],
        'id' => $id
    ];

    return view('details', $data, $product);
})->name('details_product');



