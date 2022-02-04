@extends('website.master')
@section('contents'))
<form action="{{route('customer.actual_update')}}" method="POST"enctype="multipart/form-data">
@method("PUT")
@csrf
<div class="reg-form">

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input name='email' type="text" value="{{auth()->user()->email}}" class="form-control" id="id" aria-describedby="email">
    <div id="email" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="phone_number" class="form-label">Phone Number</label>
    <input name='phone_number' type="number" value="{{auth()->user()->phone_number}}" class="form-control" id="id" aria-describedby="phone_number">
    <div id="phone_number" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input name='address' type="text" value="{{auth()->user()->address}}" class="form-control" id="id" aria-describedby="address">
    <div id="address" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="details" class="form-label">Image</label>
    <input name='image' type="file" class="form-control" id="id" aria-describedby="details">
    <div id="details" class="form-text"></div>
  </div>
  </div>

 <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection 