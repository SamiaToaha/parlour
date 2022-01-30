@extends('admin.welcome')
@section('content')
<div class="heading">
<h1>Appointment list</h1>
<div class="reg-form">
<div class="container" style="display:flex;">
            <div class="form-group col-4">
              <label for="fromdate" style="font-size:20px;"><b>From</label></b>
              <input type="date" class="form-control" id="fromdate" name="fromdate" placeholder="From">
            </div>

            <div class="form-group col-4">
                <label for="todate" style="font-size:20px;"><b>To</label></b>
                <input type="date" class="form-control" id="todate" name="todate" placeholder="To">
            </div>
            </div>
            </div>


<form action="{{route('appointment.profile')}}" method="GET">
<input value="{{$key}}" name="search" class="search-input" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-success" type="submit">Search</button>
    </form>

<!-- <a href="{{route('appointment.list')}}"><button type="button" class="btn btn-success">Booking Appointment</button></a> -->

</div>
<table class="table">

  <thead> 

    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Address</th>
      <th scope="col">Time</th>
      <th scope="col">Date</th>
      <th scope="col">SelectBeautician</th>
      <th scope="col">Action</th>
      <th scope="col">Payment Status</th>
      

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
      <td>{{$item->selectbeautician}}</td>
      <td>
   
                        <a class="btn btn-primary" href="{{route('appointment.details',$item->id)}}">Appointment Details</a>
                        <!-- <a class="btn btn-warning" href="{{route('appointment.delete',$item->id)}}">Delete</a> -->
                        <a class="btn btn-success" href="{{route('appointment.action',$item->id)}}">{{$item->status}}</a>
                       

                        <a href="{{route('payment.view',$item->id)}}">{{$item->appointment_id}}<button type="button" class="btn btn-danger">Payment</a>
                       
                        </td>
                        <td>
                        @if($item->status != 'Pending')
                        <a class="btn btn-success" href="#">Approved</a>
                        @endif
                        </td>

      </tr>
    @endforeach

  
    
  </tbody>
</table>

@endsection