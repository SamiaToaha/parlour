@extends('admin.welcome')
@section('content')
<form action="{{route('payment.add',$id)}}" method="POST">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Trans ID</label>
    <input type="text" class="form-control" name="trans_id">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Method</label>
    <input type="text" class="form-control" name="method">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ammount</label>
    <input type="number" class="form-control" name="ammount">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection