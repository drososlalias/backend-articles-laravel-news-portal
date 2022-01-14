<?php

use App\Http\Controllers\api\ApiArticleController;
use App\Http\Controllers\api\ApiCategoryController;
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

//Web

Route::resource("/articles", ArticleController::class);
Route::resource("/categories", CategoryController::class);

//Api

Route::resource("/api/articles", ApiArticleController::class);
Route::resource("/api/categories", ApiCategoryController::class);

Route::get("/api/articles/category/{category_id}", [ApiArticleController::class, "getArticlesPerCategoryId"]);

//Admin
Route::get("/admin", function () {
    return view('layouts.admin');
});
