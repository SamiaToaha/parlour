<div class="reg-form">

<h1 style="text-align: center;margin-bottom: 50px;">
   Admin Login
</h1>

<div class="container mt-3">
<link rel="stylesheet" href="{{url('css/style.css')}}">
<form action="{{route('admin.doLogin')}}" method="post">
  @csrf
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email Address</label>
    <input type="email" name="email" id="email" class="form-control"> </br>
    <div id="emailHelp" class="form-text"></div>
  
  
  </div>
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" id="password" class="form-control"> </br>
    <div id="emailHelp" class="form-text"></div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>