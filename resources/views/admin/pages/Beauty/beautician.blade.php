@extends('admin.welcome')
@section('content')
<div class="heading">
<h1>Beautician list</h1>

<form action="{{route('beautician.profile')}}" method="GET">
    <input value="{{$key}}" name="search" class="search-input" type="text" placeholder="Search" aria-label="Search">
    <button class="btn btn-success" type="submit">Search</button>
</form>

<a href="{{route('beautician_list.profile')}}"><button type="button" class="btn btn-success">Add Beautician</button></a>
</div>

<div class="reg-form">
<div id="PrintTableArea">
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Service</th>
      <th scope="col">Details</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
      <th scope="col">Available</th>
     
      
      <th></th>
      <th></th>
     
    </tr>
  </thead>
  <tbody>
   
   @foreach($beauticianlist as $key=>$item)
  <tr>
      <th>{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->service->name}}</td>
      <td>{{$item->details}}</td>
      <td>{{$item->available}}</td>
      <td><img src="{{url('storage/beautician/'.$item->image)}}" alt=""></td>
      <td>
                        <a class="btn btn-primary" href="{{route('beautician.view',$item->id)}}">View</a>
                        <a class="btn btn-warning" href="{{route('beautician.delete',$item->id)}}">Delete</a>
                        <a class="btn btn-danger" href="{{route('beautician.update',$item->id)}}">UPDATE</a>
</td>
      
    </tr>
    @endforeach


    
  </tbody>
</table>
</div>
</div>

<a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection

