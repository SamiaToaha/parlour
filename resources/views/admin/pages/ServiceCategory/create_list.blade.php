@extends('admin.welcome')
@section('content')


<form action="{{route('category.store')}}" method="POST"enctype="multipart/form-data">
  @csrf

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

<div class="mb-3">
    <label for="id" class="form-label">Id</label>
    <input name='id' type="number" class="form-control" id="id" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>

  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input name="category" type="text" class="form-control" id="id" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>

<div class="mb-3">
    <label for="service_name" class="form-label">Service Name</label>
    <input name='service_name' type="text" class="form-control" id="name">
  </div>

  <div class="mb-3">
    <label for="details" class="form-label">Image</label>
    <input name='image' type="file" class="form-control" id="id" aria-describedby="details">
    <div id="details" class="form-text"></div>
  </div>

 

 <button type="submit" class="btn btn-primary"><a href=""></a>Submit</button>
</form>




  
@endsection