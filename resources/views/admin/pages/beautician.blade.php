@extends('admin.welcome')
@section('content')
<div class="heading">
<h1>Beautician list</h1>
<button>Add Beautician</button>
</div>

<div class="reg-form">

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Specialist</th>
      <th></th>
     
      
     
    </tr>
  </thead>
  <tbody>
   
   
  <tr>
      <th>1</th>
      <td>Rosy</td>
      <td>Hair care,Skin care,Makeover</td>
      <td><a href=''><button type="button" class="btn btn-success">Edit</button></a></td>
      
    </tr>


    <tr>
      <th>2</th>
      <td>Tanjina</td>
      <td>Makeover,Face treatment,Henna</td>
      <td><a href=""><button type="button" class="btn btn-success">Edit</button></a></td>
      
      
    </tr>


    <tr>
      <th>3</th>
      <td>Rifah</td>
      <td>Makeover,Saree draping,Hair care</td>
      <td><button type="button" class="btn btn-success">Edit</button></td>
      
    </tr>




    
  </tbody>
</table>
</div>



@endsection