<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Course;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::all();
        $news = News::orderBy('created_at', 'desc')->limit(5)->get();
        $reviews = Review::where('is_public', true)->get();
        $reviews_1 = Review::orderBy('id_user')->limit(1)->get();
        return view('home', compact('courses', 'news', 'reviews', 'reviews_1'));
    }
}
