<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function review(){
        return view('admin.pages.Customers.show_feedback');
    }
}
