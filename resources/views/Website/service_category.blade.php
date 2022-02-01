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



<div class="reg-form container">
<h4 style="text-align: center;margin-bottom: 50px;">
    Service Category List
</h4>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
    </tr>
  </thead>
  <tbody>
   @foreach($category as $category)
    <tr>
      <th>{{$category->id}}</th>
      <td>{{$category->service_name}}</td>
      <td>{{$category->category}}</td>
    </tr>
    @endforeach

  </tbody>
</table>

</div>



@endsection