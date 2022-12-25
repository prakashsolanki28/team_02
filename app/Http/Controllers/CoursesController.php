<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cources;
use App\Models\Syllabus;
class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Cources::get();
        return view('admin.courses', compact('courses'));
    }

    public function adminIndex()
    {
        $courses = Cources::get();
        return view('admin.courses', compact('courses'));
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
            $add_course_table = Cources::find($request->id);
            $msg = "Updated Successfully.";
        }
        else {
            $add_course_table = new Cources;
            $msg = "Added Successfully.";
        }

        $add_course_table->name = $request->name;
        $add_course_table->stream = $request->stream;
        $add_course_table->duration = $request->duration;
        $add_course_table->save();
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
        Syllabus::where('cource_id',$id)->delete(); 
        Cources::destroy($id);
        return back()->with('success','You have successfully Removed course.');
    }
}
