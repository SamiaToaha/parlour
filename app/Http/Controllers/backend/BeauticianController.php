<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeauticianController extends Controller
{
    public function view(){
        $beauticianlist = Beautician::all();
        return view('admin.pages.beautician',compact('beautician_list'));
    }

public function visit_list(){
    return view('admin.pages.beautician');
}
public function BeauticianStore(Request $request){
    //dd($request->all());
    Beautician::create([
        'id'=>$request->id,
        'name'=>$request->name,


    ]);
    return redirect()->back()->with('success','Add Beautician Successfully');
}

}
