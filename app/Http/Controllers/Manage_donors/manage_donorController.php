<?php

namespace App\Http\Controllers\Manage_donors;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Models\blood_group;
use Illuminate\Http\Request;

class manage_donorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['donor'] = Donor::orderBy('id')->paginate(10);

        return view('manage_donors.list', $data);
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
        //
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
        $donor = Donor::find($id);
        $Blood_groups = blood_group::all();
        return view('manage_donors.edit',compact('donor','Blood_groups'));
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

            'email' => 'required',

            'blood_group_id' => 'required',

            'card' => 'required',

            'address' => 'required',

            'number' => 'required'

            ]);

            $donor = Donor::find($id);

            $donor->update($request->all());

        return redirect()->route('manage_donor.index')->with('success','Donor has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Donor::find($id)->delete();
        return redirect()->route('manage_donor.index')->with('success','Donor has been deleted successfully');
    }
}
