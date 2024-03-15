<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return response()->json($categories);
    }
    public function show($id) {
        $category = Category::find($id);
        return response()->json($category);
    }
    public function store(Request $request) {
        $category = Category::create($request->all());
        return response()->json($category);
    }
}
