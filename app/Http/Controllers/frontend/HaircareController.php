<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HaircareController extends Controller
{
    public function dashboard(){
    return view('website.haircare');
    }
}
