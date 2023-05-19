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


Route::get('/',[App\Http\Controllers\IndexController::class, 'index'])->name('welcome');
Route::get('/blog',[App\Http\Controllers\NewsController::class, 'index'])->name('blog');
Route::group(['middleware' => ['auth:sanctum']], function () {
Route::prefix('admin')->group(function() {
Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin_index');
Route::resource('blog', App\Http\Controllers\BlogController::class);
});
});
Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
