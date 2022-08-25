<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NutritionistsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RecipeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// {{route('product.show',$id)}}

Route::resource('recipes',RecipeController::class);

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home1', function () {
//     return view('index');
// });

//Route::get('/home1');
//,[CategoryController::class , 'getCategory']
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::resource('contact', ContactController::class);

Route::get('/dietpackages',[categoryController::class, 'getCategory']);
Route::get('/nutritionists/{id}',[NutritionistsController::class, 'getNutritionst']);



Route::get('/singleRecipe', function () {
    return view('singleRecipe');
});
Auth::routes();


Route::get('/home', [HomeController::class, 'home'])->name('home');


Route::get('/blank', function () {
    return view('/admin/blank');
    
});

Route::get('/table', function () {
    return view('/admin/tables');
    
});

