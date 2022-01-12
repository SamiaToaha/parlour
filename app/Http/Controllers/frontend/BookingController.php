<?php

namespace App\Http\Controllers\frontend;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\BookingController;

class BookingController extends Controller
{
    public function appointment(){

$appointment=Appointment::all();
return view('Website.appointment',compact('appointment'));
    }
    
}
