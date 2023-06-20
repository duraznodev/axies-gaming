<?php

use App\Http\Controllers\AuthorCollectionController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthorItemController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use App\Models\Collection;
use App\Models\Item;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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
    $collections = Collection::with('items.media', 'author.media')
        ->withCount('likes')
        ->orderByDesc('likes_count')
        ->get();
    $items = Item::with('author.media', 'media')
        ->withCount('likes')
        ->get();
    $authors = User::with('items.media', 'media')
        ->withSum('items', 'price')
        ->having('items_sum_price', '>', 0)
        ->orderByDesc('items_sum_price')
        ->get();

    return view('index', compact('collections', 'items', 'authors'));
})->name('index');

Route::scopeBindings()->group(function () {
    Route::resource('authors', AuthorController::class)->only(['index', 'show']);
    Route::get('/authors/{author}/items/{item}', [AuthorItemController::class, 'show']);
    Route::delete('/authors/{author}/items/{item}', [AuthorItemController::class, 'destroy']);
    Route::get('/authors/{author}/collections', [AuthorCollectionController::class, 'index']);
});

Route::get('explore', [ExploreController::class, 'index'])->name('explore');

Route::middleware('auth')->group(function () {
    Route::resource('items', ItemController::class);
    Route::post('/items/{item}/like', [ItemController::class, 'like'])->name('items.like');
    Route::resource('collections', CollectionController::class);
    Route::post('/collections/{collection}/like', [CollectionController::class, 'like'])->name('collections.like');
    Route::post('/authors/{author}/follow', [AuthorController::class, 'follow'])->name('authors.follow');
    Route::get('/user', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/user', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/user', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
