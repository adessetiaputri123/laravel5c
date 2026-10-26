<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::withCount('tasks')
            ->latest()
            ->get();

        return view('categories', compact('categories'));
    }
}
