<?php

use App\Http\Controllers\ArticleController;
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

//Article Routes

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index'); //done

Route::get("/articles/create", [ArticleController::class, 'create'])->name('articles.create'); //done

Route::post("/articles", [ArticleController::class, 'store'])->name('articles.store'); //done

Route::get("/articles/{article}", [ArticleController::class, 'show'])->name('articles.show'); //done

Route::get("/articles/{article}/edit", [ArticleController::class, 'edit'])->name('articles.edit'); //done

Route::put("/articles/{article}", [ArticleController::class, 'update'])->name('articles.update'); //done

Route::delete("/articles/{article}", [ArticleController::class, 'delete'])->name('articles.delete'); //done

// Categories Routes

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index'); //done

Route::get("/categories/create", [CategoryController::class, 'create'])->name('categories.create'); //done

Route::post("/categories", [CategoryController::class, 'store'])->name('categories.store'); //done

Route::get("/categories/{category}", [CategoryController::class, 'show'])->name('categories.show'); //done

Route::get("/categories/{category}/edit", [CategoryController::class, 'edit'])->name('categories.edit'); //done

Route::put("/categories/{category}", [CategoryController::class, 'update'])->name('categories.update'); //done

Route::delete("/categories/{category}", [CategoryController::class, 'delete'])->name('categories.delete'); //done
