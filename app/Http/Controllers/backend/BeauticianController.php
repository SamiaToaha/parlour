<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beautician;

class BeauticianController extends Controller
{
    public function visit_list(){
        $key=null;
        if(request()->search){
        $key= request()->search;
           $beauticianlist = Beautician::where('name','LIKE',"%{$key}%")->get();
           return view('admin.pages.beautician',compact('beauticianlist','key'));
        }
        $beauticianlist = Beautician::all();
        return view('admin.pages.beautician',compact('beauticianlist','key'));
    
}


public function BeauticianStore(Request $request){

    $image_name=null;         
    if($request->hasFile('image'))
    {
        $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();

        $request->file('image')->storeAs('/beautician',$image_name);
    }

    //dd($request->all());
    Beautician::create([
        'id'=>$request->id,
        'name'=>$request->name,
        'details'=>$request->details,
        'image'=> $image_name,


    ]);

   






    return redirect()->back()->with('success','Add Beautician Successfully');
}
public function add()
{
    return view('admin.pages.beautician_list');
}
// public function beauticianSearch()
// {
//    $key= request()->search;
//    $beauticianlist = Beautician::where('name','LIKE',"%{$key}%")->get();
//     return view('beautician',compact('beauticianlist'));
    

// }

}