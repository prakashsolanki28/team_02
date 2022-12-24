<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();
        return view('news', compact('news'));
    }

    public function adminIndex()
    {
        $news = News::get();
        return view('admin.news', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->id){
            $add_news_table = News::find($request->id);
            $msg = "Updated Successfully.";
        }
        else {
            $add_news_table = new News;
            $msg = "Added Successfully.";
        }

        $add_news_table->title = $request->title;
        $add_news_table->content = $request->content;
        $add_news_table->image = $request->image;
        $add_news_table->save();
        return back()->with('Success', $msg);
    }

    public function storeImage(Request $request)
    {
        $newsTable = News::find($request->id);
        $time = time();
        $destinationPath = 'news';
        $name = 'image-'.$time.'.'.$request->file->extension();
        $request->file->move(public_path($destinationPath), $name);
        $newsTable->file = $name;
        $newsTable->save();
        return back()->with('success','You have successfully uploaded file.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
