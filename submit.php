<?php 

// ##########  Collecting the variables from AJAX  ###########
$questionCount = $_POST['id'];
$question = $_POST['question'];
$option = $_POST['option'];
$btnid = $_POST['btnid'];
// $id = $_POST['id'];


// printing these just for testing
echo '</br>';
echo '<h4>'.$question.'</h4>';
echo '</br>';
for( $i=0; $i <=count($option); $i++ )
{
  echo '<h4>'.$option[$i].'</h4>';
  echo '</br>';
}
echo '</br>';

// ###########  Making a connection to the database  #############
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'final_year_project');
// mysqli_select_db($con, 'test');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
echo "</br>";


// #############   This whole is to check the get the primary key of the question table and if the same primary key is coming up then just update it !!  ##############
$checkForPrimaryKey = "SELECT q_no FROM questions";
if (mysqli_query($con, $checkForPrimaryKey)) 
    {
      echo "<h5>New record created successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $checkForPrimaryKey . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $checkForPrimaryKey);


$yourArray = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $yourArray[$index] = $row;
     $index++;
}  

// echo '<pre>'; print_r($yourArray); echo '</pre>';
$isAlreadyThere = 0;
// This is how we'll get the values of 
for( $i=0; $i < count($yourArray); $i++ )
{
  echo '<h4>'.$yourArray[$i]["q_no"].'</h4>';
  echo '</br>';
  if ( $questionCount == $yourArray[$i]["q_no"])
  {
    $isAlreadyThere = 1;
  }

}
echo '</br>';

$sql = "insert into questions(`Questions`,`Option1`,`Option2`,`Option3`,`Option4` ) values (`$question`,`$option[$i]`) ";
mysqli_query($con, $sql);