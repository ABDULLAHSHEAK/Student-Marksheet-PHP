<?php

$hostName = "localhost";
$userName = "root";
$db_password = "";
$dbName = "crud";

$connec = mysqli_connect ($hostName, $userName, $db_password,$dbName);

if(!$connec){
  die ("Not Connec " . mysqli_connect_error());
}

?>