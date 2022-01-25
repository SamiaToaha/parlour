<?php

namespace App\Http\Controllers\frontend;
use App\Models\User;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\CustomerProfileController;

class CustomerProfileController extends Controller
{


    public function profile(){
        return view ('Website.Customer Profile.create');
    }
    public function update()
         {
            
             return view('Website.Customer Profile.update_customer');
         }
         public function actual_update(Request $request)
         {
             $id = auth()->user()->id;
             $user = User::find($id);
             $user->email = $request->input('email');
             $user->phone_number = $request->input('phone_number');
             $user->address = $request->input('address');
             $user->save();
             return redirect()->route('website.profile');
         }
    
}
