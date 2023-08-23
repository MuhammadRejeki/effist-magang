<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CompanyController;

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

Route::get('/logout', [LoginController::class, 'logout']);
Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'authenticate']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [PageController::class, 'index']);
    Route::get('/home/{id}/view', [PageController::class, 'view']);
    Route::post('/data-users', [PageController::class, 'data_users']);



    Route::get('/users', [UserController::class, 'index']);


    Route::get('/news', [NewsController::class, 'index']);
    Route::post('/news', [NewsController::class, 'tambah']);
    Route::post('/news/list', [NewsController::class, 'list']);
    Route::post('/news/data', [NewsController::class, 'data']);
    Route::post('/news/save', [NewsController::class, 'save_data']);
    Route::post('/news/hapus', [NewsController::class, 'hapus']);


    Route::get('/company', [CompanyController::class, 'index']);
    Route::post('/company', [CompanyController::class, 'tambah']);
    Route::post('/company/list', [CompanyController::class, 'list']);
    Route::post('/company/data', [CompanyController::class, 'data']);
    Route::post('/company/save', [CompanyController::class, 'save_data']);
    Route::post('/company/hapus', [CompanyController::class, 'hapus']);
});
