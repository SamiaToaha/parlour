<!-- @extends('website.master')
@section('contents'))
<form action="{{route('customer.actual_edit',$profile->id)}}" method="POST">
@method("PUT")
@csrf
    

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input name='email' type="text" value={{$profile->email}} class="form-control" id="id" aria-describedby="email">
    <div id="email" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="mobile" class="form-label">Mobile</label>
    <input name='mobile' type="number" value={{$profile->mobile}} class="form-control" id="id" aria-describedby="mobile">
    <div id="mobile" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="address" class="form-label">Address</label>
    <input name='address' type="text" value={{$profile->address}} class="form-control" id="id" aria-describedby="address">
    <div id="address" class="form-text"></div>
  </div>

 <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection --> 