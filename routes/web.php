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
Route::delete('/post/destroy/{post}',[PostController::class, 'destroy'])->name('Post.destroy');
Route::get('/post/like/{post}',[PostController::class,'like'])->name('Post.like');
Route::get('/post/unlike/{post}',[PostController::class,'unlike'])->name('Post.unlike');

Route::get('/inventario/adicionarProduto/{id}', [InventarioController::class, 'storeIndex'])->name('inventario.adicionarProduto.index');
Route::get('/inventario/{id}', [InventarioController::class, 'index'])->name('inventario.index');
Route::post('/produto/store',[InventarioController::class,'store'])->name('produto.store');
Route::delete('/produto/{id}',[InventarioController::class, 'destroy'])->name('produto.destroy');

Route::post('/produto/storeCafe',[InventarioController::class,'storeCafe'])->name('produto.cafe.store');
Route::delete('/cafe/{id}',[InventarioController::class, 'destroyCafe'])->name('cafe.destroy');
Route::get('/inventario/adicionarProdutoCafe/{id}', [InventarioController::class, 'storeCafeIndex'])->name('inventario.adicionaCafe.index');

Route::get('/inventario/adicionarProdutoTabaco/{id}', [InventarioController::class,'storeTabacoIndex'])->name('inventario.adicionaTabaco.index');
Route::post('/produto/storeTabaco',[InventarioController::class,'storeTabaco'])->name('produto.tabaco.store');
Route::delete('/tabaco/{id}',[InventarioController::class, 'destroyTabaco'])->name('tabaco.destroy');

Route::get('/inventario/adicionarProdutoQueijo/{id}', [InventarioController::class,'storeQueijoIndex'])->name('inventario.adicionaQueijo.index');
Route::post('/produto/storeQueijo',[InventarioController::class,'storeQueijo'])->name('produto.queijo.store');
Route::delete('/queijo/{id}',[InventarioController::class, 'destroyQueijo'])->name('queijo.destroy');

Route::get('/perfil/{id}',[PerfilController::class, 'index'])->name('perfil.index');
Route::put('/perfil/{user}/update',[PerfilController::class, 'update'])->name('perfil.update');
Route::get('/perfil/updateIndex/{user}',[PerfilController::class, 'updateIndex'])->name('perfil.updateIndex');





