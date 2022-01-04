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
      <th scope="col">Details</th>
      
      <th></th>
      <th></th>
     
      
     
    </tr>
  </thead>
  <tbody>
   
   @foreach($beauticianlist as $key=>$item)
  <tr>
      <th>{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->details}}</td>
      <td><img src="{{url('storage/beautician/'.$item->image)}}" alt=""></td>
     
      
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

