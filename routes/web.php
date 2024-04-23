<?php

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    // return view('dashboard');
    return redirect()->route('usuarios.index');
})->middleware(['auth'])->name('dashboard');

Route::get('/usuarios', [UserController::class, 'index'])->middleware(['auth'])->name('usuarios.index');
Route::get('/usuarios/create', [UserController::class, 'create'])->middleware(['auth'])->name('usuarios.create');
Route::post('/usuarios', [UserController::class, 'store'])->middleware(['auth'])->name('usuarios.store');
Route::get('/usuarios/{id}', [UserController::class, 'show'])->middleware(['auth'])->name('usuarios.show');
Route::get('/usuarios/{id}/edit', [UserController::class, 'edit'])->middleware(['auth'])->name('usuarios.edit');
Route::put('/usuarios/{id}', [UserController::class, 'update'])->middleware(['auth'])->name('usuarios.update');
Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])->middleware(['auth'])->name('usuarios.destroy');

require __DIR__ . '/auth.php';
