<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', [
            'news' => $news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'textarea' => 'required',
            'image' => 'required',
        ]);

        $news = new News();
        $news->title = $request->title;
        $news->textarea = $request->textarea;
        $news->image = '/image/'.$_FILES['image']['name'];

        if (!empty($_FILES)){
            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                'image/' . $_FILES['image']['name']
            );
        }
        if ($_FILES['image']['name']==""){
            $news->image = $request->image_hidden;
        }
        $news->save();

        return Redirect()->back()->withSuccess('Новость была добавлена');
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
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
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
        $news = News::find($id);
        $news->title = $request->title;
        $news->textarea = $request->textarea;
        $news->image = '/image/'.$_FILES['image']['name'];

        if (!empty($_FILES)){
            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                'image/' . $_FILES['image']['name']
            );
        }
        if ($_FILES['image']['name']==""){
            $news->image = $request->image_hidden;
        }
        $news->save();

        return redirect()->back()->withSuccess('Новость была изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::find($id)->delete();
        return redirect()->back()->withSuccess('Новость была удалёна');
    }
}
