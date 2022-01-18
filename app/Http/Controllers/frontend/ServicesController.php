<?php

namespace App\Http\Controllers\frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\ServicesController;

class ServicesController extends Controller

{
    public function type(){
        $type=Service::all();

        $key =null;
        if(request()->search){
        $key = request()->search;
           $type = Service::with('category')->where('name','LIKE',"%{$key}%")->get();
           return view('Website.Services.type',compact('type','key'));}
        

           $type=Service::all();
        return view('Website.Services.type',compact('type','key'));
        
        
            }
        }

