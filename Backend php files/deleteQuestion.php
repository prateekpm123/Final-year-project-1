<?php 


require_once('Log.class.php');

$Log = new Log();

$time = time();
$actual_time = date(' D M Y @ H:i:s', $time);

$Log -> Write('test.txt',"\r \r ***********:: Deleting Questions ************* $actual_time");

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'final_year_project');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}



$Log -> Write('test.txt',"Connection sucessfull");



$q_no = "SELECT q_no FROM questions";
if (mysqli_query($con, $q_no)) 
    {
      // echo "<h5>Got the question successfully</h5>";
      $Log -> Write('test.txt',"Got the q_no successfully");

    } 
    else 
    {
      // echo "Error: " . $q_no . "<br>" . mysqli_error($con);
      $Log -> Write('test.txt',"Error getting the question number");

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
    $Log -> Write('test.txt',"Successfully deleted the current last question");

}
else
{
    echo 'Error'.$deleteCurrentBottomQuestion. "<br/>" .mysqli_error($con);
    $Log -> Write('test.txt',"Error deleting the current last question");

}


?>