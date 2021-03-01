<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="https://bootswatch.com  /cerulean/bootstrap.css" ></link>
<link rel="stylesheet" href="https://bootswatch.com/assets/css/custom.min.css">


 <script src="http://maps.googleapis.com/maps/api/js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


 <script>
 function initialize() {
   var mapProp = {
     center:new google.maps.LatLng(51.508742,-0.120850),
     zoom:5,
     mapTypeId:google.maps.MapTypeId.ROADMAP
   };
  var map=new     google.maps.Map(document.getElementById("googleMap"),mapProp);
 }
 google.maps.event.addDomListener(window, 'load', initialize);

 var marker = new google.maps.Marker({
    position:{ lat: -1.2834, lng: 36.8235 },
    title:"Hello World!"
    map: map;
});

// To add the marker to the map, call setMap();
marker.setMap(map);
 </script>

 </head>


 <div class="panel panel-default well">

   <div class="row">

     <div class= "col-sm-4"  style='background-color: white; overflow: hidden' >
   <p>Column 1</p>

  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/HRSOA_AsherDurand-First_harvest_wilderness_1855.jpg/1280px-HRSOA_AsherDurand-First_harvest_wilderness_1855.jpg" alt="landscape" class="img-responsive"  > 

     </div>

     <div class= "col-sm-4" style='background-color: white;overflow: hidden'>
        <p>Column 2</p>

        <body>
        <div id="googleMap" style="width:500px;height:380px;"></div>
        </body>

     </div>

     <div class= "col-sm-4" style='background-color: white'>
         <p>Column 3</p>

     </div>

   </div>

 </div>