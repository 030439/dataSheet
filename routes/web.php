<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\UploaderController;
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
    return view('file');
});

Route::prefix('file')->group(function () {
    Route::controller(UploaderController::class)->group(function(){
        Route::get('data','index')->name("data");
        Route::post('file-import', 'fileImport')->name('file-import');
        Route::get('file-export', 'fileExport')->name('file-export');
    });
});
// routes/web.php

Route::get('/file-route', 'UploaderController@file')->name('file_route');


