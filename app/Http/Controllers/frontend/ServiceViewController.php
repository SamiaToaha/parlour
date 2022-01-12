<?php

namespace App\Http\Controllers\frontend;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\ServiceViewController;

class ServiceViewController extends Controller
{
    public function serviceView($id){
        $data = Service::where('id',$id)->first();
        return view('Website.Services.details',compact('data'));
    }
    
}
