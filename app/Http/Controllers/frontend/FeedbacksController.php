<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\FeedbacksController;

class FeedbacksController extends Controller
{
    public function review(){
        
    return view('Website.Feedbacks.give_feedback');
    }
}
