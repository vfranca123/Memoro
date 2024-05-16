<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\PerfilController;

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
Route::get('/HomePage',[DashboardController::class, 'homepage'])->name('Homepage.index')->middleware('auth');

Route::get('/cadastrar',[CadastroController::class, 'index'])->name('Cadastro.index');
Route::post('/cadastrar/store',[CadastroController::class, 'store'])->name('Cadastro.store');

Route::get('/login/authenticate', [loginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');

Route::post('/post/store',[PostController::class, 'store'])->name('Post.store');

Route::get('/inventario/adicionarProduto/{id}', [InventarioController::class, 'storeIndex'])->name('inventario.adicionarProduto.index');
Route::get('/inventario/{id}', [InventarioController::class, 'index'])->name('inventario.index');
Route::post('/produto/store',[InventarioController::class,'store'])->name('produto.store');
Route::delete('/produto/{id}',[InventarioController::class, 'destroy'])->name('produto.destroy');

Route::get('/perfil/{id}',[PerfilController::class, 'index'])->name('perfil.index');
Route::put('/perfil/{user}/update',[PerfilController::class, 'update'])->name('perfil.update');
Route::get('/perfil/updateIndex/{user}',[PerfilController::class, 'updateIndex'])->name('perfil.updateIndex');





