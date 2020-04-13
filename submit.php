<?php 

$con = mysqli_connect('localhost','root','');
// mysqli_select_db($con, 'final_year_project');
mysqli_select_db($con, 'test');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";


$question = $_POST['question'];
$answer = $_POST['answer'];

$add = "insert into questions(Questions) values ('$question')";
// mysqli_query($con, $add);
if (mysqli_query($con, $add)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $add . "<br>" . mysqli_error($con);
}
// echo $question;
// echo '</br>';
// echo $answer;
// echo "inserted successfully";

$ans = "insert into answers(Answers) values ('$answer')";
if (mysqli_query($con, $ans)) {
  echo "Answer record created successfully";
} else {
  echo "Error: " . $ans . "<br>" . mysqli_error($con);
}
?> 