@extends('admin.welcome')
@section('content')
<div class="heading">
<h1>Customer list</h1>

<form action="{{route('customer.show')}}" method="GET">
    <input value="{{$key}}" name="search" class="search-input" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-success" type="submit">Search</button>
    </form>


</div>
<div class="reg-form">
<table class="table">

  <thead> 
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
     
      
      
      <th></th>
     
    </tr>
  </thead>
  <tbody>
   
   @foreach($customerlist as $key=>$item)
  <tr>
      <th>{{$key+1}}</th>
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->phone}}</td>
      <td>{{$item->address}}</td>

      <td>
                        <a class="btn btn-primary" href="{{route('customer.view',$item->id)}}">View</a>
                        <a class="btn btn-success" href="{{route('customer.delete',$item->id)}}">Delete</a>
                        <!-- <a class="btn btn-danger" href="{{route('customer.update',$item->id)}}">UPDATE</a> -->
</td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>
</div>

@endsection