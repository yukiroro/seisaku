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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('items')->group(function () {
Route::get('/', [App\Http\Controllers\ItemController::class, 'index'])->name('index');//一覧
Route::get('/add', [App\Http\Controllers\ItemController::class, 'add'])->name('add');//追加
Route::post('/add', [App\Http\Controllers\ItemController::class, 'add'])->name('add');//追加更新
Route::get('/edit/{id}', [App\Http\Controllers\ItemController::class,'edit'])->name('edit');//編集画面へ移動//
Route::post('/edit/{id}', [App\Http\Controllers\ItemController::class,'update'])->name('update');//編集更新//
Route::post('/delete', [App\Http\Controllers\ItemController::class, 'delete'])->name('delete');//削除
});
