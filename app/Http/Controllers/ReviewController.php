<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function index(Request $request){
        $fields = $request->validate([
            'text'=>'required'
        ]);

        Review::create([
            'id_user'=>Auth::id(),
            'text'=> $fields['text'],
        ]);

        return redirect()->route('home', 'reviews');
    }

    public function review(){
        $reviews = Review::where('is_public', true)->get();
        return view('reviews', compact('reviews'));
 }
}
