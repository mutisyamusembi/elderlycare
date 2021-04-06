<?php 

$servername = "localhost";
$username ="id16491484_eldercare_admin";
$password = "=2Pn+_>}&14yMXFm";
$dbname ="id16491484_eldercare";

$bat = $_GET["b"];
$long = $_GET["lo"];
$lat = $_GET["la"];
$serial =$_GET["s"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error){
    die ("Connection failed: ". $conn->connect_error);
}

$sql = "INSER INTO sensordata (battery, longitude, latitude, serialnumber) VALUES ($bat, $long, $lat, $serial) ";

if ($conn->query($sql) === TRUE){
    echo "Data added successfully.<br>";

}else   {
    echo "Error:" .$sql ."<br>" . $conn->error;
}
$conn->close();

echo "Connected Successfuly";
?>