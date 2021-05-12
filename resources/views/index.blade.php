@extends('main')

@section('content')
<script>
    
        let map;
  
        function initMap() {
          map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: {{$current_location->address_latitude}} , lng: {{$current_location->address_longitude}} },
            zoom: 18,
            
          });

        var marker = new google.maps.Marker({
        map: map,
        position:  { lat: {{$current_location->address_latitude}} , lng: {{$current_location->address_longitude}} },
        });

        var circle = new google.maps.Circle({
        map: map,
        radius: 150,    
        fillColor: '#AA0000'
        });

        circle.bindTo('center', marker, 'position');
        }
      </script>

                    <div class="d-sm-flex align-items-center justify-content-between mt-4">
                        <h1 class="h3 mb-0 text-gray-800">Home</h1>
                        
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Options
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </div>

<div class="row">
    <div class="col-xl-12 col-lg-12 mt-2">

        <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Current Location</h6>
            </div>

            
            <!-- Card Body -->
            <div class="card-body">
             <!-- Map -->
                <div id="map" style="width:1000px;height:510px " ></div>
                <script 
                src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY')}}&callback=initMap&libraries=places&v=weekly" async >
                </script>
            </div>

        </div>
    </div>

</div>

@endsection