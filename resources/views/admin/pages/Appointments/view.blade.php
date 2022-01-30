@extends('admin.welcome')
@section('content')
<form action="{{route('payment.add',$id)}}" method="POST">
    @csrf

  <div class="form-group">
    <label for="exampleInputEmail1">Appointment Id</label>
    <input type="text" class="form-control" name="appointment_id">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Total Amount</label>
    <input type="number" class="form-control" name="total_amount">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection