<?php
  $conn = new mysqli("localhost","root","","rest1");
  if($conn->connect_error){
      die("connection failed".$conn->connect_error);
  }
?>