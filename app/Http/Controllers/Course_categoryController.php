<?php

namespace App\Http\Controllers;

use App\Http\Requests\Course_categoryCreateRequest;
use Illuminate\Http\Request;
use App\Models\Course_category;

class Course_categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $course_category = new Course_category;
        $course_category = $course_category->latest()->paginate(10);

        return view('admin.course_category.index',compact('course_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.course_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Course_categoryCreateRequest $request)
    {
        $course_category = new Course_category;
        $course_category->name = $request->name;
        $course_category->slug = $request->slug;
        $course_category->about = $request->about;

        $course_category->save();

        return redirect('admin/course_category')->with('message','Record is created successfully.');

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
        $course_category = new Course_category;
        $course_category = $course_category->where('id',$id)->first();

        return view('admin.course_category.create',compact('course_category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Course_categoryCreateRequest $request, $id)
    {
        $course_category = new Course_category;
        $course_category = $course_category->where('id',$id)->first();
        $course_category->name = $request->name;
        $course_category->slug = $request->slug;
        $course_category->about = $request->about;

        $course_category->save();

        return redirect('admin/course_category')->with('message','Record is created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course_category = new Course_category;
        $course_category = $course_category->where('id',$id)->first();

        $course_category->delete();

        return redirect('admin/course_category')->with('Record is deleted successfully.');
    }
}
