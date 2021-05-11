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
                         
                         <h4 class="mt-5">   You can edit your emergency contacts here.</h4>
                         

                         <h6 class="mt-5">You can add contacts of individuals <i class="fas fa-phone"></i> or medical Instituions <i class="fas fa-ambulance"></i></h6>

                         <a  href="{{ route('config.index')}}" class="text-center mt-4 btn btn-secondary">Back <i class="fas fa-arrow-left"></i></a>

                
                        
                                       
                        </div>

                        <div class=" form-group col-md-6">

                            <div class="card border-left-primary shadow h-100 py-2">
                                                        <div class="card-body">
                                                            <div class="row no-gutters align-items-center">
                                                                <div class="col mr-2">
                                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                                        </div>
                                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                                    <form method="POST" action="{{action('App\Http\Controllers\ContactController@store')}}">
                                                                                @csrf

                                                                            
                                                                            
                                                                                
                                                                                <h4 class="mt-3">   Contact 1</h4>
                                                                                <div class="form-row mt-2">
                                                                                
                                                                                    <div class="form-group col-md-5">
                                                                                        <label for="name1" >Name</label>
                                                                                        <input type="text" name="name1" class="form-control" id="name1" data-rule="minlen:4" value="{{$contact->name1}}" placeholder="Name/Instituion"data-msg="Please enter at least 4 chars" required />
                                                                                    </div>

                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="phone1" >Phone Number</label>
                                                                                        <input type="tel" class="form-control" name="phone1" id="phone1" data-rule="minlen:4" value="{{$contact->phone1}}" placeholder ="Phone Number" data-msg="Please enter at least 8 chars of subject" required />
                                                                                    </div>

                                                                                </div>

                                                                                <h4 class='mt-3'>   Contact 2</h4>
                                                                                <div class="form-row mt-2">
                                                                                
                                                                                    <div class="form-group col-md-5">
                                                                                    <label for="name2" >Name</label>
                                                                                        <input type="text" name="name2" class="form-control" id="name2" data-rule="minlen:4" value="{{$contact->name2}}" placeholder="Name/Instituion"data-msg="Please enter at least 4 chars" required />
                                                                                    </div>

                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="phone2" >Phone Number</label>
                                                                                        <input type="tel" class="form-control" name="phone2" id="phone2" data-rule="minlen:4" value="{{$contact->phone2}}" placeholder ="Phone Number" data-msg="Please enter at least 8 chars of subject" required />
                                                                                    </div>

                                                                                </div>

                                                                                <h4 class='mt-3'>   Contact 3 </h4>

                                                                                
                                                                                <div class="form-row mt-2">
                                                                                    
                                                                                    <div class="form-group col-md-5">
                                                                                        <label for="name3" >Name</label>
                                                                                        <input type="text" name="name3" class="form-control" id="name3" data-rule="minlen:4" value="{{$contact->name3}}" placeholder="Name/Instituion"data-msg="Please enter at least 4 chars" required />
                                                                                    </div>

                                                                                    <div class="form-group col-md-6">
                                                                                        <label for="phone3" >Phone Number</label>
                                                                                        <input type="tel" class="form-control" name="phone3" id="phone3" data-rule="minlen:4" value="{{$contact->phone3}}" placeholder ="Phone Number" data-msg="Please enter at least 8 chars of subject" required />
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