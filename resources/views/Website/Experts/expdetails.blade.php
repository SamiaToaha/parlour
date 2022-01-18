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
    <h5 class="card-title">Beautician Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('storage/beautician/'.$exp->image)}}" alt="beautician">
       <p class="card-text" >Beautician Name: {{$exp->name}}</p>
        <p class="card-text" >Beautician Id: {{$exp->id}}</p>
        <p class="card-text" >Beautician Details: {{$exp->details}}</p>


        </div>
@endsection