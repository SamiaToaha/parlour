<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimeScheduleController extends Controller
{
    public function profile(){
        return view('admin.pages.time_schedule');
    }
}
