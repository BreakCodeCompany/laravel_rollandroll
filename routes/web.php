<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controller_productos;

Route::get('/', function () {
    return view('index');
});

Route::get('/productos', [controller_productos::class, 'index'])->name('productos.index');
Route::get('/add_producto', [controller_productos::class, 'create'])->name('productos.add_producto');
Route::post('/add_producto/registro', [controller_productos::class, 'store'])->name('productos.add');
Route::get('/show_producto', [controller_productos::class, 'show'])->name('productos.show_producto');

