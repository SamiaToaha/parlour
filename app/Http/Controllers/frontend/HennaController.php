<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HennaController extends Controller
{
    public function dashboard(){
        return view('website.henna');
    }
}