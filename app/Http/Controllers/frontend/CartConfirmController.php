<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartConfirmController extends Controller
{
    public function confirmCart(Request $request){
        $carts = session ('cart');
    }
}
