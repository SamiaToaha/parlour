<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Models\Service_Category;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function viewCategory()
    {
        $category = Service_Category::all();
        return view('Website.service_category', compact('category'));
    }
}

