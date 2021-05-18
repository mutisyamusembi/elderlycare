@extends('main')

@section('content')
<script>
    
        let map;
  
        function initMap() {
          map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: {{$home_location->address_latitude}} , lng: {{$home_location->address_longitude}} },
            zoom: 18,
            
          });

        var marker = new google.maps.Marker({
        map: map,
        position:  { lat: {{$home_location->address_latitude}} , lng: {{$home_location->address_longitude}} },
        });

        var circle = new google.maps.Circle({
        map: map,
        radius: 150,    
        fillColor: '#AA0000'
        });

        const svgMarker = {
            path:
            "M10.453 14.016l6.563-6.609-1.406-1.406-5.156 5.203-2.063-2.109-1.406 1.406zM12 2.016q2.906 0 4.945 2.039t2.039 4.945q0 1.453-0.727 3.328t-1.758 3.516-2.039 3.070-1.711 2.273l-0.75 0.797q-0.281-0.328-0.75-0.867t-1.688-2.156-2.133-3.141-1.664-3.445-0.75-3.375q0-2.906 2.039-4.945t4.945-2.039z",
            fillColor: "blue",
            fillOpacity: 0.6,
            strokeWeight: 0,
            rotation: 0,
            scale: 2,
            anchor: new google.maps.Point(15, 30),
        };
        var location =  new google.maps.Marker({
                position: { lat: {{$current_location->latitude}} , lng: {{$current_location->longitude}} },
                icon: svgMarker,
                map: map,
            });

            var infowindow = new google.maps.InfoWindow({
            content: "I AM HERE",
            
                });
                

        circle.bindTo('center', marker, 'position');

        location.addListener("click", () => {
          infowindow.open(map, location);
            });
        
        }
      </script>

                    <div class="d-sm-flex align-items-center justify-content-between mt-4">
                        <h1 class="h3 mb-0 text-gray-800">Home</h1>

                            @if( $current_location->status == "ID")
                            <span style="color: green">● ACTIVE</span>
                            @elseif( $current_location->status == "ID") 
                            <span style="color: green">●</span> IDLE
                            @else()
                            <span style="display: none">●</span>
                            @endif

                            <i class="fas fa-battery-half"> {{ $current_location->battery}} %</i>

                        
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
    <div class="col-xl-12 col-lg-12 mt-2" >
   
        <div class="card shadow mb-4"  >
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" >
                <h6 class="m-0 font-weight-bold text-primary">Current Location</h6>
            </div>

            
            <!-- Card Body -->
            <div class="card-body">
             <!-- Map -->
                <div id="map" style="width:1200px;height:650px " ></div>
                <script 
                src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY')}}&callback=initMap&libraries=places&v=weekly" async >
                </script>
            </div>

        </div>

    </div>
    </div>


    </div>

</div>

@endsection