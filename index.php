<?php
// ######## Code to check USER IS LOGGED IN OR NOT #########

// if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == TRUE) 
// {
    session_start();
//    $username = $_SESSION['uname']; 
// }
// if((isset($_SESSION['loggedin'])))
// {
//     if($_SESSION['loggedin'] == TRUE)
//     {   
        // session_start();
        // $username = $_SESSION['uname']; 
//     }
//     else
//     { 
//         echo "not working";
//     }
        
// }
//     // echo "$username";

// else 
// {
//     echo "not working";
// }

// if ( is_user_logged_in() ) {
//     // your code for logged in user 
//     session_start();
//     $username = $_SESSION['uname']; 
//     echo "$username";    
// } else {
//    // your code for logged out user 
//    echo "not working";
// }

// echo "$username";
                       
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
    <link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.min.css">
    <link href="jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php

        include_once('C:/xampp/htdocs/Final Year Project/Final-year-project-1/includes/Navbar.php');

    ?>
    <!-- <div class="container-fluid">  -->
    <div class="row">
        <div class="col-lg-6 col-md-12 left-side" id="left-sideid">
            <div class="row">
                <div class="col"></div>
                <div class="col-10 item">
                    <input type="text" id="filterInput" placeholder="Search forms here ..." class="searchs-box"
                        onmouseover="inputgrab()" onmouseout="make_normal()">
                        <ul id="names" class="collection with-header">
                            <!-- <li class="collection-header">
                                <h5>Admission</h5>
                            </li> -->
                            <li class="collection-item">
                                <a href="teacherform.php">
                                    Teacher review on infrastructure
                                </a>
                            </li>
                            <li class="collection-item">
                                <a href="Teacher_event.php">
                                    Teacher review on event
                                </a>
                            </li>
                            <li class="collection-item">
                                <a href="#">Admission process was not proper</a>
                            </li>
                            <li class="collection-item">
                                <a href="#">There was a non refund during the admission process</a>
                            </li>
                            <li class="collection-item">
                                <a href="#">Anna</a>
                            </li>
                            <!-- <li class="collection-header">
                                <h5>University</h5>
                            </li> -->
                            <li class="collection-item">
                                <a href="#">
                                    I wanna make a about complaint about the paper correction of the University, I made
                                    a
                                </a>
                            </li>
                            <li class="collection-item">
                                <a href="#">University delayed timetable</a>
                            </li>
                            <!-- <li class="collection-header">
                                <h5>B</h5>
                            </li> -->
                            <li class="collection-item">
                                <a href="#">College is unfair with the attendence</a>
                            </li>
                            <li class="collection-item">
                                <a href="#">Bill</a>
                            </li>
                            <li class="collection-item">
                                <a href="#">Bob</a>
                            </li>
                            <li class="collection-item">
                                <a href="#">Brad</a>
                            </li>
                            <!-- <li class="collection-header">
                                <h5>C</h5>
                            </li> -->
                            <li class="collection-item">
                                <a href="#">Carrie</a>
                            </li>
                            <li class="collection-item">
                                <a href="#">Cathy</a>
                            </li>
                            <li class="collection-item">
                                <a href="#">Courtney</a>
                            </li>
                        </ul>
                </div>
                <div class="col"></div>
            </div>

        </div>
        <div class="col-lg-6 col-md-12 right-side" id="right-sideid">
            <div>
                <h3>On Institute</h3>
                <h4>Recent Forms</h4>
                <div>
                    <a href="teacherform.php">
                        <li class="accordion-list">Teacher Review on Infra-structure</li>
                    </a>
                    <a href="Teacher_event.php">
                        <li class="accordion-list">Teacher review on events</li>
                    </a>
                    <!-- <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a>
                    <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a> -->
                </div>


                <h3>On Department</h3>
                <h4>Recent Forms</h4>
                <div>
                    <!-- <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a>
                    <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a>
                    <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a>
                    <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a> -->
                </div>
                <h3>On Teacher</h3>
                <div>
                    <!-- <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a>
                    <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a>
                    <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a>
                    <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a> -->
                </div>
                <h3>On Students</h3>
                <div>
                    <!-- <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a>
                    <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a>
                    <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a>
                    <a href="teacherform.php">
                        <li class="accordion-list">Teacher Form</li>
                    </a> -->
                </div>

            </div>
            <!-- <div class="side-menu">
                    <ul id="verticalmenu">
                        <li><a href="">Rome</a>
                            <ul>
                                <li><a href="">Early</a></li>
                                <li><a href="">Middle</a></li>
                                <li><a href="">late</a></li>
                            </ul>
                        </li>
                        <li><a href="">Italy</a>
                            <ul>
                                <li><a href="">Early</a></li>
                                <li><a href="">Middle</a></li>
                                <li><a href="">late</a></li>
                            </ul>
                        </li>
                        <li><a href="">Greece</a>
                            <ul>
                                <li><a href="">Early</a></li>
                                <li><a href="">Middle</a></li>
                                <li><a href="">late</a></li>
                            </ul>
                        </li>
                    </ul>
                </div> -->
        </div>
    </div>
    <!-- </div>  -->

    <!-- ##### Bootstrap libraries ##### -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <!--  ###### Jquery libraries ##### -->
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="main.js"></script>
    <script>
        $("#accordion").accordion({
            active: 0
        }, {
            heighStyle: "content"
        });

        function inputgrab() {
            $(".right-side").hide();
            $(".right-side").fadeOut("slow");
            $("#right-sideid").removeClass("col-lg-6");
            $("#right-sideid").removeClass("col-md-12");
            $("#left-sideid").removeClass("col-lg-6");
            $("#left-sideid").removeClass("col-md-6");
            $("#right-sideid").addClass("col-lg-12");
            $("#right-sideid").addClass("col-md-12");
        }

        function make_normal() {
            $(".right-side").show();
            $(".right-side").fadeIn("slow");
            $("#right-sideid").addClass("col-lg-6");
            $("#right-sideid").addClass("col-md-12");
            $("#left-sideid").addClass("col-lg-6");
            $("#left-sideid").addClass("col-md-6");
            $("#right-sideid").removeClass("col-lg-12");
            $("#right-sideid").removeClass("col-md-12");
        }
        // $("#verticalmenu").menu();
    </script>
</body>

</html>