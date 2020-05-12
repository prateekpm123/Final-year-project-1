<?php 

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'final_year_project');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$id = $_POST['id'];
$cardName = $_POST['cardName'];
$id--;
echo $cardName;

$updateForm = "UPDATE `form_details` SET `form_name`='$cardName' WHERE `id`=$id";
if (mysqli_query($con, $updateForm)) {
echo "<h5>Entered form successfully</h5>";
} 
else {
echo "Error: " . $updateForm . "<br>" . mysqli_error($con);
}


?>