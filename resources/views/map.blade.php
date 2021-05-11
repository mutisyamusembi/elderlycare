@extends('main')

@section('content')
<script>
    
        let map;
  
        function initMap() {
          map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: {{$current_location->address_latitude}} , lng: {{$current_location->address_longitude}}  },
            zoom: 15,
          });

          <?php foreach($locations as $location) { ?>

          var marker = new google.maps.Marker({
              map:map,
              position: { lat:  {{ $location->address_latitude }} , lng: {{ $location->address_longitude }} }
          
          });
          var contentString ="{{$location->address_address}}";
          var infowindow = new google.maps.InfoWindow({
          content: contentString,
                });

          marker.addListener("click", () => {
          infowindow.open(map, marker);
            });

          <?php }?>

          
 
        //   var pathCoordinates = Array();


          // location_json = {!! json_encode($locations) !!};
          // location_json .forEach(function(location){

          //   var marker = new google.maps.Marker({
          //   map: map,
          //   position:  { lat: location->address_latitude , lng: location->address_longitude },
          //   });
          //     console.log(location);

          // });

        

       
          }

        
      </script> 

                    <div class="d-sm-flex align-items-center justify-content-between mt-4">
                        <h1 class="h3 mb-0 text-gray-800">Home</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Actions</a>
                    </div>

<div class="row">
    <div class="col-xl-12 col-lg-12 mt-2">

        <div class="card shadow mb-4">
            <!-- Card Header -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Location tracker</h6>
            </div>

            
            <!-- Card Body -->
            <div class="card-body">
             <!-- Map -->
                <div id="map" style="width:1200px;height:510px">
                </div>
                <form method="POST" action="{{action('App\Http\Controllers\MapController@store')}}">
                                    @csrf   
                    <p>Adjust Time Period for Chart</p>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Time period</label>
                        </div>
                        <select class="custom-select" name="category" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            <option value="Last_One_Hour">Last One Hour</option>
                            <option value="Last_Day">Last Day</option>
                            <option value="Last_Week">Last Week</option>
                            
                        </select>
                    </div>            

                    <button type ="submit" class=" mr-2 btn btn-primary" >Apply</button>
                    <a  href="{{ route('config.index')}}" class="text-center  btn btn-secondary">Back <i class="fas fa-arrow-left"></i></a>
                </form>
                
                <script 
                src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY')}}&callback=initMap&libraries=places&v=weekly" async >
                </script>
            </div>

        </div>
    </div>

</div>

@endsection