<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getCreate()
    {
        $categories = Category::all();
        return view('product.create')->withCategories($categories);
    }

    public function postCreate(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('txtName');
        $product->price = $request->input('txtPrice');
        $product->category_id = $request->input('selCategory');
        $product->save();
        return "Gelukt!";
    }
}
