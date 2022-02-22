<?php

use App\Http\Controllers\CategoryController;
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

require __DIR__ . '/auth.php';
