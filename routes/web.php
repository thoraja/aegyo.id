<?php

use App\Http\Controllers\API\Content\ArticleController as APIArticleController;
use App\Http\Controllers\API\Content\CategoryController as APICategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Content\ArticleController;
use App\Http\Controllers\Content\CategoryController;

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
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('articles', ArticleController::class);
});

Route::prefix('api')->group(function () {
    Route::apiResource('categories', APICategoryController::class);
    Route::apiResource('articles', APIArticleController::class);
});
