<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::all();//[{},{}]
        return view('recipes',compact('recipes'));
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipes = Recipe::find($id);
        // dd($recipe);
        return view('singleRecipe', compact('recipes'));
    }

    public function showRecipes ()
    {
       
        return view('recipe',compact('recipes'));
    }
    

    public function showRecipe(){
        $recipes = Recipe::all();//[{},{}]
        // dd($recipes);
        return view('admin.recipe',compact('recipes'));
    }

    public function form_recipe()
    {
        return view('admin.add_recipe');
    }
    public function add_recipes(Request $request)
    {
        $recipes = new Recipe();

        //this code to save the image in folder
        $request->file('image')->store('public/recipe_images');

        $recipes->recipe_name = $request->name;
        $recipes->recipe_image = $request->file('image')->store('storage/recipe_images');
        $recipes->recipe_description = $request->description;

        $recipes->save();

        return redirect('add_recipe')->with('success','Recipe has been added successfully');
    }

    public function form_recipe_update($id)
    {
        $recipes = Recipe::find($id);
        return view('admin.update_recipe',compact('recipes'));
    }
    public function update_recipe(Request $request)
    {
        $id = $request->id;
        $recipes = Recipe::find($id);
        $recipes->recipe_name = $request->name;
        $recipes->recipe_description = $request->description;

        if($request->file('image')){
            $request->file('image')->store('public/recipe_images');
            $recipes->recipe_image = $request->file('image')->store('storage/recipe_images');
        }
        $recipes->save();
        return redirect('recipe');
    }

    public function delete_recipe($id)
    {
        $recipes = Recipe::find($id);
        $recipes->delete();

        return redirect('recipe');
    }
}
