@extends('admin.welcome')
@section('content')

<a href="{{route('admin.appointment.store')}}"><button type="submit" class="btn btn-success">Appointment Booking</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">PhoneNumber</th>
      <th scope="col">Address</th>

     
      
     
    </tr>
  </thead>
  <tbody>
   @foreach($appointment as $item)
    <tr>
      <th>{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->phonenumber}}</td>
      <td>{{$item->address}}</td>
      
      

      
      
    </tr>
    @endforeach
  </tbody>
</table>




@endsection