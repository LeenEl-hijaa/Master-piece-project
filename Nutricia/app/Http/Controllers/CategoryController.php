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
    public function showCategories ()
    {
       
        return view('dietpackages',compact('categoires'));
    }
    

    public function showCategory(){
        $categoires = Category::all();//[{},{}]
        // dd($categoires);
        return view('admin.category',compact('categoires'));
    }

    public function form_category()
    {
        return view('admin.add_category');
    }
    public function add_category(Request $request)
    {
        $category = new Category();

        //this code to save the image in folder
        $request->file('image')->store('public/category_images');

        $category->category_name = $request->name;
        $category->category_image = $request->file('image')->store('storage/category_images');
        $category->category_description = $request->description;

        $category->save();

        return redirect('add_category')->with('success','Category has been added successfully');
    }

    public function form_category_update($id)
    {
        $category = Category::find($id);
        return view('admin.update_category',compact('category'));
    }
    public function update_category(Request $request)
    {
        $id = $request->id;
        $category = Category::find($id);
        $category->category_name = $request->name;
        $category->category_description = $request->description;

        if($request->file('image')){
            $request->file('image')->store('public/category_images');
            $category->category_image = $request->file('image')->store('storage/category_images');
        }
        $category->save();
        return redirect('category');
    }

    public function delete_category($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect('category');
    }
}
