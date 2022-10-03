<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Contacts;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        $courses = Course::all();
        $news = News::orderBy('created_at', 'desc')->limit(5)->get();
        return view('home', compact('courses', 'news'));
    }

    public function about(){
        $teachers = Teacher::all();
        return view('about', compact('teachers'));
    }

    public function course(){
        $courses = Course::all();
        return view('course', compact('courses'));
    }

    public function new(){
        $news = News::all();
        return view('new', compact('news'));
    }

    public function contact(){
        $contacts = Contacts::all();
        return view('contact', compact('contacts'));
    }
}
