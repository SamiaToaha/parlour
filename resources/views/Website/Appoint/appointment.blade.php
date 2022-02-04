@extends('website.master')
@section('contents')


@if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
    </div>
@endif

<div class="reg-form">

<h1 style="text-align: center;margin-bottom: 50px;">
  Fill up the form for booking Appointment
</h1>

<div class="container mt-3">

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

<!-- <div class="row">
@foreach($list as $lists)
<p>{{$lists->name}}</p>
@endforeach
</div> -->

<div class="form-group">
    <label for="category" style="font-size:20px;"><b>Select Beautician</label></b>
    <select name="category" class="form-control">
      <option>Select Beautician</option>
     

      @foreach ($list as $item)
      <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
    </select>
    </div>

<button type="submit" class="btn btn-primary"><a href=""></a>Submit</button>
</form>
</div>

</div>

@endsection