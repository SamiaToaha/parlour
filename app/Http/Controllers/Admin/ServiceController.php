<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function profile(){
        $servicelist = Service::all();
        return view('admin.pages.Service.service',compact('servicelist'));
    }
    public function CreateService(){
        return view('admin.pages.Service.create_service');
    }
    public function ServiceStore(Request $request){
        //dd($request->all());
        Service::create([
            'id'=>$request->id,
            'name'=>$request->name,


        ]);
        return redirect()->back();
    }
  
}
