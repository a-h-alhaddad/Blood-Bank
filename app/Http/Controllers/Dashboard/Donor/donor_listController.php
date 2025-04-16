<?php

namespace App\Http\Controllers\Dashboard\Donor;

use App\Http\Controllers\Controller;
use App\Models\donor_request;
use App\Models\blood_group;
use Illuminate\Http\Request;

class donor_listController extends Controller
{
    public function index(){
        // $data['Donor_request'] = donor_request::orderBy('id','desc')->paginate(10);
        $donorBloodGroup = auth()->user()->blood_group_id; // Assuming user is authenticated

        $donorRequests = donor_request::where('blood_group_id', $donorBloodGroup)
            ->orderBy('created_at') // Optional: Order by creation date (descending)
            ->paginate(10); // Pagination (optional: customize the number of requests per page)

        return view('Dashboard.Donor.donor_list', compact('donorRequests'));
        // return view('Dashboard.Donor.donor_list',$data);
    }
}
