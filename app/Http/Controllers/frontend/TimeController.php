<?php

namespace App\Http\Controllers\frontend;
use App\Models\TimeSlot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\TimeController;

class TimeController extends Controller
{
    public function choose(){
        $choose=TimeSlot::with('service')->get();
        // dd($choose);

        return view('Website.Time.time',compact('choose'));
    }
    
}
