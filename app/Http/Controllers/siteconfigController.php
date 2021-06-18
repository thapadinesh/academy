<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siteconfig;

class siteconfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteconfig = new siteconfig;
        $siteconfig = $siteconfig->latest()->paginate(10);

        return view('admin.siteconfig.index',compact('siteconfig'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siteconfig.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siteconfig = new siteconfig;
        $siteconfig->name = $request->name;
        $siteconfig->site_key = $request->site_key;
        $siteconfig->site_value = $request->site_value;

        $siteconfig->save();

        return redirect('admin/siteconfig')->with('message','Record is created successfully.');

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
        $siteconfig = new siteconfig;
        $siteconfig = $siteconfig->where('id',$id)->first();

        return view('admin.siteconfig.create',compact('siteconfig'));

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
        $siteconfig = new siteconfig;
        $siteconfig = $siteconfig->where('id',$id)->first();
        $siteconfig->name = $request->name;
        $siteconfig->site_key = $request->site_key;
        $siteconfig->site_value = $request->site_value;

        $siteconfig->save();

        return redirect('admin/$siteconfig')->with('message','Record is created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siteconfig = new siteconfig;
        $siteconfig = $siteconfig->where('id',$id)->first();

        $siteconfig->delete();

        return redirect('admin/siteconfig')->with('Record is deleted successfully.');
    }
}
