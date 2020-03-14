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
    $Q1 =$_POST['question'];

    // $query = "INSERT INTO `questions` (`Q1`) VALUES ('$Q1') WHERE `Form Number`='Form2'";
    $query = "UPDATE `questions` SET `Q2`='$Q1' WHERE `Form Number`='Form2'";

    // UPDATE `questions` SET `Q1`=$Q1 WHERE `Form Number`='Form2';
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

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.min.css">
    <link href="jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="admin-control-form.css">

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
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item  right">
                    <a class="nav-link" href="web/index.php">Admin panel</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> -->
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-lg-6 left-side">
            <form method="post">
            
                <textarea name="question" placeholder="Enter the questions..." id="area-increase" onmouseover="test()" onkeypress="area_increase()" cols="30" rows="10" class="question-area">

                </textarea>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit" onclick="createNewArea()">    

                <!-- <span> <input class="btn btn-primary textarea-btn" type="submit" name='submit' value='submit'>+</input>  Add the item</span> -->
            </form>
        </div>
        <div class="col-lg-6 right-side">
            <?php

                $q = "SELECT Q1 FROM `questions`";
                $result = mysqli_query($con, $q);
                $desc = mysqli_fetch_assoc($result);

            ?>
            <h5>
                <?php
                        
                        // echo $desc;
                        echo "{$desc['Q1']}";

                ?>
            </h5>
        </div>
    </div>
    <div class="pop">
        <div class="row">
            <!-- <div class="col-lg-1"></div> -->
            <div class="col-lg-2">
                <button class="btn btn-primary pop-btn" onclick="goback()">Back</button>
            </div>
        </div>
    </div>

    <!-- ##### Bootstrap libraries ##### -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <!--  ###### Jquery libraries ##### -->
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="admin-control-form.js"></script>

</body>

</html>