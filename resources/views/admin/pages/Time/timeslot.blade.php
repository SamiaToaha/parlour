@extends('admin.welcome')
@section('content')
<div class="heading">
<h1>Available Time Slot</h1>

<form action="{{route('timeslot.profile')}}" method="GET">
</form>
<a href="{{route('time.create')}}"><button type="submit" class="btn btn-success">Create Timeslot</button></a>


</div>
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
  @foreach($create as $item)
    <tr>
     
    <!-- <td>{{$item->name}}</td> -->
      <td>{{$item->service->name}}</td>
      <td>{{$item->starting_time}}</td>
      <td>{{$item->ending_time}}</td>
     
      <!-- <td>
                        <a class="btn btn-primary" href="{{route('service.view',$item->id)}}">View</a>
                        <a class="btn btn-primary" href="{{route('service.delete',$item->id)}}">Delete</a>
                        <a class="btn btn-primary" href="{{route('service.update',$item->id)}}">UPDATE</a>
</td> -->

  
</tr>
    @endforeach

  </tbody>
</table>


@endsection