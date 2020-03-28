<?php

session_start();
//$username = $_SESSION['uname'];
$con = mysqli_connect('localhost','root');
if($con) {
    // echo "success";
}
$db = mysqli_select_db($con, 'final_year_project');
if($db) {
    // echo "success h1";
}
?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DEMO</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="teacher_event.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body style="background-image:1.jpg;">
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
                <input type="radio" id="r" name="Rate1" value="BAD" onclick="next(this.value)"><label>1</label><br>
                <input type="radio" id="r" name="Rate1" value="OK"><label>2</label><br>
                <input type="radio" id="r" name="Rate1" value="AVERAGE"><label>3</label><br>
                <input type="radio" id="r" name="Rate1" value="GOOD"><label>4</label><br>
                <input type="radio" id="r" name="Rate1" value="EXCELLENT"><label>5</label><br>
                <br>
            </ul>
        </div>
        </form>

        <div id="txtHint"><b>Person info will be listed here...</b></div>

        <script>
        function next(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","<?php
                            $q = "SELECT Q3 FROM `teacher_event`";
                            $result = mysqli_query($con, $q);
                            $desc = mysqli_fetch_assoc($result);                                  
                            // echo $desc;
                            echo "{$desc['Q3']}";
                        ?>",true);
                xmlhttp.send();
            }
        }
        </script>
    </body>
</html>
