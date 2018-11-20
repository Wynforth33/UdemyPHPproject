<?php

 // SYNTAX: function mysqli_connect("server","adminUser","adminPass","Database")
  $connection = mysqli_connect("localhost", "root", "root", "loginapp");
      
  // Test if Connected to Database
  if($connection){
      echo "we are connected";
  } else {
      die("Database Connection Failed!");
  }

?>