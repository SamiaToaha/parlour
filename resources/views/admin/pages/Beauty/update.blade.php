@extends('admin.welcome')
@section('content')
<form action="{{route('beautician.actual_update',$b->id)}}" method="POST" enctype="multipart/form-data">
@csrf
    @method("PATCH")
  <div class="mb-3">
    <label for="details" class="form-label">Details</label>
    <input name='details' type="text" value={{$b->details}} class="form-control" id="id" aria-describedby="details">
    <div id="details" class="form-text"></div>
  </div>
 <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection