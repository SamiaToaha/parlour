@extends('website.master')
@section('contents')


<div class="card">
  <div class="card-body">
    <h5 class="card-title">Customer Details</h5>
        <p class="card-text" >Customer Name: {{$customer->name}}</p>
        <p class="card-text" >Customer Id: {{$customer->id}}</p>
        <p class="card-text" >Purchase Details: {{$customer->details}}</p>


        </div>
</div>
@endsection