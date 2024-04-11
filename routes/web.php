<?php

use App\Http\Controllers\BusinessController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProdutosController;
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


Route::prefix('user')->group(function () {
    Route::get('show/{id}',[UserController::class,'show'])->name('user.show');
    Route::get('/create/{id}',[UserController::class,'create'])->name('user.create');
    Route::get('edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::get('delete/{id}',[UserController::class,'delete'])->name('user.delete');
});

Route::prefix('posts')->group(function () {
    Route::get('/{id}',[PostsController::class,'show'])->name('post.show');
    Route::get('/create/{id}',[PostsController::class,'create'])->name('post.create');
    Route::get('edit/{id}',[PostsController::class,'edit'])->name('post.edit');
    Route::get('delete/{id}',[PostsController::class,'delete'])->name('post.delete');
});

Route::get('business',[BusinessController::class,'index'])->name('business.index');
Route::get('business/create',[BusinessController::class,'create'])->name('business.create');
Route::post('business/store',[BusinessController::class,'store'])->name('business.store');
Route::post('business/show',[BusinessController::class,'show'])->name('business.show');
Route::post('business/update',[BusinessController::class,'update'])->name('business.update');
Route::post('business/destroy',[BusinessController::class,'destroy'])->name('business.destroy');

//PRODUTOS«««««««««««««««««««««««««««««»»»»»»»»»»»»»»»»»»»»»»»»»
Route::get('/',[ProdutosController::class,'index'])->name('produtos.index');
Route::get('/show',[ProdutosController::class,'show'])->name('produtos.show');
Route::post('/store',[ProdutosController::class,'store'])->name('produtos.store');
Route::get('/edit/{id}',[ProdutosController::class,'edit'])->name('produtos.edit');
