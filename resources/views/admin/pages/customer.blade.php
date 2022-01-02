@extends('admin.welcome')
@section('content')
<form  action="{{route('customer.profile')}}" method='POST'>
    @csrf
<div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input name='Name' type="text" class="form-control" id="exampleInputNamet1">
  </div>

 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name='Email' type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name='Password' type="string" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>

  <button type="submit" class="btn btn-primary"><a href=""></a>Submit</button>
@endsection