<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function showcategory(){
        return view('admin.service_category');
    }
    
        public function create_service(){
            return view('admin.pages.Service_Category.create_list');
        }
    }
    

