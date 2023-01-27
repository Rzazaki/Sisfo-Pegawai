<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DataPegawaiController;
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
Route::get('/', function () {return view('auth.login');});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');\

Route::middleware(['auth:sanctum', 'user'])->group(function(){
    Route::resource('/dashboard', DashboardController::class)->except('logout');
    Route::post('/logout', [DashboardController::class, 'logout']);

    
    Route::resource('/pegawai', DataPegawaiController::class);
});
// Route::middleware(['auth:sanctum',config('jetstream.auth_session')])->prefix('dashboard')->group(function () {
//     // Route::resource('/', DashboardController::class)->except('logout');
//     // Route::post('/logout', [DashboardController::class, 'logout']);
    
//      Route::resource('/pegawai', DataPegawaiController::class);
//     // Route::middleware('user')->group(function() {
       
//     // });
// });

// require __DIR__.'/auth.php';
