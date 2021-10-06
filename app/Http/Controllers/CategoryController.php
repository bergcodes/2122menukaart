<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCreate()
    {
        return view('category.create');
    }

    public function postCreate()
    {
        return "GELUKT!";
    }
}
