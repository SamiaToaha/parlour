@extends('website.master')
@section('contents')
<div class="heading">
<h1>Available Time Slot</h1>

<form action="{{route('website.time')}}" method="GET">
</form>


</div>
<div class="reg-form">
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
  @foreach($choose as $item)
    <tr>
      <th>{{$item->serial}}</th>
      <td>{{$item->servicename}}</td>
      <td>{{$item->timeslot}}</td>


  
</tr>
    @endforeach

  </tbody>
</table>


@endsection