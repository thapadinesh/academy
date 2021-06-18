<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\page;
class pageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page = new page;
        $page = $page->latest()->paginate(10);

        return view('admin.page.index',compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new page;
        $page->name = $request->name;
        $page->slug = $request->slug;
        $page->feature_img = $request->feature_img;
        $page->content = $request->content;

        $page->save();

        return redirect('admin/page')->with('message','Record is created successfully.');
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
        $page = new page;
        $page = $page->where('id',$id)->first();

        return view('admin.page.create',compact('page'));

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
        $page = new page;
        $page = $page->where('id',$id)->first();
        $page->name = $request->name;
        $page->slug = $request->slug;
        $page->feature_img = $request->feature_img;
        $page->content = $request->content;

        $page->save();

        return redirect('admin/page')->with('message','Record is created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = new page;
        $page = $page->where('id',$id)->first();

        $page->delete();

        return redirect('admin/page')->with('Record is deleted successfully.');
    }
}
