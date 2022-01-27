<link rel="stylesheet" href="{{url('css/style.css')}}">
<form id="login-form" class="form" action="{{route('admin.doLogin')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="email" class="form-control">Email address</label>
    <input type="text" name="email" id="email" class="form-control"> 
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password"name="password" id="password" class="form-control"> </br>

  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>