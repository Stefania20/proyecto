<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetallesController;
use App\Http\Controllers\FacturasController;
use App\Http\Controllers\PagosController;
use App\Http\Controllers\PrendasController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;


use App\Models\Factura;
use Illuminate\Http\Request;


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
})->middleware('auth');

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

/*Route::get('/prendas', function () {
    return view('prendas');
});*/

Route::get('/users', function () {
    return view('users');
});

Route::get('/homes', function () {
    return view('homes');
});

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/register', [RegisterController::class, 'create'])
->middleware('guest')
->name('register.index');

Route::get('/login', [SessionsController::class, 'create'])->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])->name('login.destroy');


Route::resource("detalles", "DetallesController")->parameters(["detalles"=>"detalle"]);
Route::resource("facturas", "FacturasController")->parameters(["facturas"=>"factura"]);
Route::resource("users", "UserController")->parameters(["users"=>"user"]);
Route::resource("prendas", "PrendasController")->parameters(["prendas"=>"prenda"]);
Route::resource("homes", "RegisterController")->parameters(["homes"=>"home"]);

Route::get('/user',[UserController::class, 'index'])
->middleware('auth.user')
->name('user.index');
