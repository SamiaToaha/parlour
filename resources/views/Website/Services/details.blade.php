@extends('website.master')
@section('contents')
<style>
        p{
                color: white;
                font-size: 20px;
                margin-left: 10%;  
                margin-top: 2%;      
        }
        img{
                margin-left: 10%;       
        }
</style>
<div class="reg-form">
<div class="card">
  <div class="card-body">
  <img style="border-radius: 4px;" width="500px;" src=" {{url('storage/service/'.$data->image)}}" alt="service">
    <h5 class="card-title">Service Details</h5>
        <p class="card-text" >Service Name: {{$data->name}}</p>
        <p class="card-text" > Description: {{$data->description}}</p>
        <p class="card-text" > Price: {{$data->price}}</p>
        </div>
<td >
        <a class="btn btn-primary" href="{{route('cart.add',$data->id)}}">Add to Cart</a>
        </td>
</div>
</div>
@endsection