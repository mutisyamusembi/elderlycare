@extends('main')

@section('content')
<script>
    
        let map;
  
        function initMap() {
          map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: {{$current_location->latitude}} , lng: {{$current_location->longitude}}  },
            zoom: 15,
          });

          <?php foreach($locations as $location) { ?>

          var marker = new google.maps.Marker({
              map:map,
              position: { lat:  {{ $location->latitude }} , lng: {{ $location->longitude }} }
          
          });
          var contentString ="{{$location->created_at}}";
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
          document.getElementById('download-pdf2').addEventListener("click", downloadPDF2);

function downloadPDF2() {
var newCanvas = document.querySelector('#map_content');
var newCanvasImg = newCanvas.toDataURL("image/jpeg", 1.0);
var doc = new jsPDF('landscape');
doc.setFontSize(20);
doc.text(15, 15, "Super Cool Chart");
doc.addImage(newCanvasImg, 'JPEG', 10, 10, 280, 150 );
doc.save('new-canvas.pdf');
}

        

       
          }
          
      </script> 

                    <div class="d-sm-flex align-items-center justify-content-between mt-4">
                        <h1 class="h3 mb-0 text-gray-800">Home</h1>
    
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
                <div  id="map" style="width:1200px;height:510px">
                <canvas id="map"    ></canvas>
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