
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
    <!-- Map JS-->
    

</head>

<body id="page-top">
    @include('messages')

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
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-prescription-bottle"></i>
                    <span>Prescriptions</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="">
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

         <!-- Begin Page Content -->
         <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Contacts</h1>
            <p class="mb-4">This is a list of all contacts that are reached in case of emergency. Maximum is 5 
            </p>
                    <button type="button" class="btn btn-primary btn-icon-split m-2" data-toggle="modal" data-target="#ModalLoginForm">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                       <p class=" m-1">Add New</p> 
                    </button>

                    <div id="ModalLoginForm" class="modal fade">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">Emergency Contacts</h1>
                                </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{action('App\Http\Controllers\ContactController@store')}}">
                                            @csrf
                                    {{-- {!! Form::open(['action' => 'App\Http\Controllers\PrepController@store','method' => 'POST']) !!} --}}
                                    <div class = 'form-group'>

                                        {{-- {{Form::label('disease','Disease')}}
                                        {{Form::text('disease','',['class'=>'form-control','required'])}} --}}
                                        <input id="name" type="text" class="form-control form-control form-control-user @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name of Individual/ Institution" required  autofocus>
                                        {{-- {{Form::label('medicine','Medicine')}}
                                        {{Form::text('medicine','',['class'=>'form-control','required'])}} --}}
                                        <br>
                                        <input id="phone" type="number" class="form-control form-control form-control-user @error('phone') is-invalid @enderror" name="phone" value="{{ old('medicine') }}" placeholder="Phone Number" required  autofocus>
                                        <br>

                                        
                                        {{-- {{Form::label('date','Start Date')}}
                                        {{Form::date('date','',['class'=>'form-control','required'])}} --}}
                                        
                                        <p class="m-2">
                                            {{-- {{Form::submit('Save',['class'=>'btn btn-primary'])}} --}}
                                            <button type="submit" name ="save_button"class="btn btn-primary center">
                                                Save
                                            </button>
                                        </p>
                                        

                                    </div>
                                            {{-- {!! Form::close() !!} --}}

                                </div>
                             </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                     </div><!-- /.modal -->




            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Existing Contacts</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name of Person / Institution </th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(count($contact)>0)
                                @foreach ($contact as $cont)
                                <tr>
                                    <th>{{$cont->name}}</th>
                                    <th>{{$cont->phone}}</th>                                    
                                </tr>
                                    
                                @endforeach

                            @else
                                <p> When you add prescriptions, they will appear here.</p>
                            @endif
                              
                            </tbody>
                            
                            
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>