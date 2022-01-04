<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        // return json_encode($categories);
        return view('categories.index', ['categories' => $categories]);
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        Category::create([
            'NAME' => $request->name,
        ]);
        return redirect('/categories');
    }

    public function show(Category $category)
    {
        return view('categories.show', ['category' => $category]);
    }

    public function edit(Category $category)
    {
        return view('categories.edit', ['category' => $category]);
    }

    public function update(Category $category, Request $request)
    {
        $category->name = $request->name;
        $category->articles = $request->articles;
        $category->save();

        return redirect('/categories');
    }

    public function delete(Category $category)
    {
        $category->delete();
        return redirect('/categories');
    }
}
