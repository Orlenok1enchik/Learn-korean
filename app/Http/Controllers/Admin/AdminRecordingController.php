<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recording;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminRecordingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recordings = Recording::all();
        DB::table('recordings')->where('is_read', null)->update(['is_read'=>1]);

        return view('admin.recording.index', [
            'recordings' => $recordings,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
        $fields = $request->validate([
            'course_id' => 'required',
            'user_id' => 'required',
            'group_id' => 'required',
        ]);
        DB::table('users')->where('id', $fields['user_id'])->update(['course_id' => $fields['course_id'], 'group_id'=> $fields['group_id']]);
        DB::table('recordings')->where('id', $id)->delete();
        return redirect()->back()->withSuccess('Заявка на курс была одобрена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('recordings')->where('id', $id)->delete();
        return redirect()->back()->withSuccess('Заявка на курс была удалена');
    }
}
