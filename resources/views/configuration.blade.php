@extends('main')
@section('content')


<!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mt-4">
                        <h1 class="h3 mb-0 text-gray-800">Configuration</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                        
                        @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                        @endif
                        <div class="mt-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Choose Home Location</div>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{ route('locationconf.index')}}">
                                            <i class="fas fa-2x text-gray-300 fa-arrow-circle-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Emergency Contacts</div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-success btn-icon-split m-2" data-toggle="modal" data-target="#ModalEmergencyForm">
                                                    <span class="icon text-white-50">
                                                    <i class="fas fa-eye"></i>
                                                    <span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mt-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Prescriptions</div>
                                        </div>
                                        <div class="col-auto">
                                            <button type="button" class="btn btn-success btn-icon-split m-2" data-toggle="modal" data-target="#ModalMedicineForm">
                                                    <span class="icon text-white-50">
                                                    <i class="fas fa-eye"></i>
                                                    </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">Reports</div>
                                        </div>
                                        <div class="col-auto">
                                        

                                            <div class="dropdown">
                                                    <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-2x text-gray-300 fa-arrow-circle-right"></i>
                                                    </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                        <h5><a class="dropdown-item" href="{{ route('chart.index') }}">Heart rate Charts</a></h5>
                                                        <h5><a class="dropdown-item" href="{{ route('map.index') }}">Location Maps</a></h5>
                                                        
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div id="ModalEmergencyForm" class="modal fade">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">Emergency Contacts</h1>
                                </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{action('App\Http\Controllers\ContactController@store')}}">
                                        @csrf

                                        Incase of an Emergency, these contacts will be notified.
                                        
                                            
                                                <div class="form-row mt-2">
                                                    <div class="form-group col-md-5">
                                                        <input type="text" name="name1" class="form-control" id="name1" data-rule="minlen:4" value="{{$contact->name1}}" placeholder="Name/Instituion"data-msg="Please enter at least 4 chars" required />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="tel" class="form-control" name="phone1" id="phone1" data-rule="minlen:4" value="{{$contact->phone1}}" placeholder ="Phone Number" data-msg="Please enter at least 8 chars of subject" required />
                                                    </div>

                                                </div>

                                                <div class="form-row mt-2">
                                                    <div class="form-group col-md-5">
                                                        <input type="text" name="name2" class="form-control" id="name2" data-rule="minlen:4" value="{{$contact->name2}}" placeholder="Name/Instituion"data-msg="Please enter at least 4 chars" required />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="tel" class="form-control" name="phone2" id="phone2" data-rule="minlen:4" value="{{$contact->phone2}}" placeholder ="Phone Number" data-msg="Please enter at least 8 chars of subject" required />
                                                    </div>

                                                </div>

                                                <div class="form-row mt-2">
                                                    <div class="form-group col-md-5">
                                                        <input type="text" name="name3" class="form-control" id="name3" data-rule="minlen:4" value="{{$contact->name3}}" placeholder="Name/Instituion"data-msg="Please enter at least 4 chars" required />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="tel" class="form-control" name="phone3" id="phone3" data-rule="minlen:4" value="{{$contact->phone3}}" placeholder ="Phone Number" data-msg="Please enter at least 8 chars of subject" required />
                                                    </div>

                                                </div>
                                                <a  href="{{ route('contact.index')}}" class="text-center mt-4 btn btn-secondary">Edit <i class="fas fa-edit"></i></a>
                                            
                                        </form>
                                            
                                        

                                    </div>
                                           

                                
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div id="ModalMedicineForm" class="modal fade">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title">Prescriptions</h1>
                                </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{action('App\Http\Controllers\PrescriptionController@store')}}">
                                        @csrf
                                               
                                           
                                                 A buzzer will be sent to remind of medication 
                                                <div class="form-row mt-2">
                                                    <div class="form-group col-md-5">
                                                        <input type="text" name="med1" class="form-control" id="med1" data-rule="minlen:4" value="{{$prescription->medicine1}}" placeholder="Medicine"data-msg="Please enter at least 4 chars" required />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="prep1" id="prep1" data-rule="minlen:4" value="{{$prescription->prep1}}" placeholder ="Prescriprion(Quantity * Occurence)" data-msg="Please enter at least 8 chars of subject" required />
                                                    </div>

                                                </div>

                                                <div class="form-row mt-2">
                                                    <div class="form-group col-md-5">
                                                        <input type="text" name="med2" class="form-control" id="med2" data-rule="minlen:4" value="{{$prescription->medicine2}}" placeholder="Medicine"data-msg="Please enter at least 4 chars" required />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="prep2" id="prep2" data-rule="minlen:4" value="{{$prescription->prep2}}" placeholder ="Prescriprion(Quantity * Occurence)" data-msg="Please enter at least 8 chars of subject" required />
                                                    </div>

                                                </div>

                                                <div class="form-row mt-2">

                                                    <div class="form-group col-md-5">
                                                        <input type="text" name="med3" class="form-control" id="med3" data-rule="minlen:4" value="{{$prescription->medicine3}}" placeholder="Medicine" data-msg="Please enter at least 4 chars" required />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="prep3" id="prep3" data-rule="minlen:4"value="{{$prescription->prep3}}" placeholder ="Prescriprion(Quantity * Occurence)" data-msg="Please enter at least 8 chars of subject" required />
                                                    </div>

                                                </div>

                                            
                                        
                                            <a  href="{{ route('prep.index')}}" class="text-center mt-4 btn btn-secondary">Edit <i class="fas fa-edit"></i></a>
                                        </form>
                                            
                                        

                                    </div>
                                           

                                
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->



                    

@endsection('endcontent')