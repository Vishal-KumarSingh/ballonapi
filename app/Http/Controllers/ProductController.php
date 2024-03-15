<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
class ProductController extends Controller
{
    public function index() {
        $products = Products::all();
        return response()->json($products);
    }
    public function show($id) {
        $product = Products::find($id);
        return response()->json($product);
    }
    public function store(Request $request) {
        $product = Products::create($request->all());
        return response()->json($product);
    }
}
