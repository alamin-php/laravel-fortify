<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    /**
     * category view method
     */
    public function index()
    {
        $category = Category::paginate(5);
        return view('admin.category.index', compact('category'));
    }
}
