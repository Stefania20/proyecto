<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetallesController;
use App\Http\Controllers\FacturasController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\PrendasController;
use App\Http\Controllers\UsersController;


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

Route::get('/index', function () {
    return view('index');
});

Route::get('/detalles_index', function () {
    return view('detalles_index');
});

Route::get('/facturas', function () {
    return view('facturas');
});

Route::get('/pagos', function () {
    return view('pagos');
});

Route::get('/prendas', function () {
    return view('prendas');
});

Route::get('/users', function () {
    return view('users');
});

Route::resource("detalles", "DetallesController")->parameters(["detalles"=>"detalle"]);
Route::resource("facturas", "FacturasController")->parameters(["facturas"=>"factura"]);
Route::resource("pagos", "PagosController")->parameters(["pagos"=>"pago"]);
Route::resource("prendas", "PrendasController")->parameters(["prendas"=>"prenda"]);
Route::resource("users", "UsersController")->parameters(["users"=>"user"]);
