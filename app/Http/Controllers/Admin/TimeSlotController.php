<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{
    public function view(){
        $timeselection = TimeSlot::all();
        return view('admin.pages.time_slot',compact('timeselection'));
    }
    public function select(){
        return view('admin.pages.time_slot');
    }
    public function TimeSlotStore(Request $request){
        //dd($request->all());
        TimeSlot::create([
            'id'=>$request->id,
            'name'=>$request->beautician_name,
    
    
        ]);
        return redirect()->back()->with('success','Add TimeSlot Successfully');
    }
    
}
