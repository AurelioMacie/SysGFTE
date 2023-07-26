<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RotaController;
use App\Http\Controllers\MultaController;

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

Route::prefix('multa')->group(function(){
    Route::get('/', [MultaController::class, 'index'])->name('multa');
    Route::get('/create', [MultaController::class, 'create'])->name('multa-create');
    Route::post('/', [MultaController::class, 'store'])->name('multa-store');
    Route::get('/{id}/edit', [MultaController::class, 'edit'])->name('multa-edit');
    Route::put('/{id}', [MultaController::class, 'update'])->name('multa-update');
    Route::delete('/{id}', [MultaController::class, 'destroy'])->name('multa-destroy');
});

Route::get('/', function () {
    return view('welcome');
});

// rota de teste
Route::get('/postagens', function(){
    return view('voyager.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::prefix('rota')->group(function(){
    Route::get('/', [RotaController::class, 'index'])->name('rota');
});

// Auth::routes();

// Route::get('/principal',[App\Http\Controllers\Web\HomeController::class,'home']);