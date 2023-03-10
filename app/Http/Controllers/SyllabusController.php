<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Syllabus;
use App\Models\Cources;

class SyllabusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $syllabuses = Syllabus::get();
        return view('syllabus', compact('syllabuses'));
    }

    public function adminIndex()
    {
        $syllabuses = Syllabus::get();
        $courses = Cources::get();
        return view('admin.syllabus', compact('syllabuses','courses'));
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
            $add_syllabus_table = Syllabus::find($request->id);
            $msg = "Updated Successfully.";
        }
        else {
            $add_syllabus_table = new Syllabus;
            $msg = "Added Successfully.";
        }

        $add_syllabus_table->cource_id = $request->course;
        $add_syllabus_table->save();
        return back()->with('success', $msg);
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
        Syllabus::destroy($id);
        return back()->with('success','You have successfully Removed Syllabus.');
    }
}
