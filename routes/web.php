<?php

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

Route::get('/pagina1', function () {
    return view('pagina1',[
        'name' => 'Camilo Cordoba',
        'tel' => '317-726-6681',
        'email' => 'Cordoba4.com@gmail.com'
    ]);
});

Route::get('/pagina2/{No}', function ($No) {
    return view('pagina2')->with('No',$No);
});