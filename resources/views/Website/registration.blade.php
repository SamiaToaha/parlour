@extends('website.master')
@section('contents')


<div class="pt-5 m-5 reg-form">
<form action="{{route('user.store')}}" width="50px" method="POST">
    @csrf
    @if(session()->has('success'))
  <p class="alert alert-success">
    
    {{session()->get('success')}}
</p>
@endif
<h4 style="text-align: center;margin-bottom: 50px;">
  Register Yourself</h4>
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="Email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Phone number</label>
    <input type="text" name="Phone_number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone number">
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="address" placeholder="address">
    
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>















@endsection
