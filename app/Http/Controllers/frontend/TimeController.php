<?php

namespace App\Http\Controllers\frontend;
use App\Models\TimeSlot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\TimeController;

class TimeController extends Controller
{
    public function choose(){
        $choose=TimeSlot::all();

        return view('Website.Time.time',compact('choose'));
    }
    
}
