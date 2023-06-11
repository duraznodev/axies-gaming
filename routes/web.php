<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthorItemController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use \App\Http\Controllers\CollectionController;

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
    return view('index');
})->name('index');

Route::scopeBindings()->group(function () {
    Route::resource('authors', AuthorController::class)->only(['index', 'show']);
    Route::get('/authors/{author}/{item}', [AuthorItemController::class, 'show']);
});

Route::middleware('auth')->group(function () {
    Route::resource('items', ItemController::class);
    Route::resource('items', ItemController::class);
    Route::resource('collections', CollectionController::class);
    Route::get('/user', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/user', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
