<?php

namespace App\Http\Controllers\frontend;
use App\Models\Customer;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\CustomerProfileController;

class CustomerProfileController extends Controller
{


    public function profile(){
        return view ('Website.Customer Profile.create');
    }
    // public function customeredit($id)
    //      {
    //          $profile = Customer::find($id)->first();
    //          return view('admin.pages.ServiceCategory.update_category',compact('cat'));
    //      }
    //      public function actual_edit($id, Request $req)
    //      {
    //          $profile = Customer::find($id)->first();
    //          $profile->edit([
                 
    //              'email'=>$req->email,
    //              'mobile'=>$req->mobile,
    //              'address'=>$req->address
    //          ]);
    //          return redirect()->route('website.profile');
    //      }
    
}
