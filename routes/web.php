<?php

use App\Http\Controllers\AssetsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\UserController;
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
    return view('backend.auth.login');
});
Route::get('/portofolio', function () {
    return view('Arsha.portofolio');
});
Route::get('/inner', function () {
    return view('Arsha.inner');
});
Route::get('/main', function () {
    return view('Arsha.main');
});

// ROUTING DENGAN CONTROLLER

// routing login
Route::get('/login', [AuthController::class, 'login'])->name('login');

// kiri => routing, tengah=>file controller di sambung dengan :: class, kanan=>'functionnya'
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginProcess', [AuthController::class, 'loginProcess']);

// routing ke halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// routing ke halaman contact
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/contact-add', [ContactController::class, 'add']);
Route::post('/contact-store', [ContactController::class, 'store']);
Route::get('/contact-edit/{id}', [ContactController::class, 'edit']);
Route::post('/contact-update', [ContactController::class, 'update']);
Route::get('/contact-delete/{id}', [ContactController::class, 'destroy']);

// routing ke halaman subscriber
// Route::get('/subscriber', [SubscriberController::class, 'index']);
// Route::get('/subscriber-add', [SubscriberController::class, 'add']);
// Route::post('/subscriber-store', [SubscriberController::class, 'store']);
// Route::get('/subscriber-edit/{id}', [SubscriberController::class, 'edit']);
// Route::post('/subscriber-update', [SubscriberController::class, 'update']);
// Route::get('/subscriber-delete/{id}', [SubscriberController::class, 'destroy']);

// routing ke halaman user
Route::get('/user', [UserController::class, 'index']);
Route::get('/user-add', [UserController::class, 'add']);
Route::post('/user-store', [UserController::class, 'store']);
Route::get('/user-edit/{id}', [UserController::class, 'edit']);
Route::post('/user-update', [UserController::class, 'update']);
Route::get('/user-delete/{id}', [UserController::class, 'destroy']);

// routing ke halaman assets
Route::get('/assets', [AssetsController::class, 'index']);
Route::get('/assets-add', [AssetsController::class, 'add']);
Route::post('/assets-store', [AssetsController::class, 'store']);
Route::get('/assets-edit/{id}', [AssetsController::class, 'edit']);
Route::post('/assets-update', [AssetsController::class, 'update']);
Route::get('/assets-delete/{id}', [AssetsController::class, 'destroy']);


