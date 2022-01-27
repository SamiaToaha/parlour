@extends('admin.welcome')
@section('content')
<div class="reg-form">
<form action="{{route('admin.feedback')}}" method="GET">
</form>
</div>
<table class="table">

  <thead> 
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">About Service</th>
      <th scope="col">About Beautician</th>
      <th scope="col">Any Recommendation</th>
      <th></th>
      <th></th>
     
    </tr>
  </thead>
  <tbody>
   
   @foreach($feedback as $key=>$item)
  <tr>
      <th>{{$key+1}}</th>
      <td>{{$item->about_service}}</td>
      <td>{{$item->about_beautician}}</td>
      <td>{{$item->any_recommendation}}</td>
      
    </tr>
    @endforeach
    
  </tbody>
</table>


@endsection