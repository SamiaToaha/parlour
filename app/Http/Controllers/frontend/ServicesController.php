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
        
        return view('Website.Services.type',compact('type'));
        
        
            }
        }

