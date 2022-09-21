<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Nutritionists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{
    public function getBooking ()
{

    $booking = Nutritionists::all();//[{},{}]
    // dd($nutritionst);
    return view('booking',compact('booking'));
}
public function postBooking (Request $request)

{    

    $id= Auth::id();
   $book = New Booking();
   $book->name=$request->name;
   $book->email=$request->email;
   $book->phone=$request->phone;
   $book->highet=$request->height;
   $book->weight=$request->Weight;
   $book->birth_date=$request->date;
   $book->book_dietitan=$request->select;
   $book->additional_notes=$request->message;
   $book->user_id=1;
   $book->save();
   return redirect('/book')->with('sucess' , 'Booking has been added successfully');

}
}
