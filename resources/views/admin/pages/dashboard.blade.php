@extends('admin.welcome')
@section('content')
<link href="{{url('css/dashboard.css')}}" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-blue">
                <div class="inner">
                    <h3>{{ $count['service']}} </h3>
                    <p> Services</p>
                </div>
                <div class="icon">
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-green">
                <div class="inner">
                    <h3>{{ $count['beautician']}} </h3>
                    <p> Beauticians </p>
                </div>
                <div class="icon">
                    <i class="fa fa-money" aria-hidden="true"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-orange">
                <div class="inner">
                    <h3>{{$count['customer']}} </h3>
                    <p> Cutomers </p>
                </div>
                <div class="icon">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <div class="card-box bg-red">
                <div class="inner">
                    <h3> {{$count['category']}} </h3>
                    <p> Service Category</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="#" class="card-box-footer">View More <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <a href="http://www.uiuxstream.com/dashboard-user-profile-page-design-using-bootstrap-4/">uiuxstream</a>
        </div>
    </div>
</div>

@php 

$sum=13;
@endphp

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Hair', <?php echo $sum; ?>],
  ['Makeover', 2],
  ['Face Treatment', 4],

]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Most taken Services', 'width':550, 'height':400};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
@endsection