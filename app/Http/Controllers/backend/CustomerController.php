<?php

namespace App\Http\Controllers\backend;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\backend\CustomerController;

class CustomerController extends Controller
{
    public function show_list(){
        $key =null;
        if(request()->search){
        $key = request()->search;
           $customerlist = Customer::where('name','LIKE',"%{$key}%")->get();
           return view('admin.pages.Customers.Customer',compact('customerlist','key'));
        }
        $customerlist = User::all();
        return view('admin.pages.Customers.Customer',compact('customerlist','key'));
     }
    
        public function CustomerStore(Request $request){
            //dd($request->all());
            Customer::create([
                'id'=>$request->id,
                'name'=>$request->name,
                'details'=>$request->details    
    
            ]);
            return redirect()->back()->with('success','Customer added Successfully');
}
public function add(){
    return view('admin.pages.Customers.customer_list');
   }
   public function customerDetails($customer_id)
   {
       $customer=customer::find($customer_id);
       return view('admin.pages.Customers.details',compact('customer'));
    }
    public function customernDelete($customer_id)
{
   Customers::find($customer_id)->delete();
   return redirect()->back()->with('success','customer Deleted.');
}



}