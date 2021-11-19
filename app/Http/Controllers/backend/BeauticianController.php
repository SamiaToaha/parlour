<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeauticianController extends Controller
{
public function profile(){
    return view('admin.pages.beautician');
}

}
