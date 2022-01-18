<?php

namespace App\Http\Controllers\frontend;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\CustomerProfileController;

class CustomerProfileController extends Controller
{
    public function profile(){
        $profile=Customer::all();

        return view('Website.Customer Profile.profile',compact('profile'));
    }
}
