<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;

class AppointmentController extends Controller
{
    public function booking()
    
    {
      $bookinglist=Appointment::all();
      $key =null;
      if(request()->search){
      $key = request()->search;
         $bookinglist = Appointment::where('name','LIKE','%'.$key.'%')->get();
         return view('admin.pages.Appointments.appointment',compact('bookinglist','key'));}

         $bookinglist=Appointment::all();
         return view('admin.pages.Appointments.appointment',compact('bookinglist','key'));

      
   
    }

    public function AppointmentStore(Request $request){
        // dd($request->all());
        Appointment::create([
            'id'=>$request->id,
            'customerid'=>$request->customer_id,
            'serviceid'=>$request->service_id,
            'servicequantity'=>$request->service_quantity,
            'price'=>$request->price,
            'totalprice'=>$request->total_price,
            'status'=>$request->status,
        ]);
        return redirect()->back()->with('success','Appointment done Successfully');
    }
    public function list(){
       return view('admin.pages.Appointments.booking_list');
    } 
        
    
    public function appointmentDetails($appointment_id)
    {
        
        $appoint=appointment::find($appointment_id);
        return view('admin.pages.Appointments.details',compact('appoint'));
     }
     public function appointmentnDelete($appointment_id)
 {
    Appointments::find($appointment_id)->delete();
    return redirect()->back()->with('success','appointment Deleted.');
 }
 




    public function showlist(){
        return view('Website.cart');

        
    }
    public function addtocart($id)
    {
        // dd($id);

        $createservice=Service::find($id);
        if(!$createservice)
        {
            return redirect()->back()->with('error','No package found.');
        }
        $cartExist=session()->get('cart');

        if(!$cartExist) {
            //case 01: cart is empty.
            //  action: add product to cart
            $cartData = [
                $id => [
                    'id' => $id,
                    // 'user_id'=>
                    'name' => $createservice->name,
                    'price' => $createservice->price,
                    'item_qty' => 1,
                ]
            ];
            session()->put('cart', $cartData);
            return redirect()->back()->with('message', 'Product Added to Cart.');
        }

        //case 02: cart is not empty. but product does not exist into the cart
        //action: add different product with quantity 1
//        dd(isset($cartExist[$id]));
        if(!isset($cartExist[$id]))
        {
            $cartExist[$id] = [
                'id' => $id,
                'name' => $createservice->name,
                'price' => $createservice->price,
                'item_qty' => 1,
            ];

            session()->put('cart', $cartExist);

            return redirect()->back()->with('message', 'Product Added to Cart.');
        }


        //case 03: product exist into cart
        //action: increase product quantity (quantity+1)
    }
    public function getCart()
    {
       $carts= session()->get('cart');
        return view('website.cart',compact('carts'));
    }



    public function clearCart()
    {
        dd(session()->get('cart'));
        session()->forget('cart');
        return redirect()->back()->with('message','Cart cleared successfully.');

    }
}