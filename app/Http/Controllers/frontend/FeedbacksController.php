<?php

namespace App\Http\Controllers\frontend;
use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\FeedbacksController;

class FeedbacksController extends Controller
{
    public function give(){
        
    return view('Website.Customer Profile.feedback');
    }
    public function feedbackStore(Request $request){
        Feedback::create([
       'about_service'=>$request->about_service,
       'about_beautician'=>$request->about_beautician,
       'any_recommendation'=>$request->any_recommendation


        ]);
return redirect()->back();
}
}