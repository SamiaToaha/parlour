<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    public function profile()
    {
      $appointmentlist=Appointment::all();
      return view('admin.pages.Appointments.appointment',compact('appointmentlist'));
    }

    public function BookingAppointment(){
        return view('admin.pages.Appointments.booking_appointment');
    }

    public function AppointmentStore(Request $request){
        // dd($request->all());
        Appointment::create([
            'id'=>$request->Id,
            'email'=>$request->Email,
            'name'=>$request->Name,
            'phone_number'=>$request->Phone_Number,
            'address'=>$request->Address,
        ]);
        return view('admin.pages.Appointments.appointment_booking');
    }
      
        
    }

