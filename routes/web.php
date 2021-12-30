<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\MainPagesControlle;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('pages.index');
});
// Route::get('/admin/dashboard', function(){
//     return view('pages.dashboard')->name('admin.dashboard');
// });

// Route::get('/admin/dashboard', 'PagesController@dashboard')->name('admin.dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/dashboard', [App\Http\Controllers\PagesController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/main', [App\Http\Controllers\MainPagesController::class, 'index'])->name('admin.main');
Route::put('/admin/main', [App\Http\Controllers\MainPagesController::class, 'update'])->name('admin.main.update');
