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

<h4>
    Service Category List
</h4>

<div class="reg-form">

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
      <td>{{$category->name}}</td>
      <td>{{$category->category}}</td>
    </tr>
    @endforeach

  </tbody>
</table>



@endsection