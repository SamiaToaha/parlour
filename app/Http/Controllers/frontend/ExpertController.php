<?php

namespace App\Http\Controllers\frontend;

use App\Models\Beautician;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\ExpertController;

class ExpertController extends Controller
{
    public function expert(){
        $expert=Beautician::all();
        
        return view('Website.Experts.expert',compact('expert'));
        
        
            }
        }

