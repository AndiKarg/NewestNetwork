<?php

$con=mysqli_connect("192.168.49.79","root","akarg123","mysql");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>