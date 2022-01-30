@extends('admin.welcome')
@section('content')


  @if(session()->has('success'))
  <p class="alert alert-success">
    
    {{session()->get('success')}}
</p>
@endif


@if ($errors->any())
<div class="alert alert-danger">
  <ul>

  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
</ul>
</div>
@endif

<form action="{{route('admin.service.store')}}" method="POST" enctype="multipart/form-data" >
  @csrf
  



  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input name='name' type="text" class="form-control" id="name">
  </div>

  <div class="mb-3">
    <label for="id" class="form-label">Description</label>
    <input name='description' type="text" class="form-control" id="id" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input name='price' type="number" class="form-control" id="id" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label for="details" class="form-label">Image</label>
    <input name='image' type="file" class="form-control" id="id" aria-describedby="details">
    <div id="details" class="form-text"></div>
  </div>

  <div class="form-group">
    <label for="category" style="font-size:20px;"><b>Select Category</label></b>
    <select name="category" class="form-control">
      <option>Select Category</option>
     

      @foreach ($list as $item)
      <option value="{{$item->id}}">{{$item->category}}</option>
      @endforeach
    </select>
    </div>

 <button type="submit" class="btn btn-primary"><a href=""></a>Submit</button>
</form>
@endsection