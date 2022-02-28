<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExternalWeddingController;
use App\Http\Controllers\ExtraServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ContactController;

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
    return view('layouts.index');
});

Route::get('external-wedding', [App\Http\Controllers\ExternalWeddingController::class, 'index'])->name('external-wedding');
Route::get('extra-serveice', [App\Http\Controllers\ExtraServiceController::class, 'index'])->name('extra-serveice');
Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('create', [App\Http\Controllers\RegisterController::class, 'index'])->name('create');
Route::get('wedding', [App\Http\Controllers\WeddingController::class, 'index'])->name('wedding');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('user-profile-insert', [App\Http\Controllers\RegisterController::class, 'store'])->name('user-profile-insert');
Route::get('dashboard', [App\Http\Controllers\DashbordController::class, 'index'])->name('dashboard');
Route::get('customer-list', [App\Http\Controllers\DashbordController::class, 'fetechcustomer'])->name('customer-list');
Route::get('customer-profile/{id}', [App\Http\Controllers\DashbordController::class, 'showProfile'])->name('customer-profile');
Route::get('customer-list/changeStatus', [App\Http\Controllers\DashbordController::class, 'changeSatatus'])->name('customer-profile');
Route::get('customer-profile-userside/{id}', [App\Http\Controllers\ExternalWeddingController::class, 'showProfile'])->name('customer-profile-userside');
Route::post('addcontact', [App\Http\Controllers\ContactController::class, 'store'])->name('addcontact');




Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');