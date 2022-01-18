@extends('admin.welcome')
@section('content')
<form action="{{route('service.actual_update',$s->id)}}" method="POST" enctype="multipart/form-data">
@csrf
    @method("PATCH")

  <div class="mb-3">
    <label for="details" class="form-label">Price</label>
    <input name='price' type="number" value={{$s->price}} class="form-control" id="id" aria-describedby="price">
    <div id="details" class="form-text"></div>
  </div>

 <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection