<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\LineaController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\PublicoController;

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

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('Login');
});
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::get('/create-login', [LoginController::class, 'create'])->name('create_login');
Route::POST('/guardar', [LoginController::class, 'guardar'])->name('guardar');

Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::get('/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');
Route::resource('productos', ProductoController::class);

Route::get('/clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::get('/clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');
Route::resource('clientes', ClienteController::class);

Route::GET('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::GET('/categorias/{id}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');
Route::resource('categorias', CategoriaController::class);

Route::get('/ventas/create', [VentaController::class, 'store'])->name('ventas.create');
Route::get('/ventas/{id}', [VentaController::class, 'destroy'])->name('ventas.destroy');
Route::resource('ventas', VentaController::class);

Route::get('/lineas/create', [LineaController::class, 'create'])->name('ventas.create');
Route::get('/lineas/{id}', [LineaController::class, 'destroy'])->name('ventas.destroy');
Route::resource('lineas', LineaController::class);



Route::get('publico/comprar', [PublicoController::class, 'comprar'])->name('publico.comprar');
Route::resource('publico', PublicoController::class);

Route::get('/admin', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('Login');
});
Route::post('/', [LoginController::class, 'login'])->name('login');
Route::get('/create-login', [LoginController::class, 'create'])->name('create_login');
Route::POST('/guardar', [LoginController::class, 'guardar'])->name('guardar');




