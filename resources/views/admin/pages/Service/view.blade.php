@extends('admin.welcome')
@section('content')

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Service Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/storage/beautician/'.$type->image)}}" alt="service">
    
        <p class="card-text" >Service Name: {{$type->name}}</p>
        <p class="card-text" >Service Id: {{$type->id}}</p>
        </div>
</div>
@endsection