<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategory ()
    {
        $categoires = Category::all();//[{},{}]
        // dd($categoires);
        return view('dietpackages',compact('categoires'));
    }
}
