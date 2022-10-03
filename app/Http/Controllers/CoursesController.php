<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Recording;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoursesController extends Controller
{
    public function index(){
        $courses = Course::all();
        return view('course', compact('courses'));
    }

    public function signUp(Request $request) {
        
        $fields = $request->validate([
            'course_id' => 'required',
            'group_id' => 'required',
        ]);

        if (Auth::check()) {
            $recording = new Recording();
            $recording->user_id = Auth::id();
            $recording->course_id = $fields['course_id'];
            $recording->group_id = $fields['group_id'];
            $recording->save();

            return redirect()->back()->withSuccess('Заявка на курс отправлена, с вами свяжется администратор');
        }
    }
}
