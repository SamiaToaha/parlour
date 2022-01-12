@extends('admin.welcome')
@section('content') 

 

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

    
  
<form action="{{route('admin.beautician.store')}}" method="POST" enctype="multipart/form-data">
@csrf

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input name='name' type="text" class="form-control" id="name">
  </div>

  <div class="mb-3">
    <label for="id" class="form-label">Id</label>
    <input name='id' type="number" class="form-control" id="id" aria-describedby="id">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="details" class="form-label">Details</label>
    <input name='details' type="text" class="form-control" id="id" aria-describedby="details">
    <div id="details" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="details" class="form-label">Image</label>
    <input name='image' type="file" class="form-control" id="id" aria-describedby="details">
    <div id="details" class="form-text"></div>
  </div>
 <button type="submit" class="btn btn-primary"><a href=""></a>Submit</button>
</form>
@endsection