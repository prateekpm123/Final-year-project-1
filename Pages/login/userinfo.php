<?php

    // include_once("mydb.php");
$con = mysqli_connect('localhost','root');

$db = mysqli_select_db($con, 'final_year_project');
    
    $question1 = $_POST['question'];
    $query = "UPDATE `questions` SET `Q2`='$question1' WHERE `Form Number`='Form2'";
    if(mysqli_query($con,$query))
    {
        echo " successfully inserted";
    }   
    else {
        echo "insertion failed";
    }

?>