<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCreate()
    {
        return view('category.create');
    }

    public function postCreate(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('txtName');
        $category->save();
        return "GELUKT!";
    }
}
