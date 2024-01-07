<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UploaderController;
use App\http\Controllers\SuperAdminController;
use App\http\Controllers\AdminController;
use App\http\Controllers\UserController;
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

Route::get('/', function () {
    return view('file_data');
});

Route::prefix('file')->group(function () {
    Route::controller(UploaderController::class)->group(function(){
        Route::get('data','index')->name("data");
        Route::post('file-import', 'fileImport')->name('file-import');
        Route::get('file-export', 'fileExport')->name('file-export');
    });
});
Route::controller(SuperAdminController::class)->group(function(){
    Route::get('/superadmin',"index");
});
Route::controller(AdminController::class)->group(function(){
    Route::get('/admin',"index");
});
Route::controller(UserController::class)->group(function(){
    Route::get('/login',"index")->name("login");
});
Route::get('/file-route', 'UploaderController@file')->name('file_route');


