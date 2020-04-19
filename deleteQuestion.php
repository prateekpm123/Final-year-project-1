<?php 

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'final_year_project');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$last_q_no = $_POST['last_q_no'];

$deleteCurrentBottomQuestion = "DELETE FROM `questions` WHERE `questions`.`q_no` =$last_q_no";
if(mysqli_query( $con, $deleteCurrentBottomQuestion))
{
    echo '<h4>Successfully deleted the current last question</h4> <br/>';
}
else
{
    echo 'Error'.$deleteCurrentBottomQuestion. "<br/>" .mysqli_error($con);
}


?>