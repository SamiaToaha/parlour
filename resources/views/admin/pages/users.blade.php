<!-- @extends('admin.welcome')
@section('content')
<div class="pt-5 m-5 reg-form">
<form  action="{{route('users.profile')}}" method='POST'>
    @csrf
    @if(session()->has('success'))
  <p class="alert alert-success">
    
    {{session()->get('success')}}
</p>
@endif

<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="Email"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>





@endsection -->