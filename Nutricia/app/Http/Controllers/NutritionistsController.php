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

public function showNutritionist(){
    $ntritionists = Nutritionists::all();//[{},{}]
    // dd($categoires);
    return view('admin.nutritionist',compact('ntritionists'));
}

public function form_nutritionist()
{
    return view('admin.add_nutritionist');
}
public function add_nutritionist(Request $request)
    {
        $nutritionist = new Nutritionists();

        //this code to save the image in folder
        $request->file('image')->store('public/nutritionist_images');

        $nutritionist->nutritionist_name = $request->name;
        $nutritionist->nutritionist_image = $request->file('image')->store('storage/nutritionist_images');
        $nutritionist->nutritionist_description = $request->description;
        $nutritionist->nutritionist_name = $request->name;

        $nutritionist->save();

        return redirect('add_nutritionist')->with('success','nutritionist has been added successfully');
    }

    public function form_nutritionist_update($id)
    {
        $nutritionist = Nutritionists::find($id);
        return view('admin.update_nutritionist',compact('nutritionist'));
    }
    public function update_nutritionist(Request $request)
    {
        $id = $request->id;
        $nutritionist = Nutritionists::find($id);
        $nutritionist->nutritionist_name = $request->name;
        $nutritionist->nutritionist_description = $request->description;

        if($request->file('image')){
            $request->file('image')->store('public/nutritionist_images');
            $nutritionist->nutritionist_image = $request->file('image')->store('storage/nutritionist_images');
        }
        $nutritionist->save();
        return redirect('nutritionist');
    }
    public function delete_nutritionist($id)
    {
        $nutritionist = Nutritionists::find($id);
        $nutritionist->delete();

        return redirect('nutritionist');
}
}