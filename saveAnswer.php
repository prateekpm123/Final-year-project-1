<!-- #############**********   This is the backend for the Preview-form.php to save the answers into the database   **********############## -->
<?php

$counter = $_POST['counter'];
$answer = $_POST['answer'];


$counterMinus1 = $counter - 2;
// ###########  Making a connection to the database  #############
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'final_year_project');

echo "Counter minus ".$counter;
echo "</br>";
echo "Counter  ".$counter;
echo "</br>";

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";


// ##############################   Checking if the answer is empty or not ?   ####################################

$check = "SELECT `Answers` FROM `answers` WHERE `id`=1 AND `q_no`=$counter";
if (mysqli_query($con, $check)) 
    {
      echo "<h5>Got the answer successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $check . "<br>" . mysqli_error($con);
    }

$answers = mysqli_query($con, $check);
// print_r($answers);

print_r($answers);
// echo $answers['current_field']['field_count']['lengths']['num_rows'];
// foreach ($answers as $key => $Object) {
//     echo $Object->num_rows;
// }

$noOfRows = $answers->num_rows;

// echo $noOfRows;
// *****  This part is converting the Answers into an array  ******
$yourAnswerArray = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($answers)){ // loop to store the data in an associative array.
     $yourAnswerArray[$index] = $row;
     $index++;
}  
// print_r($yourAnswerArray);
// echo '<pre>'; print_r($yourAnswerArray); echo '</pre>';

// echo " <h3>".$yourAnswerArray[0]['Answers']."</h3> ";

// $answerCount = count($yourAnswerArray[0]['Answers']);


// *******************  This is a condition to try to make the answers work properly and saved in the database properly   ******

// if($counter > 15 )
// {
//     if ($noOfRows == 1)
//     {   
//         echo " <h3>counter is </h3> ".$counter;
//         echo " <h3>counter-- is </h3> ".$counterMinus1;

//         $update = "UPDATE `answers` SET `Answers`='$answer' WHERE `id`=1 AND `q_no`=$counter AND `ans_id`=$counter";
//         if (mysqli_query($con, $update)) 
//         {
//             echo "<h5>Answer updated successfully</h5>";
//         } 
//         else 
//         {
//             echo "Error: " . $update . "<br>" . mysqli_error($con);
//         }
//     }
//     else if ($noOfRows == 0)
//     {
//         echo " <h3>counter is </h3> ".$counter;
//         echo " <h3>counter-- is </h3> ".$counterMinus1;
//         #########################   Inserting the answers into the database if Empty   #################################
//         $insert = "INSERT INTO `answers`(`id`, `user_id`, `q_no`,`ans_id`, `Adate`, `Answers`) VALUES (1,1,$counter,$counter,'','$answer')";
//         if (mysqli_query($con, $insert)) 
//         {
//             echo "<h5>Answer inserted successfully</h5>";
//         } 
//         else 
//         {
//             echo "Error: " . $insert . "<br>" . mysqli_error($con);
//         }

//     }
// }
// else {
//     if ($noOfRows == 1)
//     {   
//         echo " <h3>counter is </h3> ".$counter;
//         echo " <h3>counter-- is </h3> ".$counterMinus1;

//         $update = "UPDATE `answers` SET `Answers`='$answer' WHERE `id`=1 AND `q_no`=$counterMinus1 AND `ans_id`=$counterMinus1";
//         if (mysqli_query($con, $update)) 
//         {
//             echo "<h5>Answer updated successfully</h5>";
//         } 
//         else 
//         {
//             echo "Error: " . $update . "<br>" . mysqli_error($con);
//         }
//     }
//     else if ($noOfRows == 0)
//     {
//         echo " <h3>counter is </h3> ".$counter;
//         echo " <h3>counter-- is </h3> ".$counterMinus1;
//         #########################   Inserting the answers into the database if Empty   #################################
//         $insert = "INSERT INTO `answers`(`id`, `user_id`, `q_no`,`ans_id`, `Adate`, `Answers`) VALUES (1,1,$counterMinus1,$counterMinus1,'','$answer')";
//         if (mysqli_query($con, $insert)) 
//         {
//             echo "<h5>Answer inserted successfully</h5>";
//         } 
//         else 
//         {
//             echo "Error: " . $insert . "<br>" . mysqli_error($con);
//         }

//     }
// }

// Extra optional code
if ($noOfRows == 1)
{   
    echo " <h3>counter is </h3> ".$counter;
    echo " <h3>counter-- is </h3> ".$counterMinus1;

    $update = "UPDATE `answers` SET `Answers`='$answer' WHERE `id`=1 AND `q_no`=$counterMinus1 AND `ans_id`=$counterMinus1";
    if (mysqli_query($con, $update)) 
    {
        echo "<h5>Answer updated successfully</h5>";
    } 
    else 
    {
        echo "Error: " . $update . "<br>" . mysqli_error($con);
    }
}
else if ($noOfRows == 0)
{
    echo " <h3>counter is </h3> ".$counter;
    echo " <h3>counter-- is </h3> ".$counterMinus1;
    #########################   Inserting the answers into the database if Empty   #################################
    $insert = "INSERT INTO `answers`(`id`, `user_id`, `q_no`,`ans_id`, `Adate`, `Answers`) VALUES (1,1,$counterMinus1,$counterMinus1,'','$answer')";
    if (mysqli_query($con, $insert)) 
    {
        echo "<h5>Answer inserted successfully</h5>";
    } 
    else 
    {
        echo "Error: " . $insert . "<br>" . mysqli_error($con);
    }

}

?>