<?php

namespace App\Http\Controllers\Manage_hospitals;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hospital;
use Illuminate\Support\Facades\Auth; 


class manage_hospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Hospital'] = hospital::orderBy('id')->paginate(10);

        return view('manage_hospitals.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage_hospitals.create');
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

            'name' => 'required',

            'address' => 'required',

            'number' => 'required',
            ]);

            hospital::create($request->all());

        return redirect()->route('manage_hospital.index')->with('success','Hospital has been created successfully.');
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
        $Hospital = hospital::find($id);

        return view('manage_hospitals.edit',compact('Hospital'));
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
        $request->validate([

            'name' => 'required',

            'address' => 'required',

            'number' => 'required',
            ]);
            $Hospital = hospital::find($id);

            $Hospital->update($request->all());

        return redirect()->route('manage_hospital.index')->with('success','hospital has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        hospital::find($id)->delete();
        return redirect()->route('manage_hospital.index')->with('success','Hospital has been deleted successfully');
    }
}
