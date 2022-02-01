@extends('website.master')
@section('contents')


@if(session()->has('success'))
<p class="alert alert-success">
  
  {{session()->get('success')}}
</p>
@endif


@if ($errors->any())
<div class="alert alert-danger">
<ul>

@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<div class="reg-form">
  
<h4 style="text-align: center;margin-bottom: 50px;">
  Please fill up the form for booking Appointment</h4>
<div class="container">
<form action="{{route('admin.appointment.store')}}" method="POST">
@csrf


<div class="row">
  
  <label for="name" class="form-label">Name</label>
  <input name='name' type="text" class="form-control" id="name">
</div>

<div class="row">
  <label for="id" class="form-label">Phone Number</label>
  <input name='phone_number' type="number" class="form-control" id="id" aria-describedby="id">
  <div id="emailHelp" class="form-text"></div>
</div>

<div class="row">
  <label for="details" class="form-label">Address</label>
  <input name='address' type="text" class="form-control" id="id" aria-describedby="details">
  <div id="details" class="form-text"></div>
</div>

<div class="row">
<label for="date" class="form-label">Date</label>
  <input name='date' type="date" class="form-control" id="id" aria-describedby="date">
  <div id="date" class="form-text"></div>
</div>

<div class="row">
<label for="details" class="form-label">Time</label>
  <input name='time' type="time" class="form-control" id="id" aria-describedby="details">
  <div id="details" class="form-text"></div>
</div>

<div class="row">
<label for="details" class="form-label"> Select Beautician</label>
  <input name='select_beautician' type="text" class="form-control" id="id" aria-describedby="details">
  <div id="details" class="form-text"></div>
</div>

<button type="submit" class="btn btn-primary"><a href=""></a>Submit</button>
</form>
</div>

</div>

@endsection