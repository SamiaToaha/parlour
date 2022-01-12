@extends('admin.welcome')
@section('content')
<div class="heading">
<h1>Service list</h1>

<form action="{{route('admin.service')}}" method="GET">


<input value="{{$key}}" name="search" class="search-input" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-success" type="submit">Search</button>
</form>

<a href="{{route('service.create')}}"><button type="submit" class="btn btn-success">Create Service</button></a>

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
     
      <th></th>
      <th></th>
     
    </tr>
  </thead>
  <tbody>
   @foreach($createservice as $item)
    <tr>
      <th>{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->price}}</td>
      <td><img src="{{url($item->image)}}" alt=""></td>
      <td>
                        <a class="btn btn-primary" href="{{route('service.view',$item->id)}}">View</a>
                        <a class="btn btn-primary" href="{{route('service.delete',$item->id)}}">Delete</a>
                        <a class="btn btn-primary" href="{{route('service.update',$item->id)}}">UPDATE</a>
</td>
      
      <!-- <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></td> -->
     
      
    </tr>
    @endforeach

  </tbody>
</table>
@endsection