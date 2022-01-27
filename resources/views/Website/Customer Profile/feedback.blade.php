@extends('website.master')
@section('contents')


<div class="pt-5 m-5 reg-form">
<form action="{{route('feedback.store')}}" width="50px" method="POST">
    @csrf
    @if(session()->has('success'))
  <p class="alert alert-success">
    
    {{session()->get('success')}}
</p>
@endif

<div class="form-group">
    <label for="exampleInputEmail1">About Service</label>
    <input type="text" name="about_service" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">About Beautician</label>
    <input type="text" name="about_beautician"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
    
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Any Recommendation</label>
    <input type="text" name="any_recommendation" class="form-control" id="exampleInputEmail1" aria-describedby="address">
    
  </div>

  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>


@endsection