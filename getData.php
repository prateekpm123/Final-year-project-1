<?php

$counter = $_POST['counter'];


// ###########  Making a connection to the database  #############
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'final_year_project');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";


// *************************  Getting the QUESTIONS from the table  ******************************
$questionsArray = "SELECT Questions FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      echo "<h5>Got the question successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$yourArray = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $yourArray[$index] = $row;
     $index++;
}  


// **********************************  TO EXTRACT OPTIONS  **************************************
$questionsArray = "SELECT Option1 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      echo "<h5>Got the option successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option1 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option1[$index] = $row;
     $index++;
}  
// echo '<pre>'; print_r($option1); echo '</pre>';

// printing these values in the #hiddenDisplay Tag
echo '<div id="questionIs">'.$yourArray[$counter]["Questions"].'</div>';
echo '<div id="option1">'.$option1[$counter]["Option1"].'</div>';
echo '</br>';

// if(isset($option1 == ""))
// {
//     echo "<p class="known">1</p>";
//     alert('its a longanswer');
// }
// else {
//     echo "<p class="known">2</p>";
//     alert('its a multiple choice');
// }


// echo '<pre>'; print_r($yourArray); echo '</pre>';
// $isAlreadyThere = 0;
// This is how we'll get the values of 
// for( $i=0; $i < count($yourArray); $i++ )/
// {


  

// }



?>