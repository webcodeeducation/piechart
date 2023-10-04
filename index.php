<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
</head>
<body>

<div class="container-fluid">
  <h1>PIE Chart Demo!</h1>
  
  
  <div class="row">

    <div class="col-sm-4" style="">
    	<canvas id="myChart"></canvas>
    </div>
    <div class="col-sm-4" style="">
      <canvas id="myChart2"></canvas>
    </div>
  </div>
</div>



<script>
$(document).ready(function(){


$.get("get_data.php", function(data, status){
    //var json = JSON.stringify(data);
    var obj = jQuery.parseJSON( data );
 	console.log(obj.php);
 	console.log(obj.java);
 	console.log(obj.laravel);


 	  // Pie chart
var ctx = document.getElementById("myChart").getContext('2d');
var myChart = new Chart(ctx, {
  type: 'pie',
  data: {
    labels: ["PHP", "Java", "Laravel"],
    datasets: [{
      backgroundColor: [
        "#2ecc71",
        "#3498db",
        "#34495e",
      ],
      data: [obj.php, obj.java, obj.laravel]
    }]
  }
});



var ctx = document.getElementById("myChart2");
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["PHP", "Java", "Laravel"],
    datasets: [{
      label: '# of Tomatoes',
      data: [obj.php, obj.java, obj.laravel],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)'
      ],
      borderColor: [
        'rgba(255,99,132,1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)'
      ],
      borderWidth: 1
    }]
  },
  options: {
    responsive: false,
    scales: {
      xAxes: [{
        ticks: {
          maxRotation: 90,
          minRotation: 80
        }
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true
        }
      }]
    }
  }
});




});


});


	</script>

</body>
</html>
