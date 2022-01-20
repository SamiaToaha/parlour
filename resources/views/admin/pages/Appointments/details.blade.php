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
      <th scope="col">Service Name</h>
      <th scope="col">Service_quantity</th>
      <th scope="col">Price</th>

      

      <th></th>
      <th></th>
      
    </tr>
  </thead>
  <tbody>
   
  @foreach($details as $key=>$item)
  <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->item_qty}}</td>
      <td>{{$item->price}}</td>


      </tr>

      @endforeach
    
  </tbody>

</table>
<h5>Total Price: <strong>{{$total}}</strong></h5>
<a href="{{route('payment.view',$appointment_id)}}">Payment</a>



@endsection