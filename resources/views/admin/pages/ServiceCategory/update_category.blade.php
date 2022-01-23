@extends('admin.welcome')
@section('content')
<form action="{{route('category.real_update',$cat->id)}}" method="POST">
@csrf
    @method("PATCH")

  <div class="mb-3">
    <label for="category" class="form-label">Category</label>
    <input name='category' type="text" value={{$cat->category}} class="form-control" id="id" aria-describedby="category">
    <div id="category" class="form-text"></div>
  </div>

 <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection