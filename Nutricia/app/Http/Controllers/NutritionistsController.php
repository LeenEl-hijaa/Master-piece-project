<?php

namespace App\Http\Controllers;
use App\Models\Nutritionists;

use Illuminate\Http\Request;

class NutritionistsController extends Controller
{
    public function getNutritionst ($id)
    {
        $nutritionst = Nutritionists::where('category_id',$id)->get();//[{},{}]
        // dd($nutritionst);
        return view('nutritionists',compact('nutritionst'));
    }
}
