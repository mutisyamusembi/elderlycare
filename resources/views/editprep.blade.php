@extends('main')
@section('content')



<div class="row">
    <div class="col-xl-12 col-lg-12 mt-2">

        <div class="card shadow mb-4">
            <!-- Card Header -->
            <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Location tracker</h6>
            </div> -->

            
            <!-- Card Body -->
            <div class="card-body">
             <!-- Map -->
                <div class="form-row">
                        <div class=" form-group col-md-6">
                         
                         <h4 class="mt-5">   You can edit your Prescriptions here.</h4>
                         

                         <h6 class="mt-5">What medicine <i class="fas fa-tablets"></i>  is important to remember? </h6>

                         <a  href="{{ route('config.index')}}" class="text-center mt-4 btn btn-secondary">Back <i class="fas fa-arrow-left"></i></a>

                
                        
                                       
                        </div>

                        <div class=" form-group col-md-6">

                            <div class="card border-left-warning shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                                        </div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                    <form method="POST" action="{{action('App\Http\Controllers\PrescriptionController@store')}}">
                                                                        @csrf
                                                                            
                                                                        
                                                                          
                                                                                <div class="form-row mt-2">
                                                                                    <div class="form-group col-md-5">
                                                                                    <label for="med1" >Medication Name</label>
                                                                                        <input type="text" name="med1" class="form-control" id="med1" data-rule="minlen:4" value="{{$prescription->medicine1}}" placeholder="Medicine"data-msg="Please enter at least 4 chars" required />
                                                                                    </div>

                                                                                    <div class="form-group col-md-6">
                                                                                    <label for="prep1" >Prescription</label>
                                                                                        <input type="text" class="form-control" name="prep1" id="prep1" data-rule="minlen:4" value="{{$prescription->prep1}}" placeholder ="Prescriprion(Quantity * Occurence)" data-msg="Please enter at least 8 chars of subject" required />
                                                                                    </div>

                                                                                </div>

                                                                                <div class="form-row mt-2">
                                                                                    <div class="form-group col-md-5">
                                                                                    <label for="med2" >Medication Name</label>
                                                                                        <input type="text" name="med2" class="form-control" id="med2" data-rule="minlen:4" value="{{$prescription->medicine2}}" placeholder="Medicine"data-msg="Please enter at least 4 chars" required />
                                                                                    </div>

                                                                                    <div class="form-group col-md-6">
                                                                                    <label for="prep2" >Prescription</label>
                                                                                        <input type="text" class="form-control" name="prep2" id="prep2" data-rule="minlen:4" value="{{$prescription->prep2}}" placeholder ="Prescriprion(Quantity * Occurence)" data-msg="Please enter at least 8 chars of subject" required />
                                                                                    </div>

                                                                                </div>

                                                                                <div class="form-row mt-2">

                                                                                    <div class="form-group col-md-5">
                                                                                    <label for="med3" >Medication Name</label>
                                                                                        <input type="text" name="med3" class="form-control" id="med3" data-rule="minlen:4" value="{{$prescription->medicine3}}" placeholder="Medicine" data-msg="Please enter at least 4 chars" required />
                                                                                    </div>

                                                                                    <div class="form-group col-md-6">
                                                                                    <label for="prep3" >Prescription</label>
                                                                                        <input type="text" class="form-control" name="prep3" id="prep3" data-rule="minlen:4"value="{{$prescription->prep3}}" placeholder ="Prescriprion(Quantity * Occurence)" data-msg="Please enter at least 8 chars of subject" required />
                                                                                    </div>

                                                                                </div>

                                                                            
                                                                        
                                                                                <div class="text-center mt-4"><button name="submit" type="submit" class=" btn btn-primary" >Save</button></div>
                                                                        </form>
    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                        

                        </div>
                </div>
            
                
                
            </div>

        </div>
    </div>

</div>




@endsection('content')