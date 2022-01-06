@extends('admin.welcome')
@section('content')

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Beautician Details</h5>
    <img style="border-radius: 4px;" width="500px;" src=" {{url('storage/beautician/'.$beauty->image)}}" alt="beautician">
        <p class="card-text" >Beautician Name: {{$beauty->name}}</p>
        <p class="card-text" >Beautician Id: {{$beauty->id}}</p>
        <p class="card-text" >Beautician Details: {{$beauty->details}}</p>


        </div>
</div>
@endsection