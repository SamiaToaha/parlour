<?php

namespace App\Http\Controllers\frontend;

use App\Models\Beautician;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\ExpertViewController;

class ExpertViewController extends Controller
{
    
    public function expertview($id){
        $exp = Beautician::where('id',$id)->first();

    return view('Website.Experts.expdetails',compact('exp'));
}
}