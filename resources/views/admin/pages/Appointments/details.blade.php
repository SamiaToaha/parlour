@extends('admin.welcome')
@section('content')

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Appointment Details</h5>
        <p class="card-text" > Name: {{$appoint->name}}</p>
        <p class="card-text" >phoneNumber: {{$appoint->phoneNumber}}</p>
        <p class="card-text" > Address: {{$appoint->name}}</p>
        <p class="card-text" >Date: {{$appoint->id}}</p>
      

        </div>
</div>
@endsection