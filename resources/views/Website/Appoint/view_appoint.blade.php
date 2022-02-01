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
<div class="reg-form">
<h4 style="text-align: center;margin-bottom: 50px;">
 View Appointment Status</h4>

<table class="table">

  <thead> 

    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Address</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
      

      <th></th>
      <th></th>
      
     
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
      
      <td>{{$item->status}}</td>
</td>

      </tr>
    @endforeach

  
    
  </tbody>
</table>
</div>

</div>
@endsection