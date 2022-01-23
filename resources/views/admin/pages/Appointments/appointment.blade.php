@extends('admin.welcome')
@section('content')
<div class="heading">
<h1>Appointment list</h1>

<form action="{{route('appointment.profile')}}" method="GET">
<input value="{{$key}}" name="search" class="search-input" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-success" type="submit">Search</button>
    </form>

<!-- <a href="{{route('appointment.list')}}"><button type="button" class="btn btn-success">Booking Appointment</button></a> -->
<a href="{{route('appointment.list')}}"><button type="button" class="btn btn-success">Payment</button></a>
</div>
<table class="table">

  <thead> 

    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Address</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
      

      <th></th>
      <th></th>
      
     
    </tr>
  </thead>
  <tbody>
   
   @foreach($bookinglist as $key=>$item)
  <tr>
      <th>{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->phonenumber}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->time}}</td>
      <td>{{$item->date}}</td>
      <td>
   
                        <a class="btn btn-primary" href="{{route('appointment.details',$item->id)}}">Appointment Details</a>
                        <a class="btn btn-warning" href="{{route('appointment.delete',$item->id)}}">Delete</a>
                        <a class="btn btn-success" href="{{route('appointment.action',$item->id)}}">{{$item->status}}</a>
        
</td>

      </tr>
    @endforeach


    
  </tbody>
</table>

@endsection