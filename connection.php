<?php
error_reporting(0);
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "370project";

  $conn=mysqli_connect($servername, $username, $password, $dbname);




  if ($conn) {
    //echo"Connection ok";
  }
  else {
    echo "Connected failed".mysqli_connect_error();
  }
?>
