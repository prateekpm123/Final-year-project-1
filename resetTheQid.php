<?php

// ###########  Making a connection to the database  #############
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'final_year_project');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}




?>
