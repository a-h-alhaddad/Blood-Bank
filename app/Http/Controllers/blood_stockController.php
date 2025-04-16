<?php

namespace App\Http\Controllers;

use App\Models\blood_stock;
use App\Models\blood_group;
use Illuminate\Http\Request;

class blood_stockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['Blood_stock'] = blood_stock::orderBy('id')->paginate(20);

        return view('blood_stock.list', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Blood_groups = blood_group::all();
        return view('blood_stock.create',compact('Blood_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'blood_group_id' => 'required',

            'quantity' => 'required',

            ]);

            $currentDate = date('Y-m-d');
            $expirationDate = date('Y-m-d', strtotime($currentDate . '+7 days'));
          
            // Calculate days left
            $todayTimestamp = strtotime($currentDate);
            $expirationTimestamp = strtotime($expirationDate);
            $daysLeft = ceil(($expirationTimestamp - $todayTimestamp) / (60 * 60 * 24)); // Days calculation
          
            $validatedData['expiration_date'] = $expirationDate;
            $validatedData['days_left'] = $daysLeft; // Add days left to validated data
          
            // Save the blood stock data with expiration date
            blood_stock::create($validatedData);

        return redirect()->route('blood_stock.index')->with('success','تم اضافة المخزون بنجاح.');
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
        $Blood_groups = blood_group::all();
        $Blood_stock = blood_stock::find($id);
        return view('blood_stock.edit',compact('Blood_stock','Blood_groups'));
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

            'quantity' => 'required',

            ]);

            $Blood_stock = blood_stock::find($id);

            $Blood_stock->update($request->all());

        return redirect()->route('blood_stock.index')->with('success','blood stock has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        blood_stock::find($id)->delete();
        return redirect()->route('blood_stock.index')->with('success','تم حذف المخزون بنجاح');
    }
}
