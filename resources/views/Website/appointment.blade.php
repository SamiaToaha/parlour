@extends('website.master')
@section('contents')
<h4>
    Service Category List
</h4>

<div class="reg-form">

<table class="table">

  <thead> 

    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Address</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      


      
     
    </tr>
  </thead>
  <tbody>
   
   @foreach($appointment as $key=>$item)
  <tr>
      <th>{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->phonenumber}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->time}}</td>
      <td>{{$item->date}}</td>
     
      </tr>
    @endforeach


    
  </tbody>
</table>

@endsection