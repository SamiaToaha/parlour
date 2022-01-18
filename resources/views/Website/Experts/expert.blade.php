@extends('website.master')
@section('contents')
<h4>
    Service Category List
</h4>

<div class="reg-form">

<table class="table">

  <thead> 

    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Image</th>
      
      

      
     
    </tr>
  </thead>
  <tbody>
   
   @foreach($expert as $key=>$item)
  <tr>
      <th>{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->details}}</td>
      <th>   
        <img style="border-radius: 10px;" height="80px" width="120px;" src="{{url('storage/beautician/'.$item->image)}}" class="img-responsive" >
      </th>
     
      <td>
                        <a class="btn btn-primary" href="{{route('expert.visit.show',$item->id)}}">View</a>
                        </td>
      </tr>
    @endforeach


    
  </tbody>
</table>

@endsection