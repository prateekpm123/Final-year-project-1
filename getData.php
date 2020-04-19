<?php
//  ||****************************  This is backend for Preview-form.php  *********************************||

// $counter = $_POST['counter'];


// ###########  Making a connection to the database  #############
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'final_year_project');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";


// *************************  Getting the QUESTIONS from the table  ******************************
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



// echo json_encode($q_no_Array);


// *************************  Getting the QUESTIONS from the table  ******************************
$questionsArray = "SELECT Questions FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      // echo "<h5>Got the question successfully</h5>";
    } 
    else 
    {
      // echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$yourQuestionArray = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $yourQuestionArray[$index] = $row;
     $index++;
}  

$yourQuestionArrayCount = count($yourQuestionArray);

echo "<div id='questionCount' style='display:none;' >".$yourQuestionArrayCount."</div>";

// **********************************  TO EXTRACT OPTIONS  **************************************
$questionsArray = "SELECT Option1 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      // echo "<h5>Got the option successfully</h5>";
    } 
    else 
    {
      // echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option1 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option1[$index] = $row;
     $index++;
}  

// echo "<div id='option1' style='display:none;' >".$option1[0]['Option1']."</div>";


// ************************  Extracting Option 2  **********************************
$questionsArray = "SELECT Option2 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      // echo "<h5>Got the option2 successfully</h5>";
    } 
    else 
    {
      // echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option2 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option2[$index] = $row;
     $index++;
}  

// ************************  Extracting Option 3  **********************************
$questionsArray = "SELECT Option3 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      // echo "<h5>Got the Option3 successfully</h5>";
    } 
    else 
    {
      // echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option3 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option3[$index] = $row;
     $index++;
} 

// ************************  Extracting Option 4  **********************************

$questionsArray = "SELECT Option4 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      // echo "<h5>Got the Option4 successfully</h5>";
    } 
    else 
    {
      // echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option4 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option4[$index] = $row;
     $index++;
} 

// ************************  Extracting Option 5  **********************************

$questionsArray = "SELECT Option5 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      // echo "<h5>Got the Option5 successfully</h5>";
    } 
    else 
    {
      // echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option5 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option5[$index] = $row;
     $index++;
} 

$option1Json = json_encode($option1);
// echo '<pre>'; print_r($option1); echo '</pre>';   // This part prints the whole arrays structure in a formatted way
 
// ********** printing these values in the #hiddenDisplay Tag ***************

// echo '<div id="questionIs">'.json_encode($yourQuestionArray).'</div>';
// echo '<div id="questionCountIs">'.$yourQuestionArrayCount.'</div>';
// echo '<textarea id="option1" class="multipleChoiceOption">'.$option1Json.'</textarea>';
// echo '<div id="option2" class="multipleChoiceOption">'.json_encode($option2).'</div>';
// echo '<div id="option3" class="multipleChoiceOption">'.json_encode($option3).'</div>';
// echo '<div id="option4" class="multipleChoiceOption">'.json_encode($option4).'</div>';
// echo '<div id="option5" class="multipleChoiceOption">'.json_encode($option5).'</div>';



// ********** Trying to add a DOM element through php **************
// $div = $dom->createElement($addElement);//Create new <br> tag
// $dom->appendChild($div);//Add the style tag to document

// echo '</br>';

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
// for( $i=0; $i < count($yourQuestionArray); $i++ )/
// {


  

// }



?>