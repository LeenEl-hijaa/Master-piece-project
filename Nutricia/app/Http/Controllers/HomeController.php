<?php

namespace App\Http\Controllers;
use App\Models\Recipes;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function home(){
    return view('welcome');
   }
   public function getRecipe ()
   {
       $recipes = Recipes::all();//[{},{}]
       return view('welcome',compact('recipes'));
   }
}
