@extends('website.master')
@section('contents')
<style>

 table thead th{
   color: white;
   font-size: 18px;
 }

 table tbody td{
   color: white;
   font-size: 15px;
 }
</style>

<div class="reg-form">
<h4 style="text-align: center;margin-bottom: 50px;">
    Service List
</h4>
<form action="{{route('website.type')}}">


    </div>

</form>
<div id="PrintTableArea">
<table class="table">

  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
     
      
    </tr>
  </thead>
  <tbody>
   @foreach($type as $key=>$item)
    <tr>
    <th>{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->description}}</td>
      <td>{{$item->price}}</td>
      <td><img style="border-radius: 4px;" width="100px;" src=" {{url('storage/service/'.$item->image)}}" alt="beautician"></td>
      
       <td><a class="btn btn-primary" href="{{route('service.show',$item->id)}}">View</a></td>
     
    </tr>
    @endforeach

  </tbody>
</table>
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