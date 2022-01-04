<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

// TODO: csrf token via postman for update,store and delete opetations

class ApiArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return json_encode($articles);
    }

    public function store(Request $request)
    {
        Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);
        return json_encode('Successful Article creation');
    }

    public function show(Article $article)
    {
        return json_encode($article);
    }

    public function update(Article $article, Request $request)
    {
        $article->title = $request->title;
        $article->description = $request->description;
        $article->category_id = $request->category_id;
        $article->save();

        return json_encode('Successful Article update');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return json_encode('Successful Deletion');
    }
}
