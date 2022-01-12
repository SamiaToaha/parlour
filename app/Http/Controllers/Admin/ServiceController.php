<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

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
    
    
    public function ServiceStore(Request $request){
        //dd($request->all());
        Service::create([
            'id'=>$request->id,
            'name'=>$request->name,
            'price'=>$request->price,


        ]);
        return redirect()->back()->with('success','Add Service Successfully');
    }
  
    public function create(){
        return view('admin.pages.Service.create_service');
       
}
public function serviceDetails($service_id)
    {
        $type=service::find($service_id);
        return view('admin.pages.Service.view',compact('type'));
     }
     public function serviceDelete($service_id)
 {
    Service::find($service_id)->delete();
    return redirect()->back()->with('success','service Deleted.');
 }
 public function serviceupdate($id)
{
    $s = Service::find($id)->first();
    return view('admin.pages.Service.update',compact('s'));
}
// public function actual_update($id, Request $req)
// {
//     $b = Beautician::find($id)->first();
//     $b->update([
//         'details'=>$req->details
//     ]);
//     return redirect()->route('beautician.profile');
// }
}