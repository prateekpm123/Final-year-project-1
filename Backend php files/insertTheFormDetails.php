<?php 

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'final_year_project');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$id--;
$createANewForm = "INSERT INTO `form_details`(`admin_id`,`id`) VALUES ('123','$id') ";
if (mysqli_query($con, $createANewForm)) {
  echo "<h5>Entered form successfully</h5>";
} 
else {
  echo "Error: " . $createANewForm . "<br>" . mysqli_error($con);
}



?>