<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index(){
        $questions = Questions::all();
        return view('admin.question.index', compact('questions'));
    }

    public function store(Request $request) {
        $fields = $request->validate([
            'email'=>'required',
            'text'=>'required'
        ]);

        Questions::create([
            'email'=>$fields['email'],
            'text'=> $fields['text'],
        ]);

        return redirect()->route('contact'); 
    }

    public function destroy($id) {
        Questions::find($id)->delete();
        return redirect()->back()->withSuccess('Вопрос успешно удалён');
    }

    public function question(){
        $questions = Questions::where('is_public', true)->get();
        return view('question', compact('question'));
    }
}
