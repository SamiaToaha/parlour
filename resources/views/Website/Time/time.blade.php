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



<form action="{{route('website.time')}}" method="GET">
</form>



<div class="reg-form">
<h4 style="text-align: center;margin-bottom: 50px;">
  Available Time Slot</h4>
<table class="table">
  <thead>
    <tr>
    
      <th scope="col">Service Name</th>
      <th scope="col">Starting Time</th>
      <th scope="col">Ending Time</th>
     
     
      <th></th>
      <th></th>
     
    </tr>
  </thead>
  <tbody>
  @foreach($choose as $item)
    <tr>
   
      <td>{{$item->service->name}}</td>
      <td>{{$item->starting_time}}</td>
      <td>{{$item->ending_time}}</td>


  
</tr>
    @endforeach

  </tbody>
</table>


@endsection