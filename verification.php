<?php 

// $con = mysqli_connect('localhost','root');
// if($con) {
//     // echo "sucess";
// }
// $db = mysqli_select_db($con, 'final_year_project');
// if($db) {
//     // echo "sucess h1";
// }

// $myusernames = [];
// $myuserpassds = [];

// $q1 = "SELECT username FROM `login`";
// $result1 = mysqli_query($con, $q);
// $desc = mysqli_fetch_assoc($result);                                  

// $q2 = "SELECT 'password' FROM `login`";
// $result2 = mysqli_query($con, $q);
// $passds = mysqli_fetch_assoc($result); 

// $uname = $myusernames[0];
// $pwd = $myuserpassds[0];

$uname = "shweta";
$pwd = "pony";

$taken_uname = $_POST['uname'];
$taken_pwd = $_POST['pwd'];

echo "$taken_pwd and $taken_uname";

// if(isset($_SESSION['uname']))
// {
//     echo "<h1>Welcome ".$_SESSION['uname']."</h1>";

//     echo "<a href='product.php'>Product</a><br>";

//     echo "<br><a href='logout.php'><input type=button value=logout name=logout</a>";
// }
// else
// {
if( $taken_uname===$uname && $taken_pwd===$pwd )
{
    $_SESSION['uname']=$uname;

    echo "<script>location.href='welcome.php'</script>";
}
else 
{
    echo "<script>alert('username or password incorrect!' )</script>";
    echo "<script>location.href='login.php'</script>";
}
// }


?>