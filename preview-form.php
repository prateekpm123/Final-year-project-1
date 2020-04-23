<!-- ||****************************  This is backend for Preview-form.php  *********************************|| -->
<?php

include('getData.php');

// echo "new file is inclided";
// $counter = $_POST['counter'];


// ###########  Making a connection to the database  #############
// $con = mysqli_connect('localhost','root','');
// mysqli_select_db($con, 'final_year_project');

// if (!$con) {
//   die("Connection failed: " . mysqli_connect_error());
// }

// // echo "Connected successfully";


// // *************************  Getting the QUESTIONS from the table  ******************************
// $questionsArray = "SELECT Questions FROM questions";
// if (mysqli_query($con, $questionsArray)) 
//     {
//     //   echo "<h5>Got the question successfully</h5>";
//     } 
//     else 
//     {
//     //   echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
//     }

// $keys = mysqli_query($con, $questionsArray);


// $yourQuestionArray = array(); // make a new array to hold all your data

// $index = 0;
// while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
//      $yourQuestionArray[$index] = $row;
//      $index++;
// }  

// $yourQuestionArrayCount = count($yourQuestionArray);


// // **********************************  TO EXTRACT OPTIONS  **************************************
// $questionsArray = "SELECT Option1 FROM questions";
// if (mysqli_query($con, $questionsArray)) 
//     {
//     //   echo "<h5>Got the option successfully</h5>";
//     } 
//     else 
//     {
//     //   echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
//     }

// $keys = mysqli_query($con, $questionsArray);


// $option1 = array(); // make a new array to hold all your data

// $index = 0;
// while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
//      $option1[$index] = $row;
//      $index++;
// }  

// // ************************  Extracting Option 2  **********************************
// $questionsArray = "SELECT Option2 FROM questions";
// if (mysqli_query($con, $questionsArray)) 
//     {
//     //   echo "<h5>Got the option2 successfully</h5>";
//     } 
//     else 
//     {
//     //   echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
//     }

// $keys = mysqli_query($con, $questionsArray);


// $option2 = array(); // make a new array to hold all your data

// $index = 0;
// while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
//      $option2[$index] = $row;
//      $index++;
// }  

// // ************************  Extracting Option 3  **********************************
// $questionsArray = "SELECT Option3 FROM questions";
// if (mysqli_query($con, $questionsArray)) 
//     {
//     //   echo "<h5>Got the Option3 successfully</h5>";
//     } 
//     else 
//     {
//     //   echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
//     }

// $keys = mysqli_query($con, $questionsArray);


// $option3 = array(); // make a new array to hold all your data

// $index = 0;
// while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
//      $option3[$index] = $row;
//      $index++;
// } 

// // ************************  Extracting Option 4  **********************************

// $questionsArray = "SELECT Option4 FROM questions";
// if (mysqli_query($con, $questionsArray)) 
//     {
//     //   echo "<h5>Got the Option4 successfully</h5>";
//     } 
//     else 
//     {
//     //   echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
//     }

// $keys = mysqli_query($con, $questionsArray);


// $option4 = array(); // make a new array to hold all your data

// $index = 0;
// while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
//      $option4[$index] = $row;
//      $index++;
// } 

// // ************************  Extracting Option 5  **********************************

// $questionsArray = "SELECT Option5 FROM questions";
// if (mysqli_query($con, $questionsArray)) 
//     {
//     //   echo "<h5>Got the Option5 successfully</h5>";
//     } 
//     else 
//     {
//     //   echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
//     }

// $keys = mysqli_query($con, $questionsArray);


// $option5 = array(); // make a new array to hold all your data

// $index = 0;
// while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
//      $option5[$index] = $row;
//      $index++;
// } 

// $option1Json = json_encode($option1);
// echo '<pre>'; print_r($option1); echo '</pre>';   // This part prints the whole arrays structure in a formatted way
 
// ********** printing these values in the #hiddenDisplay Tag ***************

// echo '<div id="questionIs">'.json_encode($yourQuestionArray).'</div>';
// echo '<div id="questionCountIs">'.$yourQuestionArrayCount.'</div>';
// echo '<textarea id="option1" class="multipleChoiceOption">'.$option1Json.'</textarea>';
// echo '<div id="option2" class="multipleChoiceOption">'.json_encode($option2).'</div>';
// echo '<div id="option3" class="multipleChoiceOption">'.json_encode($option3).'</div>';
// echo '<div id="option4" class="multipleChoiceOption">'.json_encode($option4).'</div>';
// echo '<div id="option5" class="multipleChoiceOption">'.json_encode($option5).'</div>';



// ********** Trying to add a DOM element through php **************
// $div = $dom->createElement($addElement);//Create new <br> tag
// $dom->appendChild($div);//Add the style tag to document

// echo '</br>';

// if(isset($option1 == ""))
// {
//     echo "<p class="known">1</p>";
//     alert('its a longanswer');
// }
// else {
//     echo "<p class="known">2</p>";
//     alert('its a multiple choice');
// }


// echo '<pre>'; print_r($option2); echo '</pre>';
// $isAlreadyThere = 0;
// This is how we'll get the values of 
// for( $i=0; $i < count($yourQuestionArray); $i++ )/
// {


  

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
    <link rel="stylesheet" href="preview-form.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

 
</head>

<body onload="fetchData()">
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-header">
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
                <li class="nav-item dropdown" id="user_dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Admin panel
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="dropdown">
                        <a class="dropdown-item" href="web/index.php">Stats</a>
                        <a class="dropdown-item" href="admin-control.html">Forms creation</a>
                        <a class="dropdown-item" href="#">Something else here</a>
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
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav> -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 upperSpace"></div>
        </div>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 centerStuff" id="mainDisplayArea">
                <div id="display">
                    <div class="questions" id="questionArea">
                        <h1 id="intro">Welcome</h1>
                    </div>
                    <div id="answerArea" class="0">
                        
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" id="next" onclick="displayNext()">Next</button>
                    <!-- <button class="btn btn-primary" id="next" onclick="displayBack()">back</button> -->

                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <div class="row">
            <div class="col-12 upperSpace"></div>
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
    <script src="admin-control-form.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="jquery-ui-1.12.1.custom/external/jquery/jquery.js"></script>
    <script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
    <script src="preview-form1.js"></script>
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
        // include("getData.php");
        	
        q_no = <?php echo json_encode($q_no_Array)?>;
        questionArray = <?php echo json_encode($yourQuestionArray)?>;
        questionArrayCount = <?php echo $yourQuestionArrayCount  ?>;
        // alert('asdfsaf '+questionArray);
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
            q_no : q_no,
            questionArrayCount : questionArrayCount
        };

        
        // alert(globalVariable.option1);


    </script>      

</body>

</html>