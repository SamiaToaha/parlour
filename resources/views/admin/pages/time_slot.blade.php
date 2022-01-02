@extends('admin.welcome')
@section('content')
<h1>Available Time Slot</h1>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Beautician Name</th>
      <th scope="col">Available Time</th>
      <th scope="col">Available Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Rosy</td>
      <td>9 a.m-6 p.m</td>
      <td>All day without Friday</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tanjina</td>
      <td>12 p.m-8 p.m</td>
      <td>All day without Sunday</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Rifah</td>
      <td>10 a.m-6 p.m</td>
      <td>All day without Saturday</td>
    </tr>
  </tbody>
</table>


















@endsection