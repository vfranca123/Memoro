<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\loginController;

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
Route::get('/',[DashboardController::class, 'index'])->name('login');
Route::get('/HomePage',[DashboardController::class, 'homepage'])->name('Homepage.index');

Route::get('/cadastrar',[CadastroController::class, 'index'])->name('Cadastro.index');
Route::post('/cadastrar/store',[CadastroController::class, 'store'])->name('Cadastro.store');

Route::get('/login/authenticate', [loginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');
//Route::get('/sono/{user}', [SonoController::class, 'show'])->name('sono.show');
