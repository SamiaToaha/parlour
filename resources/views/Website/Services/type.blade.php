@extends('website.master')
@section('contents')

<h4>
    Service Category List
</h4>

<div class="reg-form">

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($type as $key=>$item)
    <tr>
    <th>{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->price}}</td>
       
       <td><a class="btn btn-primary" href="{{route('service.show',$item->id)}}">View</a></td>
     
    </tr>
    @endforeach

  </tbody>
</table>



@endsection