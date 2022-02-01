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




<div class="row">
<label for="details" class="form-label">Starting Time</label>
<input name='starting_time' type="time" class="form-control" id="id" aria-describedby="details">
<div id="details" class="form-text"></div>
</div>

<div class="row">
<label for="details" class="form-label">Ending Time</label>
<input name='ending_time' type="time" class="form-control" id="id" aria-describedby="details">
<div id="details" class="form-text"></div>


<div class="form-group">
    <label for="service" style="font-size:20px;"><b>Service timeslot</label></b>
    <select name="service" class="form-control">
      <option>Name</option>
     

      @foreach ($create as $item)


      <option value="{{$item->id}}">{{$item->name}}</option>
      @endforeach
    </select>
    </div>
</div>

<button type="submit" class="btn btn-primary"><a href=""></a>Submit</button>

</form>

@endsection