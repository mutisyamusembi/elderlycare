<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Elderly Care</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places"></script>
    <!-- Map JS-->
    <!-- <script>
    
        let map;
  
        function initMap() {
          map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: -1.292, lng: 36.821 },
            zoom: 8,
          });
        }
      </script> -->

      <!-- <script>
      
      </script> -->

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">    
                <div class="sidebar-brand-text mx-3">Dashboard</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            {{-- <div class="sidebar-heading">
                Addons
            </div> --}}

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-map-marked"></i>
                    <span>Location</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('prep.index')}}">
                    <i class="fas fa-prescription-bottle"></i>
                    <span>Prescriptions</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-address-book"></i> 
                    <span>Contacts</span></a>
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

                    <!-- Page Heading -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <form method="POST" action="{{ route('test.store') }}" >
                                @csrf
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Current Location</h6>
                                    <!-- <div>
                                        

                                        <button class="btn btn-primary" id="edit_location"  name="Editlocation"> Edit</button>
                                        <div style="display:none" id="show_options">
                                        <a href=" {{route('test.index') }}" class="btn btn-secondary" name="Back"> Back</a>
                                        
                                        </div>

                                        <script>
                                         var button = document.getElementById('edit_location')
                                          button.addEventListener('click',hideshow,false);

                                          function hideshow() {
                                              document.getElementById('show_options').style.display = 'block'; 
                                              document.getElementById('my-input-searchbox').style.display = 'block'
                                              this.style.display = 'none'
                                          }  
                 

                                        </script>
                                      
                                    </div> -->
                                </div>
                                <!-- Card Body -->
                                <button class="btn btn-success" type="submit" name="Editlocation"> Save</button>
                                    
                                    <input id="my-input-searchbox" type="text" class="form-control form-control form-control-user" name="nammy-input-searchbox"  placeholder="Search a location" >
                                    <input type="hidden" name="address_latitude" id="address-latitude" value="0" />
                                    <input type="hidden" name="address_longitude" id="address-longitude" value="0" />
                                    
                                    
                                    <div id="map" style="width:1050px;height:500px" ></div>

                                            <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
                                            <!-- <script
                                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1eLwDmikw9ScVZIaEQqBcK4XVfx3ndg4&callback=initMap&libraries=&v=weekly"
                                            async
                                            ></script> -->
                                </div>
                                </form>
                            </div>
                        </div>

                        
                        
                    </div>
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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/mapInput.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>