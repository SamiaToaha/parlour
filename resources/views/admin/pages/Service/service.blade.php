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
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      
     
    </tr>
  </thead>
  <tbody>
   @foreach($createservice as $item)
    <tr>
      <th>{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->price}}</td>
      <td><img src="{{url('/storage/service/'.$item->image)}}" alt=""></td>
      <td>
                        <a class="btn btn-primary" href="{{route('service.view',$item->id)}}">View</a>
                        <a class="btn btn-primary" href="{{route('service.delete',$item->id)}}">Delete</a>
                        <a class="btn btn-primary" href="{{route('service.update',$item->id)}}">UPDATE</a>
</td>
      
     
     
      
    </tr>
    @endforeach

  </tbody>
</table>
@endsection