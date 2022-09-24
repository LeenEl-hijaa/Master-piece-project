<?php

use App\Http\Controllers\BookingController;
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

Route::get('/home1',[CategoryController::class , 'getCategory']);

Route::get('/about', function () {
    return view('about');
});

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
Route::get('/category', [CategoryController::class,'showCategories']);


Route::get('/book', [BookingController::class, 'getBooking']);
Route::post('book', [BookingController::class, 'postBooking']);


// Admin Route dashboard

//category table rout
Route::get('category',[CategoryController::class , 'showCategory']);

//add new category rout
Route::get('add_category',[CategoryController::class,'form_category']);
Route::post('add_category',[CategoryController::class,'add_category']);

//update category route
Route::get('update_category/{id}',[CategoryController::class,'form_category_update']);
Route::post('update_category',[CategoryController::class,'update_category']);

//delete category route

Route::get('delete_category/{id}',[CategoryController::class,'delete_category']);

//nutritionist table rout
Route::get('nutritionist',[NutritionistsController::class , 'showNutritionist']);


//add new nutritionist rout
Route::get('add_nutritionist',[NutritionistsController::class,'form_nutritionist']);
Route::post('add_nutritionist',[NutritionistsController::class,'add_nutritionist']);

//update nutritionist route
Route::get('update_nutritionist/{id}',[NutritionistsController::class,'form_nutritionist_update']);
Route::post('update_nutritionist',[NutritionistsController::class,'update_nutritionist']);

//delete nutritionist route

Route::get('delete_nutritionist/{id}',[NutritionistsController::class,'delete_nutritionist']);

//recipe table rout
Route::get('recipe',[RecipeController::class , 'showRecipe']);


//add new recipe rout
Route::get('add_recipe',[RecipeController::class,'form_recipe']);
Route::post('add_recipe',[RecipeController::class,'add_recipe']);

//update recipe route
Route::get('update_recipe/{id}',[RecipeController::class,'form_recipe_update']);
Route::post('update_recipe',[RecipeController::class,'update_recipe']);

//delete recipe route

Route::get('delete_recipe/{id}',[RecipeController::class,'delete_recipe']);