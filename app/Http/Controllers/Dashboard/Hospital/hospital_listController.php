<?php

namespace App\Http\Controllers\Dashboard\Hospital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blood_bank_request;
use App\Models\blood_group;
use App\Models\hospital;
use App\Models\blood_stock;
use Illuminate\Support\Facades\Auth; 


class hospital_listController extends Controller
{
    public function index()
    {
        $hospitalId = auth()->guard('hospital')->user()->id;
        $Blood_bank_request = blood_bank_request::where('hospital_id', $hospitalId)->get(); // Add get() to fetch the data
        return view('Dashboard.Hospital.hospital_list', compact('Blood_bank_request'));
    }
}
