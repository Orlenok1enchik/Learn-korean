<?php

namespace App\Http\Controllers\Admin;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.courses.index', [
            'courses' => $courses,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin.courses.create', compact('courses'));
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
            'title' => 'required',
            'image' => 'required',
        ]);

        $courses = new Course();
        $courses->title = $request->title;
        $courses->image = '/image/'.$_FILES['image']['name'];

        if (!empty($_FILES)){
            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                'image/' . $_FILES['image']['name']
            );
        }
        if ($_FILES['image']['name']==""){
            $courses->image = $request->image_hidden;
        }
        $courses->save();

        return Redirect()->back()->withSuccess('Курс был добавлен');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courses = Course::where('id', $id)->first();

        // $courses = Course::find($id);

        return view('admin.courses.edit', compact('courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id_courses)
    {
        DB::table('table')->where('id', $id_courses)->update([
            'title' => $request->title,
            'image' => $request->image,
            ]);
            
        $courses = Course::find($id_courses);

        // $courses = Course::where('id_courses', $id)->first();

        dd($courses);
        $courses->title = $request->title;
        $courses->image = '/image/'.$_FILES['image']['name'];

        if (!empty($_FILES)){
            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                'image/' . $_FILES['image']['name']
            );
        }
        if ($_FILES['image']['name']==""){
            $courses->image = $request->image_hidden;
        }
        $courses->save();

        return redirect()->back()->withSuccess('Курс был изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::find($id)->delete();
        return redirect()->back()->withSuccess('Курс был удалён');
    }
}
