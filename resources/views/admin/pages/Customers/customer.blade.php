@extends('admin.welcome')
@section('content')
<div class="heading">
<h1>Beautician list</h1>

<form action="{{route('customer.show')}}" method="GET">
    <input value="{{$key}}" name="search" class="search-input" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-success" type="submit">Search</button>
</form>

<a href="{{route('customer_list.show')}}"><button type="button" class="btn btn-success">Add Customer</button></a>
</div>

<table>


  <thead> 
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      
      
     
      
     
    </tr>
  </thead>
  <tbody>
   
   @foreach($customerlist as $key=>$item)
  <tr>
      <th>{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->details}}</td>
      <td>
                        <a class="btn btn-primary" href="{{route('customer.view',$item->id)}}">View</a>
                        <a class="btn btn-primary" href="{{route('customer.delete',$item->id)}}">Delete</a>
</td>
      
    </tr>
    @endforeach


    
  </tbody>
</table>





@endsection