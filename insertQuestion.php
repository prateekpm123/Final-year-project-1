<?php 



// ###########  Making a connection to the database  #############
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'final_year_project');
// mysqli_select_db($con, 'test');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";



$q_no = $_POST['id'];
$formId = $_POST['formId'];
$btnid = $_POST['btnid'];


if( $btnid == 3)
{
    $insert =  "INSERT INTO `questions`(`id`, `q_no`) VALUES ('$formId', '$q_no');";
    if (mysqli_query($con, $insert)) 
    {
      echo "<h5>Inserted Blank Insert</h5>";

    } 
    else 
    {
      echo "Error: " . $insert . "<br>" . mysqli_error($con);
    }
}
else if ($btnid == 1)
{
    $insert =  "INSERT INTO `questions`(`id`, `q_no`,`Option1`) VALUES ('$formId', '$q_no','  ');";
    if (mysqli_query($con, $insert)) 
    {
      echo "<h5>Inserted Blank Insert</h5>";

    } 
    else 
    {
      echo "Error: " . $insert . "<br>" . mysqli_error($con);
    }
}







?> 