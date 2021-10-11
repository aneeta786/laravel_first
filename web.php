<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login-customs', [App\Http\Controllers\TestController::class, 'index'])->name('c-login');
Route::get('/register-customs', [App\Http\Controllers\RegisterProfileController::class, 'index'])->name('c-register');
Route::get('/create', [App\Http\Controllers\StudentController::class, 'create'])->name('create');
Route::get('/insert', [App\Http\Controllers\ProductController::class, 'create'])->name('insert');
Route::post('/product', [App\Http\Controllers\ProductController::class, 'datainsert'])->name('product');
Route::get('/all-products', [App\Http\Controllers\ProductController::class, 'show'])->name('all-products');
Route::get('/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('/delete/{id}');
Route::get('/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('/edit/{id}');
Route::post('/edit/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('edit.update');
//Route::post('edit/{id}','StudUpdateController@edit');
