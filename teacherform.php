<?php

session_start();
$username = $_SESSION['uname'];
 
$con = mysqli_connect('localhost','root');
if($con) {
    // echo "sucess";
}
$db = mysqli_select_db($con, 'final_year_project');
if($db) {
    // echo "sucess h1";
}

if (isset($_POST['submit']))
{   
    $Q1 =$_POST['points'];
    $Q2 =$_POST['points1'];
    $Q3 =$_POST['points2'];
    $Q4 =$_POST['points3'];
    $Q5 =$_POST['points4'];
    $Q6 =$_POST['points5'];
    $Q7 =$_POST['points6'];
    $Q8 =$_POST['points7'];
    $Q9 =$_POST['points8'];
    $Q10 =$_POST['points9']; 
    $Q11 =$_POST['points10'];

    $query = "INSERT INTO `teachers_answers` (`Q1`,`Q2`,`Q3`,`Q4`,`Q5`,`Q6`,`Q7`,`Q8`,`Q9`,`Q10`,`Q11`) VALUES ('$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10','$Q11')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        // echo "done";
    }
    else 
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }
}

// #####################  Dont know how this works  #########################

// $hostname = "localhost";
// $db = "final_year_project";
// $username = "root";
// $password = "";

// $conn2 = new PDO("mysql:host=$hostname;dbname=$db", $username, $password);

// if(isset($_POST['submit']))
// {
//     $Q1 =$_POST['points'];
//     $Q2 =$_POST['points1'];
//     $Q3 =$_POST['points2'];
//     $Q4 =$_POST['points3'];
//     $Q5 =$_POST['points4'];
//     $Q6 =$_POST['points5'];
//     $Q7 =$_POST['points6'];
//     $Q8 =$_POST['points7'];
//     $Q9 =$_POST['points8'];
//     $Q10 =$_POST['points9']; 
//     $Q11 =$_POST['points10'];
//     // $sql = $conn2 -> prepare("insert into teachers_answers (Q1,Q2) values (:answers)");
//     $sql = $conn2 -> prepare("INSERT INTO `teachers_answers` (`Q1`,`Q2`,`Q3`,`Q4`,`Q5`,`Q6`,`Q7`,`Q8`,`Q9`,`Q10`,`Q11`) VALUES (:Q1,:Q2,:Q3,:Q4,:Q5,:Q6,:Q7,:Q8,:Q9,:Q10,:Q11)");

//     $conn2 -> beginTransaction();
//     // $sql -> execute();
//     // $sql -> execute(array(':answers'=>$answers));
//     // $sql -> execute(array(':Q1:Q2:Q3:Q4:Q5:Q6:Q7:Q8:Q9:Q10:Q11'=>$Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10,$Q11));

//     // echo "<h2>Data entired</h2>";

//     // $answers1 = $_POST['points1'];
//     // $sql = $conn2 -> prepare("insert into teachers_answers (Q2) values (:answers1)");
//     // // $conn2 -> beginTransaction();
//     // $sql -> execute(array(':answers1'=>$answers1));

//     $conn2 ->commit();
// }

   

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="teacherform.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-header">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="forms.php">Forms </a>
                </li>
                <li class="nav-item  right">
                    <a class="nav-link" href="web/index.php">Admin panel</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                        echo "$username";
                        ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> -->
            </ul>
        </div>
    </nav>


    <div class="row">
        <div class="col-lg-3 col-md-2 col-sm-1"></div>
        <div class="col-md-8 col-lg-6 col-sm-10">
            <h2></h2>

            <div class="row form-row">
                <form method="post">

                    <!--  Q1 -->
                    <h5>
                        <?php

                            $q = "SELECT Q1 FROM `questions`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q1']}";
                        ?>
                    </h5>
                    <input type="radio" value="1" class="radio" name="points">
                    <label for="1">1</label>
                    <input type="radio" value="2" class="radio" name="points">
                    <label for="2">2</label>
                    <input type="radio" value="3" class="radio" name="points">
                    <label for="3">3</label>
                    <input type="radio" value="4" class="radio" name="points">
                    <label for="4">4</label>
                

                    <!--  Q2 -->
                    <h5>
                        <?php

                            $q = "SELECT Q2 FROM `questions`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q2']}";
                        ?>
                    </h5>
                    <input type="radio" value="1" class="radio" name="points1">
                    <label for="1">1</label>
                    <input type="radio" value="2" class="radio" name="points1">
                    <label for="2">2</label>
                    <input type="radio" value="3" class="radio" name="points1">
                    <label for="3">3</label>
                    <input type="radio" value="4" class="radio" name="points1">
                    <label for="4">4</label>

                    <!--  Q3 -->
                    <h5>
                        <?php

                            $q = "SELECT Q3 FROM `questions`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q3']}";
                        ?>
                    </h5>
                    <input type="radio" value="1" class="radio" name="points2">
                    <label for="1">1</label>
                    <input type="radio" value="2" class="radio" name="points2">
                    <label for="2">2</label>
                    <input type="radio" value="3" class="radio" name="points2">
                    <label for="3">3</label>
                    <input type="radio" value="4" class="radio" name="points2">
                    <label for="4">4</label>                
                    

                    <!--  Q4 -->
                    <h5>
                        <?php

                            $q = "SELECT Q4 FROM `questions`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q4']}";
                        ?>
                    </h5>
                    <input type="radio" value="1" class="radio" name="points3">
                    <label for="1">1</label>
                    <input type="radio" value="2" class="radio" name="points3">
                    <label for="2">2</label>
                    <input type="radio" value="3" class="radio" name="points3">
                    <label for="3">3</label>
                    <input type="radio" value="4" class="radio" name="points3">
                    <label for="4">4</label>


                    <!--  Q5 -->
                    <h5>
                        <?php

                            $q = "SELECT Q5 FROM `questions`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q5']}";
                        ?>
                    </h5>
                    <input type="radio" value="1" class="radio" name="points4">
                    <label for="1">1</label>
                    <input type="radio" value="2" class="radio" name="points4">
                    <label for="2">2</label>
                    <input type="radio" value="3" class="radio" name="points4">
                    <label for="3">3</label>
                    <input type="radio" value="4" class="radio" name="points4">
                    <label for="4">4</label>


                    <!--  Q6 -->
                    <h5>
                        <?php

                            $q = "SELECT Q6 FROM `questions`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q6']}";
                        ?>
                    </h5>
                    <input type="radio" value="1" class="radio" name="points5">
                    <label for="1">1</label>
                    <input type="radio" value="2" class="radio" name="points5">
                    <label for="2">2</label>
                    <input type="radio" value="3" class="radio" name="points5">
                    <label for="3">3</label>
                    <input type="radio" value="4" class="radio" name="points5">
                    <label for="4">4</label>


                    <!--  Q7 -->
                    <h5>
                        <?php

                            $q = "SELECT Q7 FROM `questions`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q7']}";
                        ?>
                    </h5>
                    <input type="radio" value="1" class="radio" name="points6">
                    <label for="1">1</label>
                    <input type="radio" value="2" class="radio" name="points6">
                    <label for="2">2</label>
                    <input type="radio" value="3" class="radio" name="points6">
                    <label for="3">3</label>
                    <input type="radio" value="4" class="radio" name="points6">
                    <label for="4">4</label>


                    <!--  Q8 -->
                    <h5>
                        <?php

                            $q = "SELECT Q8 FROM `questions`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q8']}";
                        ?>
                    </h5>
                    <input type="radio" value="1" class="radio" name="points7">
                    <label for="1">1</label>
                    <input type="radio" value="2" class="radio" name="points7">
                    <label for="2">2</label>
                    <input type="radio" value="3" class="radio" name="points7">
                    <label for="3">3</label>
                    <input type="radio" value="4" class="radio" name="points7">
                    <label for="4">4</label>     


                    <!--  Q9 -->
                    <h5>
                        <?php

                            $q = "SELECT Q9 FROM `questions`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q9']}";
                        ?>
                    </h5>
                    <input type="radio" value="1" class="radio" name="points8">
                    <label for="1">1</label>
                    <input type="radio" value="2" class="radio" name="points8">
                    <label for="2">2</label>
                    <input type="radio" value="3" class="radio" name="points8">
                    <label for="3">3</label>
                    <input type="radio" value="4" class="radio" name="points8">
                    <label for="4">4</label>


                    <!--  Q10 -->
                    <h5>
                        <?php

                            $q = "SELECT Q10 FROM `questions`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q10']}";
                        ?>
                    </h5>
                    <input type="radio" value="1" class="radio" name="points9">
                    <label for="1">1</label>
                    <input type="radio" value="2" class="radio" name="points9">
                    <label for="2">2</label>
                    <input type="radio" value="3" class="radio" name="points9">
                    <label for="3">3</label>
                    <input type="radio" value="4" class="radio" name="points9">
                    <label for="4">4</label>


                    <!--  Q11 -->
                    <h5>
                        <?php

                            $q = "SELECT Q11 FROM `questions`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q11']}";
                        ?>
                    </h5>
                    <input type="radio" value="1" class="radio" name="points10">
                    <label for="1">1</label>
                    <input type="radio" value="2" class="radio" name="points10">
                    <label for="2">2</label>
                    <input type="radio" value="3" class="radio" name="points10">
                    <label for="3">3</label>
                    <input type="radio" value="4" class="radio" name="points10">
                    <label for="4">4</label>

                    <br><br>    
                    <!-- <button class="btn btn-primary" type="submit" name="submit">Submit</button> -->
                    <input type="submit" class="btn btn-primary" name="submit" value="Submit">  
                    <br>
                    <button class='btn btn-primary' onclick="print()">Print</button>  
                </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-2 col-sm-1"></div>

    </div>
    <script type="text/javascript">    
        function print() {
            window.print();
        }
    </script>
</body>







<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

</html>