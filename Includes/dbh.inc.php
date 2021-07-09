<?php
 
$serverName = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "phpGoreLand";

$conn = mysqli_connect($serverName,$dBUsername,$dBPassword,$dBName);

if (!$conn){
    die("Connection failed:" .mysqli_connect_error());

}

$conn = mysqli_connect($serverName, $dBUsername, "", $dBName);

 if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}