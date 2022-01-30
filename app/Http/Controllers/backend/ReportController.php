<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use App\Http\Controllers\backend\ReportController;

class ReportController extends Controller
{
    public function reportList(){
        {
            $reports=[];
            if(request()->has('fromdate'))
            {
                $from_date=request()->fromdate;
                $to_date=request()->todate;
                $appoinment=request()->status;
                $reports=Appointment::where('status',$appoinment)->whereDate('created_at','>=',$from_date)->whereDate('created_at','>=',$to_date)->get();
                return view('admin.pages.report',compact('reports'));
            }
            return view('admin.pages.report',compact('reports'));
        }
    
    
return view('admin.pages.report');

    }
}
