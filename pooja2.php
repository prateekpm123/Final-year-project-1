<?php
$j = intval($_GET['j']);

//getting data from database
$conn = mysqli_connect("localhost","root","","final_year_project");

if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

mysqli_select_db($conn,"pooja.php");

if (isset($_POST['#r']))
{   
    $Q1 =$_POST['Rate1'];
    
    $query = "INSERT INTO `teachers_answers` (`Q1`) VALUES ('$Q1')";

    $query_run = mysqli_query($com=nn, $query);
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
<html>
<body>
<ul type="square">
    <!-- Q -->
    <li><h4><?php
                $q = "SELECT Q2 FROM `teacher_event`";
                $result = mysqli_query($conn, $q);
                $desc = mysqli_fetch_assoc($result);                                  
                // echo $desc;
                echo "{$desc['Q2']}";
            ?></h4></li>
    <input type="radio" id="r" name="Rate2" value="BAD"><label>1</label><br>
    <input type="radio" id="r" name="Rate2" value="OK"><label>2</label><br>
    <input type="radio" id="r" name="Rate2" value="AVERAGE"><label>3</label><br>
    <input type="radio" id="r" name="Rate2" value="GOOD"><label>4</label><br>
    <input type="radio" id="r" name="Rate2" value="EXCELLENT"><label>5</label><br>
    <br>
</ul>

<?php
mysqli_close($conn);
?>
</body>
</html>