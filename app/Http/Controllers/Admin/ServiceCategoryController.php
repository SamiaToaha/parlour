<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service_Category;

class ServiceCategoryController extends Controller
{
    public function showcategory(){
        
        $createlist = Service_Category::all();
        $key =null;
        if(request()->search){
        $key = request()->search;
           $createlist = Service_Category::where('name','LIKE',"%{$key}%")->get();
           return view('admin.pages.ServiceCategory.service_category',compact('createlist','key'));}

          $createlist = Service_Category::all();
          return view('admin.pages.ServiceCategory.service_category',compact('createlist','key'));
        
        $createlist = Service_Category::all();

        return view('admin.pages.ServiceCategory.service_category',compact('createlist'));
    }
    public function CategoryStore(Request $request){
        // dd($request->all());

        $image_name=null;         
        if($request->hasFile('image'))
        {
            $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();
    
            $request->file('image')->storeAs('/service category',$image_name);
        }

        Service_Category::create([
            'id'=>$request->id,
            'category'=>$request->category,
            'image'=> $image_name,
            'service_name'=>$request->service_name,


        ]);
        return redirect()->back()->with('success','Category added Successfully');
    }
        public function categorylist(){
            return view('admin.pages.ServiceCategory.create_list');
        }

        public function categoryDetails($category_id)
        {
            $list=Service_Category::find($category_id);
            return view('admin.pages.ServiceCategory.details',compact('list'));
        }
         public function categoryDelete($category_id)
     {
        Service_Category::find($category_id)->delete();
        return redirect()->back()->with('success','category Deleted.');
     }

     public function categoryupdate($id)
     {
         $cat = Service_Category::find($id)->first();
         return view('admin.pages.ServiceCategory.update_category',compact('cat'));
     }
     public function category_update($id, Request $req)
     {
         $cat = Service_Category::find($id)->first();
         $cat->update([
             
             'category'=>$req->category
         ]);
         return redirect()->route('service_category.profile');
     }
}
    

