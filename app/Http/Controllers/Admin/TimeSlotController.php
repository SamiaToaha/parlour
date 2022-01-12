<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function view(){
        $createservice = Service::all();
        
        $key =null;
        if(request()->search){
        $key = request()->search;
           $createservice = Service::where('name','LIKE',"%{$key}%")->get();
           return view('admin.pages.Service.service',compact('createservice','key'));}
        
           $createservice = Service::all();
           return view('admin.pages.Service.service',compact('createservice','key'));
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
