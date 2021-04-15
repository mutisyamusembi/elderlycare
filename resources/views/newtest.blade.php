<!DOCTYPE html>
<html lang="en">

<head>


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
       
      
    })

    var circle = new google.maps.Circle({
  map: map,
  radius: 150,    
  fillColor: '#AA0000'
});
circle.bindTo('center', marker, 'position');
        }
      </script>
</head>
<body>

<div class="map" id="map" style="width: 100%; height: 500px;"></div>
<script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY')}}&callback=initMap&libraries=places&v=weekly"
                                            async ></script>

                                            
</body>

</html>