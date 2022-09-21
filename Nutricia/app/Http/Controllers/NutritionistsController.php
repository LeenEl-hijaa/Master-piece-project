<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Nutritionists;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NutritionistsController extends Controller
{
    public function getNutritionst ($id)
    {
        $nutritionst = Nutritionists::where('category_id',$id)->get();//[{},{}]
        // dd($nutritionst);
        return view('nutritionists',compact('nutritionst'));
    }

public function getBooking ()
{
    $booking = Nutritionists::all();//[{},{}]
    // dd($nutritionst);
    return view('booking',compact('booking'));
}
public function postBooking (Request $request)

{    dd($request);

    $id= Auth::id();
   $book = New Booking();
   $book->name=$request->name;
   $book->email=$request->email;
   $book->phone=$request->phone;
   $book->highet=$request->Height;
   $book->weight=$request->weight;
   $book->birth_date=$request->birth_date;
   $book->book_dietitan=$request->book_dietitan;
   $book->additional_notes=$request->message;
   $book->user_id=1;
   $book->save();
   return redirect('/');

}
}
