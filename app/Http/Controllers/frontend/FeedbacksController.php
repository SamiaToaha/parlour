<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\FeedbacksController;

class FeedbacksController extends Controller
{
    public function give(){
        
    return view('Website.Customer Profile.feedback');
    }
}
