@extends('website.master')
@section('contents')

<style>

 table thead th{
   color: white;
   font-size: 18px;
 }

 table tbody td{
   color: white;
   font-size: 15px;
 }
</style>

<div class="reg-form container">

    <h3 style="padding-top: 100px;">My Cart ({{session()->has('cart') ? count(session()->get('cart')):0}})</h3>
    
<h4 style="text-align: center;margin-bottom: 50px;">
    
</h4>
</div>

    <table class="table">
        <thead>
        <tr>
            <!-- <th scope="col">ID</th> -->
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Sub Total</th>
        </tr>
        </thead>
        <tbody>

        @if($carts)
        @foreach($carts as $key=>$cart)
    
        <tr>
            
            <td>{{$cart['name']}}</td>
            <td>{{$cart['price']}}</td>
            <td>{{$cart['item_qty']}}</td>
            <td>{{$cart['price'] * $cart['item_qty']}}</td>
        </tr>
        @endforeach
            @endif

        </tbody>
    </table>
    <a href="{{route('cart.confirm')}}" class="btn btn-warning">Confirm Cart</a>
    <a href="{{route('cart.clear')}}" class="btn btn-warning">Clear Cart</a>
    

@endsection