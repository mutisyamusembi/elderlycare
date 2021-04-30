<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elderly Care</title>
     <!-- Favicon for the site-->
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
           rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>  
<!-- <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>               -->

   </head>
   <body id="page-top">
   <!-- Page Wrapper -->
   <div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('index')}}">    
        <div class="sidebar-brand-text mx-3">Dashboard</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('index')}}">
           <i class="fas fa-house-user"></i>
            <span><b>Home</b></span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('config.index')}}">
        <i class="fas fa-cogs"></i>
            <span><b>Configuration</b></span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">
       
        <!-- Begin Page Content -->
        <div class="container-fluid mb-4">    
<div class="row">
    <div class="col-xl-12 col-lg-12 mt-2">

    <canvas id="myChart" width="400" height="200"></canvas>
<script>
var ctx = document.getElementById('myChart');
var data = {
        labels: {!! json_encode($chart_label) !!},
        datasets: [{
                        label: 'Heart Rate',
                        data: {!! json_encode($chart_values) !!} ,
                        backgroundColor : "blue",
						borderColor : "lightblue",
						fill : false,
						lineTension : 0,
						pointRadius : 5,
                        

                    }]
			};

			var options = {
				title : {
					display : true,
					position : "top",
					text : "Heart rate Graph",
					fontSize : 18,
					fontColor : "#111"
				},  
				legend : {
					display : true,
					position : "bottom"
				},
				scales: {
					xAxes: [{
						scaleLabel: {
							display: true,
							labelString: 'Time',
                            fontSize : 18
						}
					}],
					yAxes: [{
						scaleLabel: {
							display: true,
							labelString: 'Heart rate',
                            fontSize : 18
						},
						ticks: {
							beginAtZero: false
						}
					}]
				}
			};

			var chart = new Chart( ctx, {
				type : "line",
				data : data,
				options : options
			} );
</script>
    </div>

</div>
 
</div>
                <!-- End of Page Content -->
            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>