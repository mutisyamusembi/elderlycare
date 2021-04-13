@extends('main')

@section('content')
<script>
    
        let map;
  
        function initMap() {
          map = new google.maps.Map(document.getElementById("map"), {
            center: {lat: {{$current_location->address_latitude}}, lng: {{$current_location->address_longitude}}},
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

<div class="row">
    <div class="col-xl-9 col-lg-9">

        <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Current Location</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
             <!-- Map -->
                <div id="map" style="width:750px;height:510px" ></div>
                <script 
                src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY')}}&callback=initMap&libraries=places&v=weekly" async >
                </script>
            </div>

        </div>
    </div>

    <div class="col-xl-3 col-lg-3">

        <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Status</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body" style="height:550px">
             <!-- Satus Section -->
             <button class="btn btn-secondary">Get Status</button>
              
            </div>

        </div>
    </div>

</div>

@endsection