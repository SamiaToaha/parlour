@extends('admin.welcome')
@section('content')
<div class="reg-form">
<div class="container">
  <h2>Date Wise</h2>
  <!-- <p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p> -->
  <form class="form-inline" action="{{route('check.report')}}">
    <div class="form-group">
      <label for="date">From Date:</label>
      <input type="date" class="form-control" id="fromdate" placeholder="From Date" name="fromdate">
    </div>
    <div class="form-group">
      <label for="date">To Date:</label>
      <input type="date" class="form-control" id="todate" placeholder="To Date" name="todate">
    </div>
    <div class="form-group">
        
    </div>
    <button type="submit" class="btn btn-default">Search</button>
  </form>
  
  <table class="table table-bordered">
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
        @foreach($reports as $key=>$item )
    <tr>
    <th>{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->phonenumber}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->time}}</td>
      <td>{{$item->date}}</td>
@endforeach
</tbody>
</table>

</div>
</div>


@endsection