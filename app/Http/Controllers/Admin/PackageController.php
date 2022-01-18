<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\PackageController;

class PackageController extends Controller
{
    public function offer(){
        return view('admin.pages.package');
    }
}
