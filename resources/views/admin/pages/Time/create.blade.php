@extends('admin.welcome')
@section('content')


<form action="{{route('admin.time.store')}}" method="POST">
@csrf

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


<div class="mb-3">
<label for="name" class="form-label">Serial</label>
<input name='serial' type="number" class="form-control" id="serial">
</div>
<div class="mb-3">
<label for="name" class="form-label">Service Name</label>
<input name='service name' type="text" class="form-control" id="service name">
</div>
<div class="row">
<label for="details" class="form-label">Time Slot</label>
<input name='time' type="time" class="form-control" id="id" aria-describedby="details">
<div id="details" class="form-text"></div>
</div>
<button type="submit" class="btn btn-primary"><a href=""></a>Submit</button>

</form>

@endsection