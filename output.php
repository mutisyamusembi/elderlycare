<?php
$dbHost     = "localhost";
$dbUsername = "id16319181_brian";
$dbPassword = "t3t&g84u+W!XKH>{";
$dbName     = "id16319181_sensor";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}





?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NRG MVPS</title>
    <link href="assets/img/favicon.ico" rel="icon">

    <!-- Custom fonts for this template-->
    <link href="assets/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">
    <!-- Tables style-->
    <link href="assets/css/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->


                    <div class="row">


                    </div>
                     <!-- DataTales Example -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Current Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>HN</th>
                                            <th>HD</th>
                                            <th>ST</th>
                                            <th>Heart rate</th>
                                            <th>Longitude</th>
                                            <th>Latitude</th>
                                            <th>Battery</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>HN</th>
                                            <th>HD</th>
                                            <th>ST</th>
                                            <th>Heart rate</th>
                                            <th>Longitude</th>
                                            <th>Latitude</th>
                                            <th>Battery</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php 

                                        $query = $db->query("SELECT * FROM sensordata");

                                        if($query->num_rows > 0){
                                            while($row = $query->fetch_assoc()) {
                                              
                                                
                                        ?>
                                        <tr>
                                            <td><?php echo $row['IDevice']; ?></td>
                                            <td><?php echo $row['hn']; ?></td>
                                            <td><?php echo $row['hd']; ?></td>
                                            <td><?php echo $row['st']; ?></td>
                                            <td><?php echo $row['heartrate']; ?></td>
                                            <td><?php echo $row['longitude']; ?></td>
                                            <td><?php echo $row['latitude']; ?></td>
                                            <td><?php echo $row['battery']; ?></td>
                                            

                                        </tr>
                                   
                                        <?php  }
             
                                             }
                                                ?>
                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                <!-- /.container-fluid -->

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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>