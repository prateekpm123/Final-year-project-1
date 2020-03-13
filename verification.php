<?php 

$con = mysqli_connect('localhost','root');
if($con) {
    // echo "sucess";
}
$db = mysqli_select_db($con, 'final_year_project');
if($db) {
    // echo "sucess h1";
}

$taken_uname = $_POST['uname'];
$taken_pwd = $_POST['pwd'];


$check_from_db = mysqli_query($con ,"select * from login where username ='$taken_uname' && password='$taken_pwd' ");
$hitnumber = mysqli_num_rows($check_from_db);
echo $hitnumber;
if($hitnumber == TRUE)
{   
    session_start();
    $_SESSION['uname']=$taken_uname;
    $_SESSION['loggedin'] = TRUE;
    // $_SESSION['username'] = $taken_uname;
    echo "<script>location.href='index.php'</script>";
}
else 
{ 
    echo "<script>alert('username or password incorrect!' )</script>";
    echo "<script>location.href='login.php'</script>";
}




?>