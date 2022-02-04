<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Beautician;
use App\Models\Service;

class BeauticianController extends Controller
{
    public function visit_list(){
        $key=null;
        if(request()->search){
        $key= request()->search;
           $beauticianlist = Beautician::where('name','LIKE',"%{$key}%")->get();
           return view('admin.pages.Beauty.beautician',compact('beauticianlist','key'));
        }
        $beauticianlist = Beautician::all();
        return view('admin.pages.Beauty.beautician',compact('beauticianlist','key'));
    
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
        'service_name'=>$request->service,
        'details'=>$request->details,
        'available'=>$request->available,
        'image'=> $image_name,


    ]);

   






    return redirect()->back()->with('success','Add Beautician Successfully');
}
public function add(){
    $list=Service::all();
    return view('admin.pages.Beauty.beautician_list',compact('list'));
}


public function beauticianDetails($beautician_id)
{
    $beauty=beautician::find($beautician_id);
    //      $product=Product::where('id',$product_id)->first();
            return view('admin.pages.Beauty.details',compact('beauty'));
}
// public function beauticianSearch()
// {
//    $key= request()->search;
//    $beauticianlist = Beautician::where('name','LIKE',"%{$key}%")->get();
//     return view('beautician',compact('beauticianlist'));
    

// }
public function beauticianDelete($beautician_id)
{
    Beautician::find($beautician_id)->delete();
   return redirect()->back()->with('success','beautician Deleted.');
}

public function beauticianupdate($id)
{
    $b = Beautician::find($id)->first();
    return view('admin.pages.beauty.update',compact('b'));
}
public function actual_update($id, Request $req)
{
    $b = Beautician::find($id)->first();
    $b->update([
        'details'=>$req->details
    ]);
    return redirect()->route('beautician.profile');
}

}
