<?php

session_start();

$conn = mysqli_connect("localhost","root","","final_year_project");
if($conn) {
    // echo "success";
}
$db = mysqli_select_db($conn, 'final_year_project');
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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body style="background-image=1.jpg">
        <nav style="text-align:center"><h3>Event & Workshop form</h3></nav>

        <div class="container center">
            <form method="POST">
                <ul type="square">
                    <div id="txtHint">
                        <!-- Q1 -->
                        <li><h4><?php
                                    $q = "SELECT Q1 FROM `teacher_event`";
                                    $result = mysqli_query($conn, $q);
                                    $desc = mysqli_fetch_assoc($result);                                  
                                    // echo $desc;
                                    echo "{$desc['Q1']}";
                                ?></h4></li>
                        <input type="radio" id="r" name="Rate1" value="BAD" onclick="next(this.value)"><label>1</label><br>
                        <input type="radio" id="r" name="Rate1" value="OK" onclick="next(this.value)"><label>2</label><br>
                        <input type="radio" id="r" name="Rate1" value="AVERAGE" onclick="next(this.value)"><label>3</label><br>
                        <input type="radio" id="r" name="Rate1" value="GOOD" onclick="next(this.value)"><label>4</label><br>
                        <input type="radio" id="r" name="Rate1" value="EXCELLENT" onclick="next(this.value)"><label>5</label><br>
                    </div>
                </ul>
            </form>
        </div>

        <script>
        function next(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    var xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    var xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","pooja2.php?$j=" + str,true);
                xmlhttp.send();
            }
        }
        </script>
    </body>
</html>
