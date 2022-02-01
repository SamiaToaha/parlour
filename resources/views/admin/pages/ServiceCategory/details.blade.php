@extends('admin.welcome')
@section('content')

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Category Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('/storage/service category/'.$list->image)}}" alt="service category">
        <p class="card-text" >Category Name: {{$list->name}}</p>
        <p class="card-text" >Category Id: {{$list->id}}</p>
        <p class="card-text" >Category Type: {{$list->category}}</p>


        </div>
</div>
@endsection