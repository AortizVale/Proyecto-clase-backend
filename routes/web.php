<?php

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

Route::get('producto-mi-categoria', function () {
    return "Estoy en la pagina de producto";
});
Route::get('productos/create', function () {
    return "Aquí va a estar el formulario de la creacion de archivos";
});
Route::get('productos/{id}', function ($id) {
    return "el nombre del producto es {$id}";
});




