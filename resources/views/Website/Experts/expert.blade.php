@extends('website.master')
@section('contents')

<style>

 table thead th{
   color: white;
   font-size: 18px;
 }

 table tbody td{
   color: white;
   font-size: 15px;
 }
</style>
<h4>
    Service Category List
</h4>

<div class="reg-form">

<table class="table">

  <thead> 

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Available</th>
      <th scope="col">Image</th>
      
    </tr>
  </thead>
  <tbody>
   
   @foreach($expert as $key=>$item)
  <tr>
      <td>{{$key+1}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->details}}</td>
      <td>{{$item->available}}</td>
      <td>   
        <img style="border-radius: 10px;" height="80px" width="120px;" src="{{url('storage/beautician/'.$item->image)}}" class="img-responsive" >
      </td>
     
      <td>
                        <a class="btn btn-primary" href="{{route('expert.visit.show',$item->id)}}">View</a>
                        </td>
      </tr>
    @endforeach


    
  </tbody>
</table>

@endsection