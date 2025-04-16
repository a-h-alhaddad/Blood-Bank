<?php

namespace App\Http\Controllers\Dashboard\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blood_bank_request;
use App\Models\blood_group;
use App\Models\hospital;
use App\Models\blood_stock;
use Illuminate\Support\Facades\Auth; 

class requestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blood_bank_request = blood_bank_request::whereNull('status')
        ->orderBy('id')
        ->paginate(25);

        return view('Dashboard.Hospital.list', compact('blood_bank_request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Blood_groups = blood_group::all();
        $hospitals = Auth::user();
        return view('Dashboard.Hospital.create',compact('Blood_groups','hospitals'));
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

            'blood_group_id' => 'required',

            'quantity' => 'required',

            ]);

            blood_bank_request::create($request->all());

        return redirect()->route('hospital_list')->with('success','تم إرسال الطلب بنجاح.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $Blood_bank_request = blood_bank_request::find($id);

        // return view('Dashboard.Hospital.show',compact('Blood_bank_request'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Blood_bank_request = blood_bank_request::find($id);

        return view('Dashboard.Hospital.edit',compact('blood_bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $Blood_bank_request = blood_bank_request::findOrFail($id);

    //     // Reduce stock for the requested blood group
    //     $blood_group = $Blood_bank_request->blood_group;
    //     $blood_stock = blood_stock::where('blood_group_id', $blood_group->id)->first();
    
    //     if ($blood_stock) {
    //         $availableQuantity = $blood_stock->quantity - $Blood_bank_request->quantity;
    
    //         if ($availableQuantity >= 0) {
    //             $blood_stock->quantity = $availableQuantity;
    //             $blood_stock->save();
    
    //             // Mark request as accepted (update status or add a new field)
    //             // $Blood_bank_request->status = 'accepted'; // Assuming a 'status' field
    //             $Blood_bank_request->delete();
    
    //             return redirect()->route('blood_bank_request.index')->with('success', 'Request accepted and stock updated successfully!');
    //         } else {
    //             return back()->with('error', 'Insufficient stock for this blood group!');
    //         }
    //     } else {
    //         return back()->with('error', 'Blood group stock not found!');
    //     }
    // }

    public function update(Request $request, $id)
{
  // $Blood_bank_request = blood_bank_request::findOrFail($id);

  // // Check for action in request parameters (avoiding hidden fields)
  // $action = $request->get('action');

  // if ($action === 'accept') {
  //   $blood_group = $Blood_bank_request->blood_group;
  //   $blood_stock = blood_stock::where('blood_group_id', $blood_group->id)->first();

  //   if ($blood_stock) {
  //     $availableQuantity = $blood_stock->quantity - $Blood_bank_request->quantity;

  //     if ($availableQuantity >= 0) {
  //       $blood_stock->quantity = $availableQuantity;
  //       $blood_stock->save();

  //       $Blood_bank_request->status = 'accepted';
  //       $Blood_bank_request->save();

  //       return redirect()->route('blood_bank_request.index')->with('success', 'Request accepted and stock updated successfully!');
  //     } else {
  //       $Blood_bank_request->status = 'rejected';
  //       $Blood_bank_request->save();
  //       return back()->with('error', 'Insufficient stock for this blood group!');
  //     }
  //   } else {
  //     $Blood_bank_request->status = 'rejected';
  //     $Blood_bank_request->save();
  //     return back()->with('error', 'Blood group stock not found!');
  //   }
  // } else if ($action === 'reject') {
  //   // Update request status to rejected without stock handling
  //   $Blood_bank_request->status = 'rejected';
  //   $Blood_bank_request->save();
  //   return redirect()->route('blood_bank_request.index')->with('success', 'Request rejected successfully!');
  // } else {
  //   // Handle potential errors (e.g., invalid action value)
  //   return back()->with('error', 'Invalid action provided!');
  // }
  $Blood_bank_request = blood_bank_request::findOrFail($id);

    // Check for action in request parameters (avoiding hidden fields)
    $action = $request->get('action');

    if ($action === 'accept') {
        $blood_group = $Blood_bank_request->blood_group;

        // Find all blood stocks with the matching blood group
        $bloodStocks = blood_stock::where('blood_group_id', $blood_group->id)->get();

        $requiredQuantity = $Blood_bank_request->quantity;

        foreach ($bloodStocks as $bloodStock) {
            $availableQuantity = $bloodStock->quantity;

            // Check if this stock has enough to fulfill the request partially or fully
            if ($availableQuantity > 0) {
                $deductedQuantity = min($availableQuantity, $requiredQuantity); // Use min to avoid negative values
                $bloodStock->quantity -= $deductedQuantity;
                $bloodStock->save();

                $requiredQuantity -= $deductedQuantity;

                // Check if the request is fulfilled after updating this stock
                if ($requiredQuantity === 0) {
                    break; // Exit the loop if the request is fulfilled
                }
            }
        }

        if ($requiredQuantity === 0) {
            $Blood_bank_request->status = 'accepted';
            $Blood_bank_request->save();
            
            foreach ($bloodStocks as $bloodStock) {
                if ($bloodStock->quantity === 0) {
                  $bloodStock->delete();
                }
              }

            return redirect()->route('blood_bank_request.index')
                ->with('success', 'Request accepted and stock updated successfully!');
        } else {
            $Blood_bank_request->status = 'rejected';
            $Blood_bank_request->save();
            return back()->with('error', 'Insufficient stock for this blood group!');
        }
    } else if ($action === 'reject') {
        // Update request status to rejected without stock handling
        $Blood_bank_request->status = 'rejected';
        $Blood_bank_request->save();
        return redirect()->route('blood_bank_request.index')
            ->with('success', 'Request rejected successfully!');
    } else {
        // Handle potential errors (e.g., invalid action value)
        return back()->with('error', 'Invalid action provided!');
    }
}



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        blood_bank_request::find($id)->delete();

        return redirect()->route('blood_bank_request.index')->with('success','request has been deleted successfully');

    }
}
