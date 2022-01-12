@extends('admin.welcome')
@section('content')

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Category Details</h5>
        <p class="card-text" >Category Name: {{$list->name}}</p>
        <p class="card-text" >Category Id: {{$list->id}}</p>


        </div>
</div>
@endsection