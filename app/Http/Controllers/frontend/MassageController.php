<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function dashboard() {
        return view('website.massage');
    }

}
