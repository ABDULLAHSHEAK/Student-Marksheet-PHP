<?php
include "db_connec.php";

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $roll = $_POST["roll"];
  $bangla = $_POST["bangla"];
  $math = $_POST["math"];
  $english = $_POST["english"];
  $islam = $_POST["islam"];

  $insert = " INSERT INTO marksheet(name,roll,bangla,math,english,islam) VALUES ('$name','$roll','$bangla','$math','$english','$islam')";

  $result = mysqli_query($connec, $insert);
  
  if($result == true){
    echo "Data Insert";
    header('location: display.php');
  }else{
    echo "Data not Insert";
  }

}


include "insert.php";
?>