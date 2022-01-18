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
        Service_Category::create([
            'id'=>$request->id,
            'name'=>$request->name,
            'category'=>$request->category,


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



}
    

