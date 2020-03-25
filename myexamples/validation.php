<?php

session_start();




$con = mysqli_connect('localhost','root','');

$db = mysqli_select_db($con, 'session');


if(isset($_POST['submit'])){
$username = $_POST['user'];
$password = $_POST['pass'];

$sql = " select * from usertable where user = '$username'  && pass = '$password' ";

$query = mysqli_query($con, $sql);

$row = mysqli_num_rows($query);
	if($row == 1){
	$_SESSION['user'] = $username;	
	header('location:blank-page.php');
}else{
	header('location:login.php');
}

}


?>