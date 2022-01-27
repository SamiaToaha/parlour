<!-- @extends('admin.welcome')
@section('content')

<h1>Customer list</h1>




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


<div class="container">
<form action="{{route('admin.customer.store')}}" method="POST">
@csrf

<div class="row">
  <label for="name" class="form-label">Name</label>
  <input name='name' type="text" class="form-control" id="name">
</div>

<div class="row">
  <label for="id" class="form-label">Id</label>
  <input name='id' type="number" class="form-control" id="id" aria-describedby="id">
  <div id="emailHelp" class="form-text"></div>
</div>
<div class="row">
  <label for="details" class="form-label">Phone Num</label>
  <input name='details' type="text" class="form-control" id="id" aria-describedby="details">
  <div id="details" class="form-text"></div>
</div>

<button type="submit" class="btn btn-primary"><a href=""></a>Submit</button>
</form>
</div>

@endsection -->