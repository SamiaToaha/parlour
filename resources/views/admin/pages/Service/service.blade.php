@extends('admin.welcome')
@section('content')

<a href="{{route('service.create')}}"><button type="submit" class="btn btn-success">Create Service</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
     
      
     
    </tr>
  </thead>
  <tbody>
   @foreach($servicelist as $item)
    <tr>
      <th>{{$item->id}}</th>
      <td>{{$item->name}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection