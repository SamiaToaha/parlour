@extends('admin.welcome')

@section('content')


<form action="{{route('admin.service.store')}}" method='POST'>
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input name='Email' type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input name='Name' type="text" class="form-control" id="exampleInputNamet1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPhoneNumber1" class="form-label">Phone Number</label>
    <input name='PhoneNumber' type="text" class="form-control" id="exampleInputPhoneNumber1">
   
    
  </div>

  <div class="mb-3">
    <label for="exampleInputAddress1" class="form-label">Address</label>
    <input name='Address' type="text" class="form-control" id="exampleInputAddress1">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection