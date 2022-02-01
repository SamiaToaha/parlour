<?php

namespace App\Http\Controllers\Admin;

use App\Models\TimeSlot;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\TimeSlotController;

class TimeSlotController extends Controller
{
    public function select(){
        $create=TimeSlot::with('service')->get();
        return view('admin.pages.Time.timeslot',compact('create'));
       
}


public function TimeStore(Request $request){
//    dd($request->all());
    TimeSlot::create([
       
        'name'=>$request->service,
        'starting_time'=>$request->starting_time,  
        'ending_time'=>$request->ending_time,    

    ]);
    return redirect()->back()->with('success','Time added Successfully');
}
public function time(){
    $create=Service::all();
    // dd($create);
    return view('admin.pages.Time.create',compact('create'));

}
}