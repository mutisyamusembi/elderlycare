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
                                            <button type="button" class="btn btn-secondary btn-icon-split m-2" data-toggle="modal" data-target="#ModalEmergencyForm">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                <p class=" m-1">Edit</p> 
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
                                            <button type="button" class="btn btn-secondary btn-icon-split m-2" data-toggle="modal" data-target="#ModalMedicineForm">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-plus"></i>
                                                    </span>
                                                <p class=" m-1">Edit</p> 
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
                                        <i class="fas fa-2x text-gray-300 fa-arrow-circle-right"></i>
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

                                        You can only add 3 contacts. Add Emergency contacts here
                                        
                                            
                                                <div class="form-row mt-2">
                                                    <div class="form-group col-md-5">
                                                        <input type="text" name="name1" class="form-control" id="name1" data-rule="minlen:4" placeholder="Name/Instituion"data-msg="Please enter at least 4 chars" required />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="tel" class="form-control" name="phone1" id="phone1" data-rule="minlen:4" placeholder ="Phone Number" data-msg="Please enter at least 8 chars of subject" required />
                                                    </div>

                                                </div>

                                                <div class="form-row mt-2">
                                                    <div class="form-group col-md-5">
                                                        <input type="text" name="name2" class="form-control" id="name2" data-rule="minlen:4" placeholder="Name/Instituion"data-msg="Please enter at least 4 chars" required />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="tel" class="form-control" name="phone2" id="phone2" data-rule="minlen:4" placeholder ="Phone Number" data-msg="Please enter at least 8 chars of subject" required />
                                                    </div>

                                                </div>

                                                <div class="form-row mt-2">
                                                    <div class="form-group col-md-5">
                                                        <input type="text" name="name3" class="form-control" id="name3" data-rule="minlen:4" placeholder="Name/Instituion"data-msg="Please enter at least 4 chars" required />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="tel" class="form-control" name="phone3" id="phone3" data-rule="minlen:4" placeholder ="Phone Number" data-msg="Please enter at least 8 chars of subject" required />
                                                    </div>

                                                </div>
                                        
                                            <div class="text-center mt-4"><button name="submit" type="submit" class=" btn btn-primary" >Save</button></div>
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
                                               
                                           
                                            Add Prescriptions here
                                                <div class="form-row mt-2">
                                                    <div class="form-group col-md-5">
                                                        <input type="text" name="med1" class="form-control" id="med1" data-rule="minlen:4" placeholder="Medicine"data-msg="Please enter at least 4 chars" required />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="prep1" id="prep1" data-rule="minlen:4" placeholder ="Prescriprion(Quantity * Occurence)" data-msg="Please enter at least 8 chars of subject" required />
                                                    </div>

                                                </div>

                                                <div class="form-row mt-2">
                                                    <div class="form-group col-md-5">
                                                        <input type="text" name="med2" class="form-control" id="med2" data-rule="minlen:4" placeholder="Medicine"data-msg="Please enter at least 4 chars" required />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="prep2" id="prep2" data-rule="minlen:4" placeholder ="Prescriprion(Quantity * Occurence)" data-msg="Please enter at least 8 chars of subject" required />
                                                    </div>

                                                </div>

                                                <div class="form-row mt-2">
                                                    <div class="form-group col-md-5">
                                                        <input type="text" name="med3" class="form-control" id="med3" data-rule="minlen:4" placeholder="Medicine" data-msg="Please enter at least 4 chars" required />
                                                    </div>

                                                    <div class="form-group col-md-6">
                                                        <input type="text" class="form-control" name="prep3" id="prep3" data-rule="minlen:4" placeholder ="Prescriprion(Quantity * Occurence)" data-msg="Please enter at least 8 chars of subject" required />
                                                    </div>

                                                </div>

                                            </div>
                                        
                                            <div class="text-center mt-4"><button name="submit" type="submit" class=" tbn btn-primary" >Save</button></div>
                                        </form>
                                            
                                        

                                    </div>
                                           

                                
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->



                    

@endsection('endcontent')