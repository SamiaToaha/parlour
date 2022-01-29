@extends('admin.welcome')
@section('content')
<div class="heading">
<h1>Service list</h1>

<form action="{{route('create.package')}}" method="GET">

</form>

<a href="{{route('package.list')}}"><button type="submit" class="btn btn-success">Create Package</button></a>

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Package Details</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      
     
    </tr>
  </thead>

   

  
</table>
@endsection