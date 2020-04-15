<?php 

// ##########  Collecting the variables from AJAX  ###########
$questionCount = $_POST['id'];
$question = $_POST['question'];
$option = $_POST['option'];
$btnid = $_POST['btnid'];
// $questionAreaCounter = $_POST['questionAreaCounter'];
// $id = $_POST['id'];

// echo $option;
// printing these just for testing
echo '</br>';
echo '<h4>'.$question.'</h4>';
echo '</br>';
for( $i=0; $i < count($option); $i++ )
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


// // This condition checks weather the entry is for long answer or not
if ( $btnid == 1)
{

//   // function addingQuestionsToTheDatabase($con, $add, $questionCount, $question)
//   // {
  if( $isAlreadyThere == 1)
  {
    $add =  "UPDATE `questions` SET `Questions`='$question' WHERE `id`=1 AND `q_no`=$questionCount";
    if (mysqli_query($con, $add)) 
    {
      echo "<h5>Updated record created successfully</h5>";

    } 
    else 
    {
      echo "Error: " . $add . "<br>" . mysqli_error($con);
    }
    echo " <h3> </h3>";

    for ( $a = 0; $a < count($option); $a++)
    {
      $aPlus = $a + 1;
      $optionSpace = $option[$a];
      $temp = "Option".$aPlus;
      $addOption = "UPDATE `questions` SET `$temp`='$optionSpace' WHERE `id`=1 AND `q_no`=$questionCount";
      if (mysqli_query($con, $addOption)) 
        {
          echo "<h5>Added the option sucessfully</h5>";

        } 
        else 
        {
          echo "Error: " . $addOption . "<br>" . mysqli_error($con);
        }
    }
  }
  else 
  {
    // ###################   Adding the question to the database   #####################
    $add = "INSERT INTO `questions`(`id`, `q_no`, `Questions`) VALUES ('1','$questionCount','$question')";
    echo " <h3> in inset query </h3>";
    // mysqli_query($con, $add);
    if (mysqli_query($con, $add)) 
    {
      echo "<h5>New record created successfully</h5>";

    } 
    else 
    {
      echo "Error: " . $add . "<br>" . mysqli_error($con);
    }
    for ( $a = 0; $a < count($option); $a++)
    {
      $aPlus = $a + 1;
      $optionSpace = $option[$a];
      $temp = "Option".$aPlus;
      $addOption = "UPDATE `questions` SET `$temp`='$optionSpace' WHERE `id`=1 AND `q_no`=$questionCount";
      if (mysqli_query($con, $addOption)) 
        {
          echo "<h5>Added the option sucessfully</h5>";

        } 
        else 
        {
          echo "Error: " . $addOption . "<br>" . mysqli_error($con);
        }
    }
  }
    
//   // }

// }
//   addingQuestionsToTheDatabase($con, $add, $questionCount , $question);

}
else if ( $btnid == 3)
{

//   // function addingQuestionsToTheDatabase($con, $add, $questionCount, $question)
//   // {
  if( $isAlreadyThere == 1)
  {
    $add =  "UPDATE `questions` SET `Questions`='$question' WHERE `id`=1 AND `q_no`=$questionCount";
    if (mysqli_query($con, $add)) 
    {
      echo "<h5>Updated record created successfully</h5>";

    } 
    else 
    {
      echo "Error: " . $add . "<br>" . mysqli_error($con);
    }
    echo " <h3> </h3>";

  $updateOptions = "UPDATE `questions` SET `Option1`='' ,`Option2`='' ,`Option3`='',`Option4`='' ,`Option5`='',`Option6`='',`Option7`='',`Option8`='',`Option9`='' ,`Option10`='' WHERE `id`=1 AND `q_no`=$questionCount"; 
    if (mysqli_query($con, $updateOptions)) 
    {
      echo "<h5>Options removed Sucessfully</h5>";

    } 
    else  
    {
      echo "Error: " . $updateOptions . "<br>" . mysqli_error($con);
    }
  }
  else 
  {
    // ###################   Adding the question to the database   #####################
    $add = "INSERT INTO `questions`(`id`, `q_no`, `Questions`) VALUES ('1','$questionCount','$question')";
    echo " <h3> in inset query </h3>";
    // mysqli_query($con, $add);
    if (mysqli_query($con, $add)) 
    {
      echo "<h5>New record created successfully</h5>";

    } 
    else  
    {
      echo "Error: " . $add . "<br>" . mysqli_error($con);
    }

 
    $updateOptions = "UPDATE `questions` SET `Option1`='' ,`Option2`='' ,`Option3`='',`Option4`='' ,`Option5`='',`Option6`='',`Option7`='',`Option8`='',`Option9`='' ,`Option10`='' WHERE `id`=1 AND `q_no`=$questionCount"; 
    if (mysqli_query($con, $updateOptions)) 
    {
      echo "<h5>Options removed Sucessfully</h5>";

    } 
    else  
    {
      echo "Error: " . $updateOptions . "<br>" . mysqli_error($con);
    }
    
  }
    
//   // }

// }
//   addingQuestionsToTheDatabase($con, $add, $questionCount , $question);

}





// echo "inserted successfully";

// $ans = "insert into options(options) values ('$option')";
// if (mysqli_query($con, $ans)) {
//   echo "option record created successfully";
// } else {
//   echo "Error: " . $ans . "<br>" . mysqli_error($con);
// }

?> 