@extends('admin.welcome')
@section('content')
<form action="{{route('admin.service.store')}}" method="POST">
  @csrf
 
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input name='name' type="text" class="form-control" id="name">
  </div>

  <div class="mb-3">
    <label for="id" class="form-label">Id</label>
    <input name='id' type="number" class="form-control" id="id" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>

 <button type="submit" class="btn btn-primary"><a href=""></a>Submit</button>
</form>
@endsection