<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        //$ttBloodDonated = Appointmentcount();
        //$appointmentPending = Appointment::where('appointmentStatus', 'Pending')->count();
        //$appointmentSuccess = Appointment::where('appointmentStatus', 'Success')->count();
        //$appointmentFail = Appointment::where('appointmentStatus', 'Fail')->count();


        //compact('ttBloodDonated', 'appointmentPending', 'appointmentSuccess', 'appointmentFail')

        return view('dashboard');
    }
}
