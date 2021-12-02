@extends('admin.welcome')
@section('content')

<a href="{{route('appointment')}}"><button type="submit" class="btn btn-success">Create Service</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone_number</th>
      <th scope="col">Address</th>

     
      
     
    </tr>
  </thead>
  <tbody>
   @foreach($servicelist as $item)
    <tr>
      <th>{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->phone_number}}</td>
      <td>{{$item->address}}</td>
      
      

      
      
    </tr>
    @endforeach
  </tbody>
</table>




@endsection