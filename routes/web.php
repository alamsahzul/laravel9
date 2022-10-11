<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DosenController;
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

Route::get('/template', function () {
    $data['title'] = "Hie";
    return view('template', $data);
});

Route::get('/hello', [HomeController::class, 'index']);

Route::resource('dosen', DosenController::class);

// Route::get('/dosen', [DosenController::class, 'index']);
// Route::get('/dosen/create', [DosenController::class, 'create']);
// Route::post('/dosen', [DosenController::class, 'store']);
// Route::get('/dosen/{dosen}/edit', [DosenController::class, 'edit']);
// Route::put('/dosen/{dosen}', [DosenController::class, 'update']);
// Route::delete('/dosen/{dosen}', [DosenController::class, 'delete']);
