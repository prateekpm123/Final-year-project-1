<?php
session_start();
// $username = $_SESSION['uname'];
include("mydb.php");
include("getData.php");

// $con = mysqli_connect('localhost','root');
// if($con) {
//     // echo "sucess";
// }
// $db = mysqli_select_db($con, 'final_year_project');
// if($db) { 
//     // echo "sucess h1";
// }
// include_once("mydb.php");
// if (isset($_POST['submit']))
// {   
    // $Q1 =$_POST['question'];
    // // $query = "INSERT INTO `questions` (`Q1`) VALUES ('$Q1') WHERE `Form Number`='Form2'";
    // $query = "UPDATE `questions` SET `Q2`='$Q1' WHERE `Form Number`='Form2'";
    
    // // UPDATE `questions` SET `Q1`=$Q1 WHERE `Form Number`='Form2';
    // $query_run = mysqli_query($con, $query);
    // if($query_run)
    // {
    //     // echo "done";
    // }
    // else  
    // { 
    //     error_reporting(E_ALL);
    //     ini_set('display_errors', 1);
    // }
// } 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.min.css">
    <link href="jquery-ui-1.12.1.custom/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="form_creation.css">

</head>

<body onload="getTheQuestionCount()">
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
                <!-- <li class="nav-item">
                    <a class="nav-link" href="forms.php">Forms </a>
                </li> -->
                <li class="nav-item dropdown" id="user_dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin panel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdown">
                        <a class="dropdown-item" href="web/index.php">Stats</a>
                        <a class="dropdown-item" href="admin-control.php">Forms creation</a>
                        <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>
                <li class="nav-item dropdown" id="user_dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) 
                            {
                                // echo "$username"; 
                                echo $_SESSION['uname'];
                            } 
                            else 
                            {
                                echo "Please log in first to see this page.";
                            }
                        ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdown">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li> -->
            </ul>
        </div>
    </nav>
    <div class="row mainBody"> 
        <div class="col-lg-6 left-side">
            <div class="addingQuestionBody">
                <div id="form-page1">
                    <div id="getDataContent">
                        
                    </div>
                    <!-- <div class="question-set" id="questionset0">
                        <textarea name="question" placeholder="Enter the questions..." id="Q0"
                            cols="30" rows="2" style="overflow:hidden"
                            onkeyup="AutoGrowTextArea(this)" onkeydown="AutoShrinkArea(this)"
                            class="questionarea questionsetComponents0 questionsetComponents1">
                        </textarea>         
                    </div> -->
                    <!-- <div class="options-set" id="optionset0">
                        <div class="row option-setrow" id="optionsetrow0">
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xm-2" id="optionCol-1-0">
                                <button id="sub0" class="btn btn-secondary savebtn" onclick="ajaxToSave(this.id)"> Save</button>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xm-2" id="optionCol-2-0">
                                Add the new id 'result0' in the backend
                                <span id="result0"></span>
                                
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5 col-xm-5" id="optionCol-3-0">
                                <button style="display:none;" class="btn btn-primary options0" onclick="addMultipleChoice(this.className)" id="createMultipleChoice">Add Multiple choice</button>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xm-1" id="optionCol-4-0">
                                <div class="input-group-prepend" id="optionbtns0">
                                    <button class="btn btn-outline-secondary dropdown-toggle optionbtn-toggle" 
                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">+</button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item options0"
                                            onclick="createMultipleChoice(this.className)">Multiple
                                            choice</button>
                                        <button class="dropdown-item options0" href="#">Ratings</button>
                                        <button class="dropdown-item options0"
                                            onclick="createLongAnswer(this.className)">Long
                                            Answer</button>
                                        <button class="dropdown-item options0">Short
                                            Answer</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-1 col-md-1 col-sm-1 col-xm-1" id="optionCol-5-0">
                                <div class="input-group-prepend">
                                    <button class="btn btn-outline-secondary dropdown-toggle optionbtn-toggle" type="button"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">Del</button>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item extraOptions0" >Delete Choice</button>
                                        <button class="dropdown-item extraOptions0">Another action</button>
                                        <button class="dropdown-item extraOptions0">Something else here</button>
                                        <div role="separator" class="dropdown-divider"></div>
                                        <button class="dropdown-item extraOptions0">Separated link</button>
                                    </div>
                                </div>
                            </div>  
                            
                        </div>     
                    </div> -->
                    
                    <!-- <div id="optionsarea" class="optionsareaclass">
                        <button class="options optionbtns">Options</button>
                        <button class="options optionbtns">Ratings</button>
                        <button class="options optionbtns">Answers</button>
                    </div> -->
                </div>
                <!-- <button id="create" onclick="create(1,0)" class="btn btn-primary">Create</button> -->
                
                <div class="d-flex justify-content-start">
                    <button id="delete" onclick="deleted()" class="btn btn-secondary">Deleted</button>

                </div>
                <!-- <div class="d-flex justify-content-end"> -->
                    <div class="input-group-prepend" id="optionbtns0">
                        <button class="btn btn-outline-secondary dropdown-toggle optionbtn-toggle" 
                            type="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Create</button>
                        <div class="dropdown-menu">
                            <button class="dropdown-item options0"
                                onclick="create(this.className,this.id);insertQuestion(this.id);" id="1">Multiple
                                choice</button>
                            <button class="dropdown-item options0" id="2">Ratings</button>
                            <button class="dropdown-item options0"
                                onclick="create(this.className,this.id);insertQuestion(this.id);" id="3">Long
                                Answer</button>
                            <button class="dropdown-item options0" id="4">Short
                                Answer</button>
                        </div>  
                    </div>
                <!-- </div> -->
            </div>


        </div>
        <div class="col-lg-6 right-side " id="display">
            <a class="btn primary" href="preview-form.php">Preview your form</a>
            <div id="display2"></div>
             <?php
                // $q = "SELECT Q1 FROM `questions` WHERE `Form Number`='Form2'";
                // $result = mysqli_query($con, $q);
                // $desc = mysqli_fetch_assoc($result);
                // include_once("preview-form.php");
            ?>
            <h5 class="question_display">
                <?php 
                    // while($rows = mysqli_fetch_assoc($result))
                    // {
                        // if(is_null())
                    // }
                    // echo "{$result}"; 
                    // echo "{$desc['Q1']}"; 
                ?>
            </h5>
            <?php
                // $q = "SELECT Q2 FROM `questions` WHERE `Form Number`='Form2'";
                // SELECT Q2 FROM `questions` WHERE `Form Number`="Form2"
                // $result = mysqli_query($con, $q);
                // $desc = mysqli_fetch_assoc($result);
            ?>
            <h5>
                <?php
                    // echo "{$desc['Q2']"; 
                ?>
            </h5> 
        </div>
    </div>
    <div class="pop">
        <div class="row">
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

    <!--  ###### Jquery libraries ##### -->
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="form_creation.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="form_creation.js"></script>
    <!-- <script src="admin-control.js"></script> -->

    <?php 
    // include("getData.php");
                
    ?>
    <script>

        // formIdIs = localStorage.getItem("myId");
        // alert("the value recieved is " + formIdIs);
        // $.ajax({
        //     url: "getData.php",
        //     type: "post",
        //     data: {
        //         formId: formIdIs,
        //     },
        //     success: function (data, status) {
        //     // console.log(data);
        //     // $("#display").html(data);

        //     },
        // });

        q_no = <?php echo json_encode($q_no_Array)?>;
        questionArray = <?php echo json_encode($yourQuestionArray)?>;
        alert(questionArray);
        option1 = <?php echo json_encode($option1)?>;
        option2 = <?php echo json_encode($option2)?>;
        option3 = <?php echo json_encode($option3)?>;
        option4 = <?php echo json_encode($option4)?>;
        option5 = <?php echo json_encode($option5)?>; 
        var globalVariable = {
            questionArray : questionArray,
            option1 : option1,
            option2 : option2,
            option3 : option3,
            option4 : option4,
            option5 : option5,
            q_no : q_no
        };

        
        // alert(globalVariable.x);


    </script>                   

</body>

</html>