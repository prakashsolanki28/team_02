<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeTable;

class TimeTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $time_table = TimeTable::get();
        return view('time_table');
    }

    public function adminIndex()
    {
        $time_table = TimeTable::get();
        return view('admin.time_table');
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
            $add_tt_table = TimeTable::find($request->id);
            $msg = "Updated Successfully.";
        }
        else {
            $add_tt_table = new tt ;
            $msg = "Added Successfully.";
        }

        $add_tt_table->title = $request->title;
        $add_tt_table->course = $request->course;
        $add_tt_table->file = $request->file;
        $add_tt_table->save();
        return back()->with('Success', $msg);
    }

    public function storeImage(Request $request)
    {
        $tt_Table = TimeTable::find($request->id);
        $time = time();
        $destinationPath = 'tt ';
        $name = 'image-'.$time.'.'.$request->file->extension();
        $request->file->move(public_path($destinationPath), $name);
        $tt_Table->file = $name;
        $tt_Table->save();
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
