@extends('admin.welcome')
@section('content')

<div class="heading">
<h1>Appointment list</h1>

</form>
</div>
<table class="table">

  <thead> 

    <tr>
      <th scope="col">ID</th>
      <th scope="col">Customer_id</th>
      <th scope="col">Service_id</h>
      <th scope="col">Service_quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Total_price</th>
      <th scope="col">Status</th>
      

      <th></th>
      <th></th>
      
     
    </tr>
  </thead>
  <tbody>
   
  @foreach($appoint as $key=>$item)
  <tr>
      <td>{{$key}}</td>
      <td>{{optional($item)->customer_id}}</td>
      <td>{{optional($item)->service_id}}</td>
     <td>{{optional($item)->service_quantity}}</td>
      <td>{{optional($item)->price}}</td>
      <td>{{optional($item)->total_Price}}</td>
      <td>{{optional($item)->status}}</td>
      </tr>

      @endforeach
    
  </tbody>
</table>



@endsection