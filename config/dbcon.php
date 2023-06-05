<?php
  
  $con = mysqli_connect("localhost", "root", " ", "phpecom");
  if(!$con){
    die ("connection failed: ". mysqli_connect_error());
  }

?>