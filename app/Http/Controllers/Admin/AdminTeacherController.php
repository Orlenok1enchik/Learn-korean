<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teacher.index', [
            'teachers' => $teachers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'lastname' => 'required',
            'education' => 'required',
            'email' => 'email|required',
            'password' => 'required',
            'experience' => 'required',
            'text_more' => 'required',
            'photo' => 'required'
        ]);

        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->surname = $request->surname;
        $teacher->lastname = $request->lastname;
        $teacher->education = $request->education;
        $teacher->email = $request->email;
        $teacher->text_more = $request->text_more;
        $teacher->experience = $request->experience;
        $teacher->password = Hash::make($request->password);
        $teacher->is_admin = $request->is_admin == 'on';
        $teacher->photo = '/image/'.$_FILES['photo']['name'];
        if (!empty($_FILES)){
            move_uploaded_file(
                $_FILES['photo']['tmp_name'],
                'image/' . $_FILES['photo']['name']
            );
        }
        $teacher->save();

        return Redirect()->back()->withSuccess('Новый учитель был добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('admin.teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->name = $request->name;
        $teacher->surname = $request->surname;
        $teacher->lastname = $request->lastname;
        $teacher->education = $request->education;
        $teacher->email = $request->email;
        $teacher->text_more = $request->text_more;
        $teacher->experience = $request->experience;
        $teacher->password = Hash::make($request->password);
        $teacher->is_admin = $request->is_admin == 'on';
        $teacher->photo = '/image/'.$_FILES['photo']['name'];

        if (!empty($_FILES)){
            move_uploaded_file(
                $_FILES['photo']['tmp_name'],
                'image/' . $_FILES['photo']['name']
            );
        }
        if ($_FILES['photo']['name']==""){
            $teacher->photo = $request->photo_hidden;
        }
        $teacher->save();

        return redirect()->back()->withSuccess('Информация об учителе была изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Teacher::find($id)->delete();
        return redirect()->back()->withSuccess('Учитель был удалён');
    }
}
