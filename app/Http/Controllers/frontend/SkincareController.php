<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SkincareController extends Controller
{
    public function dashboard(){
        return view('website.skincare');
    }
}
