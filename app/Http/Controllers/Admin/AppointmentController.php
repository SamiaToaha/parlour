<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Service;
use App\Models\Cart;
use App\Models\Payment;

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
        
        $data = session()->get('cart');
        if($data){
            //dd($request->all());
        //for validation
        $request->validate([
            'name'=>'required',
            'phonenumber'=>'required',
            'date'=>'required',
            'time'=>'required']);
            Appointment::create([
                'id'=>$request->id,
                'name'=>$request->name,
                'phonenumber'=>$request->phone_number,
                'date'=>$request->date,
                'time'=>$request->time,
                'address'=>$request->address,
                'select_beautician'=>$request->select_beautician,
                'user_id'=>Auth::user()->id,
               
                // 'customer_id'=>$request->customer_id,
                // 'service_id'=>$request->service_id,
                // 'service_quantity'=>$request->service_quantity,
                // 'price'=>$request->price,
                // 'total_price'=>$request->total_price,
                // 'status'=>$request->status,
            ]);
            return redirect()->back()->with('success','Appointment done Successfully');
        }else{
            return redirect()->back()->with('error','Cart is Empty,please add to cart service.');
        }
       
    }
    public function list(){
       return view('admin.pages.Appointments.booking_list');
    } 


    public function appointmentDelete($appointment_id)
    {
        Appointment::find($appointment_id)->delete();
        return redirect()->back()->with('success','appointment Deleted.');
    }
        
    
    public function appointmentDetails($appointment_id)
    {
        // dd($appointment_id);
        $appoint=appointment::findOrFail($appointment_id);
        
        $details=Cart::where('user_id',$appoint->user_id)->get();
        $total = 0;
        foreach ($details as $value) {
            $total+=$value->price;
        }
        return view('admin.pages.appointments.details',compact('details','total','appointment_id'));
     }
     public function appointmentnDelete($appointment_id)
 {
    Appointments::find($appointment_id)->delete();
    return redirect()->back()->with('success','appointment Deleted.');
 }
 




    public function showlist(){
        return view('Website.cart');

        
    }

    public function clearCart()
    {
session()->forget('cart');
return redirect()->back();
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

            return redirect()->back()->with('message', 'Service Added to Cart.');
        }


//case 03: product exist into cart
        //action: increase product quantity (quantity+1)


 if(isset($cartExist[$id])){
$cartExist[$id]['item_qty']++;
session()->put('cart',$cartExist);
return redirect()->back();
}  
// if(isset($cartExist[$id])) {
//     $cartExist[$id] ['quantity']++;
//     session()->put('cart',$cartExist);
//     return redirect()->back();
// }



    } 
    
   


     
public function getCart()
    {
       $carts= session()->get('cart');
        return view('website.cart',compact('carts'));
    }
    public function confirmCart()
    {
        //  dd(auth()->user());
      
         $data = session()->get('cart');
        //  dd($data);
         foreach ($data as $val) {
            Cart::create([
                'name' => $val['name'],
                'price' => $val['price']*$val['item_qty'],
                'item_qty' => $val['item_qty'],
                'user_id'=>auth()->user()->id,
            ]);      
         }
        session()->forget('cart');
        return redirect()->back()->with('message','Cart confirm successfully.');

    }
    public function action($id)
    {
        $data = Appointment::find($id);
        if($data->status !='Paid'){
        $data->update([
            'status'=>"Approve"
        ]);
    }
        return redirect()->back();
    }
    public function view($id)
    {
        return view('admin.pages.appointments.view',compact('id'));
    }
    public function add($id)
    {
        Payment::create([
            'appointment_id'=>$id,
            'total_amount'=>request()->total_amount
        ]);
        $pay =Appointment::find($id);
        $pay->update([
            'status'=>"Paid"
        ]);
        return redirect()->back();

    }


    public function payment($appointment_id)
    {
        $pay =Appointment::find($appointment_id);
        $pay->update([
            'status'=>"Paid"
        ]);
        return redirect()->back();
    }
}