<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        // return json_encode($articles);
        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);
        return redirect('/articles');
    }

    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article, Request $request)
    {
        $article->title = $request->title;
        $article->description = $request->description;
        $article->category_id = $request->category_id;
        $article->save();

        return redirect('/articles');
    }

    public function delete(Article $article)
    {
        $article->delete();
        return redirect('/articles');
    }
}
