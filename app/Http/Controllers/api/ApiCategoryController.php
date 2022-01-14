<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

// TODO: csrf token via postman for update,store and delete opetations

class ApiCategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return json_encode($categories);
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories'
        ]);

        Category::create([
            'name' => $request->name
        ]);
        return json_encode('Successful Category Creation');
    }

    public function show(Category $category)
    {
        return json_encode($category);
    }

    public function update(Category $category, Request $request)
    {
        $category->name = $request->name;
        $category->articles = $request->articles;
        $category->save();

        return json_encode('Successful Category Update');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return json_encode('Successful Category Deletion');
    }
}
