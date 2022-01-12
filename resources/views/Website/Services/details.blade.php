@extends('website.master')
@section('contents')
<style>
        p{
                color: white;
                font-size: 20px;
                margin-left: 10%;       
        }
</style>
<div class="reg-form">
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Service Details</h5>
        <p class="card-text" >Service Name: {{$data->name}}</p>
        <p class="card-text" >Service Id: {{$data->id}}</p>
        </div>
<td >
        <a class="btn btn-primary" href="{{route('cart.add',$data->id)}}">Add to Cart</a>
        </td>
</div>
</div>
@endsection