<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use App\Models\User;
use App\Models\Group;
use App\Models\Course;
use App\Models\Review;
use App\Models\Teacher;
use App\Models\Questions;
use App\Models\Recording;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function index() {
        if (auth()->user()->is_admin) {
            $news_count = News::all()->count();
            $teachers_count = Teacher::all()->count();
            $reviews_count = Review::all()->count();
            $reviews_unread_count = Review::where('is_read', null)->count();
            $users_count = User::all()->count();
            $recordings_count = Recording::all()->count();
            $recordings_unread_count = Recording::where('is_read', null)->count();
            $groups_count = Group::all()->count();
            $courses_count = Course::all()->count();
            $questions_unread_count = Questions::where('is_read', null)->count();
            $questions_count = Questions::all()->count();
            
            return view('admin.home.index', [
                'news_count' => $news_count,
                'teachers_count' => $teachers_count,
                'reviews_count' => $reviews_count,
                'reviews_unread_count' => $reviews_unread_count,
                'users_count' => $users_count,
                'recordings_count' => $recordings_count,
                'recordings_unread_count' => $recordings_unread_count,
                'groups_count' => $groups_count,
                'courses_count' => $courses_count,
                'questions_unread_count' => $questions_unread_count,
                'questions_count' => $questions_count,
            ]);
        }
        return redirect('/');
    }
}
