<?php

namespace App\Http\Controllers\frontend;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\frontend\BookingController;

class BookingController extends Controller
{
    public function appointment(){

$appointment=Appointment::all();
return view('Website.Appoint.appointment',compact('appointment'));
    }
    

    public function view(){
        $appointment = Appointment::where('user_id',Auth::user()->id)->get();
        return view('website.appoint.view_appoint',compact('appointment'));
}
}
