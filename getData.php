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

// ************************  Extracting Option 2  **********************************
$questionsArray = "SELECT Option2 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      echo "<h5>Got the option2 successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option2 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option2[$index] = $row;
     $index++;
}  

$questionsArray = "SELECT Option3 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      echo "<h5>Got the Option3 successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option3 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option3[$index] = $row;
     $index++;
} 

$questionsArray = "SELECT Option4 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      echo "<h5>Got the Option4 successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option4 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option4[$index] = $row;
     $index++;
} 

$questionsArray = "SELECT Option5 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      echo "<h5>Got the Option5 successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option5 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option5[$index] = $row;
     $index++;
} 

// echo '<pre>'; print_r($option1); echo '</pre>';
 
// printing these values in the #hiddenDisplay Tag
echo '<div id="questionIs">'.$yourArray[$counter]["Questions"].'</div>';
echo '<div id="option1" class="multipleChoiceOption">'.$option1[$counter]["Option1"].'</div>';
echo '<div id="option2" class="multipleChoiceOption">'.$option2[$counter]["Option2"].'</div>';
echo '<div id="option3" class="multipleChoiceOption">'.$option3[$counter]["Option3"].'</div>';
echo '<div id="option4" class="multipleChoiceOption">'.$option4[$counter]["Option4"].'</div>';
echo '<div id="option5" class="multipleChoiceOption">'.$option5[$counter]["Option5"].'</div>';



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


// echo '<pre>'; print_r($option2); echo '</pre>';
// $isAlreadyThere = 0;
// This is how we'll get the values of 
// for( $i=0; $i < count($yourArray); $i++ )/
// {


  

// }



?>