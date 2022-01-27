<?php

namespace App\Http\Controllers\backend;
use App\Models\Feedback;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function review(){
        $feedback =Feedback::all();
        return view('admin.pages.Customers.show_feedback',compact('feedback'));
    }
}
