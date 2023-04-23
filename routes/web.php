<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\NivelAcessoMiddleware;
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
    return view('main');
});

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::get('/admin',function(){return view('adminview');})->name('admin-area')->middleware([NivelAcessoMiddleware::class]);
Route::get('/cadastro',[ClienteController::class,'index']);
Route::post('/cadastrar',[ClienteController::class,'cadastrar']);

