<?php

session_start();
//$username = $_SESSION['uname'];
$con = mysqli_connect('localhost','root','','final_year_project');
if($con) {
    // echo "success";
}
$db = mysqli_select_db($con, 'final_year_project');
if($db) {
    // echo "success h1";
}

if (isset($_POST['submit']))
{   
    $Q1 =$_POST['Rate1'];
    $Q2 =$_POST['Rate2'];
    $Q3 =$_POST['Rate3'];
    $Q4 =$_POST['Rate4'];
    $Q5 =$_POST['Rate5'];
    $Q6 =$_POST['Rate6'];
    $Q7 =$_POST['Rate7'];
    $Q8 =$_POST['Rate8'];
    $Q9 =$_POST['text'];

    $query = "INSERT INTO `teacher_event_ans` (`Q1`,`Q2`,`Q3`,`Q4`,`Q5`,`Q6`,`Q7`,`Q8`,`Q9`) VALUES ('$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        // echo "done";zxdfczf
    }
    else 
    {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
    }
}
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>event and workshop form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="teacher_event.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
        <div class="container center">
        <form method="POST">
            <h1>Event/Workshop form</h1>
            <hr>
            <ul type="square">
                <!-- Q1 -->
                <li><h4><?php
                            $q = "SELECT Q1 FROM `teacher_event`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q1']}";
                        ?></h4></li>
                <input type="radio" id="r" name="Rate1" value="BAD"><label>1</label><br>
                <input type="radio" id="r" name="Rate1" value="OK"><label>2</label><br>
                <input type="radio" id="r" name="Rate1" value="AVERAGE"><label>3</label><br>
                <input type="radio" id="r" name="Rate1" value="GOOD"><label>4</label><br>
                <input type="radio" id="r" name="Rate1" value="EXCELLENT"><label>5</label><br>
                <br>

                <!-- Q2 -->
                <li><h4><?php
                            $q = "SELECT Q2 FROM `teacher_event`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q2']}";
                        ?></h4></li>
                <input type="radio" id="r" name="Rate2" value="BAD"><label>1</label> &nbsp; &nbsp;&nbsp;
                <input type="radio" id="r" name="Rate2" value="OK"><label>2</label>&nbsp; &nbsp; &nbsp;
                <input type="radio" id="r" name="Rate2" value="AVERAGE"><label>3</label>&nbsp; &nbsp; &nbsp;
                <input type="radio" id="r" name="Rate2" value="GOOD"><label>4</label>&nbsp; &nbsp; &nbsp;
                <input type="radio" id="r" name="Rate2" value="EXCELLENT"><label>5</label>&nbsp; &nbsp; &nbsp;
                <br>

                <!-- Q3 -->
                <li><h4><?php
                            $q = "SELECT Q3 FROM `teacher_event`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q3']}";
                        ?></h4></li>
                <input type="radio" id="r" name="Rate3" value="BAD"><label>1</label><br>
                <input type="radio" id="r" name="Rate3" value="OK"><label>2</label><br>
                <input type="radio" id="r" name="Rate3" value="AVERAGE"><label>3</label><br>
                <input type="radio" id="r" name="Rate3" value="GOOD"><label>4</label><br>
                <input type="radio" id="r" name="Rate3" value="EXCELLENT"><label>5</label><br>
                <br>

                <!-- Q4 -->
                <li><h4><?php
                            $q = "SELECT Q4 FROM `teacher_event`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q4']}";
                        ?></h4></li>
                <input type="radio" id="r" name="Rate4" value="BAD"><label>1</label><br>
                <input type="radio" id="r" name="Rate4" value="OK"><label>2</label><br>
                <input type="radio" id="r" name="Rate4" value="AVERAGE"><label>3</label><br>
                <input type="radio" id="r" name="Rate4" value="GOOD"><label>4</label><br>
                <input type="radio" id="r" name="Rate4" value="EXCELLENT"><label>5</label><br>
                <br>

                <!-- Q5 -->
                <li><h4><?php
                            $q = "SELECT Q5 FROM `teacher_event`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q5']}";
                        ?></h4></li>
                <input type="radio" id="r" name="Rate5" value="BAD"><label>1</label><br>
                <input type="radio" id="r" name="Rate5" value="OK"><label>2</label><br>
                <input type="radio" id="r" name="Rate5" value="AVERAGE"><label>3</label><br>
                <input type="radio" id="r" name="Rate5" value="GOOD"><label>4</label><br>
                <input type="radio" id="r" name="Rate5" value="EXCELLENT"><label>5</label><br>
                <br>

                <!-- Q6 -->
                <li><h4><?php
                            $q = "SELECT Q6 FROM `teacher_event`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q6']}";
                        ?></h4></li>
                <input type="radio" id="r" name="Rate6" value="BAD"><label>1</label><br>
                <input type="radio" id="r" name="Rate6" value="OK"><label>2</label><br>
                <input type="radio" id="r" name="Rate6" value="AVERAGE"><label>3</label><br>
                <input type="radio" id="r" name="Rate6" value="GOOD"><label>4</label><br>
                <input type="radio" id="r" name="Rate6" value="EXCELLENT"><label>5</label><br>
                <br>

                <!-- Q7 -->
                <li><h4><?php
                            $q = "SELECT Q7 FROM `teacher_event`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q7']}";
                        ?></h4></li>
                <input type="radio" id="r" name="Rate7" value="YES"><label>YES</label><br>
                <input type="radio" id="r" name="Rate7" value="NO"><label>NO</label><br>
                <br>

                <!-- Q8 -->
                <li><h4><?php
                            $q = "SELECT Q8 FROM `teacher_event`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q8']}";
                        ?></h4></li>
                <input type="radio" id="r" name="Rate8" value="YES"><label>YES</label><br>
                <input type="radio" id="r" name="Rate8" value="NO"><label>NO</label><br>
                <br>

                <!-- Q9 -->
                <li><h4><?php
                            $q = "SELECT Q9 FROM `teacher_event`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q9']}";
                        ?></h4></li>
                <textarea name="text" rows="5" cols="50"></textarea>
                <br>
                
            </ul>
            <button type="submit" class="btn btn-primary" value="submit">SUBMIT</button>
            <button type="reset" class="btn btn-primary" value="Reset">RESET</button>
            <input type="button"  class="btn btn-primary" value="Print this page" onClick="window.print()">
        </form>
        </div>
    </body>
</html>