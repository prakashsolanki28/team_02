<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::get();
        return view('gallery', compact('galleries'));
    }

    public function adminIndex()
    {
        $galleries = Gallery::get();
        return view('admin.gallery', compact('galleries'));
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
            $add_gallery_table = Gallery::find($request->id);
            $msg = "Updated Successfully.";
        }
        else {
            $add_gallery_table = new Gallery;
            $msg = "Added Successfully.";
        }

        $add_gallery_table->title = $request->title;
        $add_gallery_table->save();
        return back()->with('success', $msg);
    }

    public function storeImage(Request $request)
    {
        $galleryTable = Gallery::find($request->id);
        $time = time();
        $destinationPath = 'gallery';
        $name = 'image-'.$time.'.'.$request->file->extension();
        $request->file->move(public_path($destinationPath), $name);
        $galleryTable->image = $name;
        $galleryTable->save();
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
        $gallery = Gallery::destroy($id);
        return back()->with('success','You have successfully Removed Image.');
    }
}
