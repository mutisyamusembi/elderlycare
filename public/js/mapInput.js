function initAutocomplete() {


var map = new google.maps.Map(document.getElementById('map'), {
center: {
  lat: -1.292,
  lng: 36.821
},
zoom: 8,
disableDefaultUI:true
});

// Create the search box and link it to the UI element.
var input = document.getElementById('my-input-searchbox');
var searchBox = new google.maps.places.SearchBox(input);
map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);
const geocoder = new google.maps.Geocoder;

// Bias the SearchBox results towards current map's viewport.
map.addListener('bounds_changed', function() {
searchBox.setBounds(map.getBounds());
});

var markers = [];
// Listen for the event fired when the user selects a prediction and retrieve
// more details for that place.
searchBox.addListener('places_changed', function() {
var places = searchBox.getPlaces();
if (places.length == 0) {
  return;
}

// Clear out the old markers.
markers.forEach(function(marker) {
  marker.setMap(null);
});
markers = [];
// For each place, get the location.
var bounds = new google.maps.LatLngBounds();
places.forEach(function(place) {
  if (!place.geometry) {
    console.log("Returned place contains no geometry");
    return;
  }
  var lat = place.geometry.location.lat();
  var long = place.geometry.location.lng();
  

  document.write(lat);
  // Create a marker for each place.
  markers.push(new google.maps.Marker({
    map: map,
    position: place.geometry.location,
    draggable: true
  }));

  // const contentString = place.geometry.location;
  // const infowindow = new google.maps.InfoWindow({
  //   content: contentString,
  // });

  // marker.addListener("click", () => {
  //   infowindow.open(map, marker);
  // });

  if (place.geometry.viewport) {
    // Only geocodes have viewport.
    bounds.union(place.geometry.viewport);
  } else {
    bounds.extend(place.geometry.location);
  }

  // newFunction(place);


  Array(); // creates an array of objects

    // Add _token object
   

});
map.fitBounds(bounds);


   

});



  // function newFunction(place) {
  //   var infowindow = new google.maps.InfoWindow();
  //   infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + "<br>" + place.geometry.location);
  //   infowindow.open(map, marker);
 // }
// var lat = markers.getPosition().lat();
// var lng = markers.getPosition().lng();

// form.submit(function(e){
//     e.preventDefault();

//     var form_input = form.serialize
// form_input.push({
//     name: '_token',
//     value: '{{csrf_token()}}'
// });

// // Add hash object
// form_input.push({
//     name: 'latitude',
//     value: lat
// });
// form_input.push({
//     name: 'longitude',
//     value: lng
// });

// $.ajax({
//     url : '{{route('test.store')}}' ,
//     type: "POST",
//     data: $.param(form_input), // back to a string!
//     success : function (data) {
//         //
//     },
 
//             });
//         });
    // function newFunction(place) {
    //     geocoder.geocode({ 'placeId': places.place_id }, function (results, status) {
    //         if (status === google.maps.GeocoderStatus.OK) {
    //             const lat = results[0].geometry.location.lat();
    //             const lng = results[0].geometry.location.lng();
    //             setLocationCoordinates(autocomplete.key, lat, lng);
    //         }
    //     });

    //     function setLocationCoordinates(key, lat, lng) {
    //         const latitudeField = document.getElementById(key + "-" + "latitude");
    //         const longitudeField = document.getElementById(key + "-" + "longitude");
    //         latitudeField.value = lat;
    //         longitudeField.value = lng;
    //     }
    // }
}
document.addEventListener("DOMContentLoaded", function(event) {
initAutocomplete();
});
  