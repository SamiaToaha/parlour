@extends('admin.welcome')
@section('content')
<div class="heading">
<h1>Customization according to your requirements:</h1> 


<form action="{{route('service_category.profile')}}" method="GET">

</form>

<a href="{{route('category.list')}}"><button type="submit" class="btn btn-success">Create Category</button></a>

</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
      <th scope="col"></th>
     
      <th></th>
      <th></th>
     
    </tr>
  </thead>
  <tbody>
   @foreach($createlist as $item)
    <tr>
      <th>{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>
                        <a class="btn btn-primary" href="{{route('category.view',$item->id)}}">View</a>
                        <a class="btn btn-primary" href="{{route('category.delete',$item->id)}}">Delete</a>
</td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection