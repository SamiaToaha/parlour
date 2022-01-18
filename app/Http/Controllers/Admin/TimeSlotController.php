<?php

namespace App\Http\Controllers\Admin;

use App\Models\TimeSlot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\TimeSlotController;

class TimeSlotController extends Controller
{
    public function select(){
        $create=TimeSlot::all();
        return view('admin.pages.Time.timeslot',compact('create'));
       
}


public function TimeStore(Request $request){
//    dd($request->all());
    TimeSlot::create([
        'serial'=>$request->serial,
        'servicename'=>$request->service_name,
        'timeslot'=>$request->time,    

    ]);
    return redirect()->back()->with('success','Time added Successfully');
}
public function time(){
    $create=TimeSlot::all();
    return view('admin.pages.Time.create',compact('create'));

}
}