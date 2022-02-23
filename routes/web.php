<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
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
    $categories = App\Models\Category::all();
    return view('dashboard', compact('categories'));
})->middleware(['auth'])->name('dashboard');

Route::get('all-categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('create-category', [CategoryController::class, 'create'])->name('category.create');
Route::post('store-category', [CategoryController::class, 'store'])->name('category.store');
Route::get('delete-category/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('update-category', [CategoryController::class, 'update'])->name('category.update');

Route::get('all-blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('delete-blog/{id}', [BlogController::class, 'destroy'])->name('blog.delete');
Route::get('edit-blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::get('create-blog', [BlogController::class, 'create'])->name('blog.create');
Route::post('store-blog', [BlogController::class, 'store'])->name('blog.store');


require __DIR__ . '/auth.php';
