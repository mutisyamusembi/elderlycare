@extends('main')

@section('content')

                    <div class="d-sm-flex align-items-center justify-content-between mt-4">
                        <h1 class="h3 mb-0 text-gray-800">You can set  Home location below</h1>
                    </div>

                    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY')}}&libraries=places"></script>

                    <script src="js/mapInputconf.js"></script>

                    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.1/angular.min.js"></script>

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-12 col-lg-12">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                            
                                <input id="searchInput" class="input-controls" type="text" placeholder="Enter a location">

                                <div class="map" id="map" style="width: 100%; height: 500px;"></div>
                                
                                    <form method="POST" action="{{action('App\Http\Controllers\LocationConfigController@store')}}">
                                    @csrf   
                                            <input type="text" name="location" id="location" placeholder="Location Name" required>

                                            <input type="text" name="lat" id="lat" placeholder="Latitude" required>

                                            <input type="text" name="lng" id="lng" placeholder="Longitude" required>

                                            <input type="text" name="diam" id="diam" placeholder="Allowed diameter(m)" required>

                                            <button type ="submit" class=" mr-2 btn btn-primary" >Save</button>
                                            
                                            <a class="btn btn-secondary" href="{{ route('config.index')}}">Back</a>
                                    </form>
                            </div>
                        </div>



                    </div>


@endsection('content')
