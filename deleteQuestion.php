<?php 

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'final_year_project');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}



$q_no = "SELECT q_no FROM questions";
if (mysqli_query($con, $q_no)) 
    {
      // echo "<h5>Got the question successfully</h5>";
    } 
    else 
    {
      // echo "Error: " . $q_no . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $q_no);


$q_no_Array = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $q_no_Array[$index] = $row;
     $index++;
}  

$q_no_count = count($q_no_Array);


$deleteCurrentBottomQuestion = "DELETE FROM `questions` WHERE `questions`.`q_no` =$q_no_count";
if(mysqli_query( $con, $deleteCurrentBottomQuestion))
{
    echo '<h4>Successfully deleted the current last question</h4> <br/>';
}
else
{
    echo 'Error'.$deleteCurrentBottomQuestion. "<br/>" .mysqli_error($con);
}


?>