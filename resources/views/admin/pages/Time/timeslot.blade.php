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
      <th scope="col">Serial</th>
      <th scope="col">Service Name</th>
      <th scope="col">Time Slot</th>
     
     
      <th></th>
      <th></th>
     
    </tr>
  </thead>
  </table>
  @foreach($create as $item)
    <tr>
      <th>{{$item->serial}}</th>
      <td>{{$item->servicename}}</td>
      <td>{{$item->timeslot}}</td>
     
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