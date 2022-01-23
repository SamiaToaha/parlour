<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Beautician;
use App\Models\Customer;
use App\Models\Service_Category;
class DashboardController extends Controller
{
    public function profile(){

        $count['service']=Service::all()->count();
        $count['beautician']=Beautician::all()->count();
        $count['customer']=Customer::all()->count();
        $count['category']=Service_Category::all()->count();
        
        return view('admin.pages.dashboard',compact('count'));
    }
    
}
