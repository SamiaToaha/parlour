<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\Service_Category;
use App\Http\Controllers\Controller;


class ServiceController extends Controller
{
    public function view(){
        $createservice = Service::all();
        // dd($createservice);
        
        $key =null;
        if(request()->search){
        $key = request()->search;
           $createservice = Service::with('category')->where('name','LIKE',"%{$key}%")->get();
           return view('admin.pages.Service.service',compact('createservice','key'));}
        
           $createservice = Service::all();
           return view('admin.pages.Service.service',compact('createservice','key'));
     }
    
    
    public function ServiceStore(Request $request){
     $image_name=null;         
    if($request->hasFile('image'))
    {
        $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();

        $request->file('image')->storeAs('/service',$image_name);
    }

        Service::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=> $image_name,
            'category_id'=>$request->category,
            


        ]);
        return redirect()->back()->with('success','Add Service Successfully');
    }
  
    public function create(){
        $list=Service_Category::all();

        return view('admin.pages.Service.create_service',compact('list'));
       
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
    return view('admin.pages.Service.update_service',compact('s'));
}
public function service_update($id, Request $req)
{
    $s = Service::find($id)->first();
    $s->update([
        
        'price'=>$req->price
    ]);
    return redirect()->route('admin.service');
}
}