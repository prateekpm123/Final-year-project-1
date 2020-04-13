<?php 


$question = $_POST['question'];
$answer = $_POST['answer'];
// $id = $_POST['id'];



// printing these just for testing
echo '</br>';
echo '<h4>'.$question.'</h4>';
echo '</br>';
for( $i=0; $i < count($answer); $i++ )
{
  echo '<h4>'.$answer[$i].'</h4>';
  echo '</br>';
}
echo '</br>';


$con = mysqli_connect('localhost','root','');
// mysqli_select_db($con, 'final_year_project');
// mysqli_select_db($con, 'test');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";





$add = "insert into questions(Questions) values ('$question')";
// mysqli_query($con, $add);
if (mysqli_query($con, $add)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $add . "<br>" . mysqli_error($con);
}



echo "inserted successfully";

$ans = "insert into answers(Answers) values ('$answer')";
if (mysqli_query($con, $ans)) {
  echo "Answer record created successfully";
} else {
  echo "Error: " . $ans . "<br>" . mysqli_error($con);
}

?> 