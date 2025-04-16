<?php

namespace App\Http\Controllers\Dashboard\Donor;

use App\Http\Controllers\Controller;
use App\Models\Donor;
use App\Models\blood_group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 


class edit_donorController extends Controller
{
    public function index()
    {
        $donorId = auth()->guard('donor')->user()->id;
        $donor = Donor::where('id',$donorId)->get();
        return view('Dashboard.Donor.edit_profile', compact('donor'));
    }
}
