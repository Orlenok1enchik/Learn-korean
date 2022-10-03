<?php

namespace App\Http\Controllers\Admin;

use App\Models\Group;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Group::all();
        return view('admin.groups.index', [
            'groups' => $groups,
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
        return view('admin.groups.create', compact('courses'));
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
            'text' => 'required',
            'price' => 'required',
            'course_id' => 'required',
            'period_study' => 'required',
        ]);

        $groups = new Group();
        $groups->title = $request->title;
        $groups->text = $request->text;
        $groups->price = $request->price;
        $groups->course_id = $request->course_id;
        $groups->period_study = $request->period_study;

        $groups->save();

        return Redirect()->back()->withSuccess('Группа была добавлена');
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
        $groups = Group::find($id);
        $courses = Course::all();
        return view('admin.groups.edit', compact('groups', 'courses'));
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
        $request->validate([
            'title' => 'required',
            'text' => 'required',
            'price' => 'required',
            'course_id' => 'required',
            'period_study' => 'required',
        ]);

        $groups = Group::find($id);
        $groups->title = $request->title;
        $groups->text = $request->text;
        $groups->price = $request->price;
        $groups->course_id = $request->course_id;
        $groups->period_study = $request->period_study;

        $groups->save();

        return Redirect()->back()->withSuccess('Группа была изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Group::find($id)->delete();
        return redirect()->back()->withSuccess('Группа была удалёна');
    }
}
