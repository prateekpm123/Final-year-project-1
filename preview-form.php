<!-- ||****************************  This is backend for Preview-form.php  *********************************|| -->
<?php

// $counter = $_POST['counter'];


// ###########  Making a connection to the database  #############
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'final_year_project');

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";


// *************************  Getting the QUESTIONS from the table  ******************************
$questionsArray = "SELECT Questions FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      echo "<h5>Got the question successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$yourQuestionArray = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $yourQuestionArray[$index] = $row;
     $index++;
}  

$yourQuestionArrayCount = count($yourQuestionArray);


// **********************************  TO EXTRACT OPTIONS  **************************************
$questionsArray = "SELECT Option1 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      echo "<h5>Got the option successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option1 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option1[$index] = $row;
     $index++;
}  

// ************************  Extracting Option 2  **********************************
$questionsArray = "SELECT Option2 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      echo "<h5>Got the option2 successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option2 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option2[$index] = $row;
     $index++;
}  

// ************************  Extracting Option 3  **********************************
$questionsArray = "SELECT Option3 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      echo "<h5>Got the Option3 successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option3 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option3[$index] = $row;
     $index++;
} 

// ************************  Extracting Option 4  **********************************

$questionsArray = "SELECT Option4 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      echo "<h5>Got the Option4 successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option4 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option4[$index] = $row;
     $index++;
} 

// ************************  Extracting Option 5  **********************************

$questionsArray = "SELECT Option5 FROM questions";
if (mysqli_query($con, $questionsArray)) 
    {
      echo "<h5>Got the Option5 successfully</h5>";
    } 
    else 
    {
      echo "Error: " . $questionsArray . "<br>" . mysqli_error($con);
    }

$keys = mysqli_query($con, $questionsArray);


$option5 = array(); // make a new array to hold all your data

$index = 0;
while($row = mysqli_fetch_assoc($keys)){ // loop to store the data in an associative array.
     $option5[$index] = $row;
     $index++;
} 

$option1Json = json_encode($option1);
// echo '<pre>'; print_r($option1); echo '</pre>';   // This part prints the whole arrays structure in a formatted way
 
// ********** printing these values in the #hiddenDisplay Tag ***************

echo '<div id="questionIs">'.json_encode($yourQuestionArray).'</div>';
echo '<div id="questionCountIs">'.$yourQuestionArrayCount.'</div>';
echo '<textarea id="option1" class="multipleChoiceOption">'.$option1Json.'</textarea>';
echo '<div id="option2" class="multipleChoiceOption">'.json_encode($option2).'</div>';
echo '<div id="option3" class="multipleChoiceOption">'.json_encode($option3).'</div>';
echo '<div id="option4" class="multipleChoiceOption">'.json_encode($option4).'</div>';
echo '<div id="option5" class="multipleChoiceOption">'.json_encode($option5).'</div>';



// ********** Trying to add a DOM element through php **************
// $div = $dom->createElement($addElement);//Create new <br> tag
// $dom->appendChild($div);//Add the style tag to document

echo '</br>';

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

<body onload="saveTheValues()">
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
    <script src="preview-form.js"></script>

    <script>
        let questionArray;
        let questionArrayCount;
        let option1;
        let option2;
        let option3;
        let option4;
        let option5;
        let count = 0;
        let pressedCount = 0;

        function saveTheValues() {
            questionArray = <?php echo json_encode($yourQuestionArray)?>;
            questionArrayCount = questionArray.length;

            option1 = <?php echo json_encode($option1)?>;
                        
            // console.log('option1s 2nd value',option1[1].Option1);
            // $('#hiddenDisplay').html(option1[0].Option1);
            // document.write(" <h1>"+ option1 +"</h1> ");
            option2 = <?php echo json_encode($option2)?>;
            option3 = <?php echo json_encode($option3)?>;
            option4 = <?php echo json_encode($option4)?>;
            option5 = <?php echo json_encode($option5)?>; 

            // alert(option2[1].Option2);

        }


        function displayBack() {
            pressedCount++;
            console.log('In display Next count is ',count);

            // This count 1 is to place near the id attribute so that those id's start from 1;
            count1 = count + 1;
            console.log('In display Next count1 is ',count1);


            // // This check wheather what we are giving is a textarea or an Option
            // let whichOption = $('#answerArea').attr('class');
            // // alert("which option is "+whichOption);
            // let ans;
            // if(whichOption == 1)
            // {
            //     ans = saveAnswer(count);
            // }
            // else {
            //     ans = saveOption(count);
            //     // alert('not a textarea');
            // }

            // if( ans == 1){
                deleteCurrent();
            // }
            // count--;

            // // $("#display").append('<div class="questions" id="questionArea"></div>');
            if(pressedCount % 2 == 1)
            {
                count = count -2;
                alert('pressed once');
            }
            else {
                count = count -1;
                alert('pressed twice');
            }
            // ********************* Appending the questions over here *********************
            $("#questionArea").append('<p class="para" id="' + count1 + '">' + questionArray[count].Questions + '</p>');
            // alert("option is"+questionArray[count].Option1);
            

            // ************** Appending the Options over here !!! *********************
            
            let option1Len = option1[count].Option1; 
            let option2Len = option2[count].Option2; 
            let option3Len = option3[count].Option3; 
            let option4Len = option4[count].Option4; 
            let option5Len = option5[count].Option5; 
            
            // console.log("option1Len is ",option1Len);
            if(count <= questionArrayCount)
            {
                if(option1[count].Option1 == 0)
                {        
                    $('#answerArea').append('<textarea name="" class="" id="T' + count1 + '" cols="30" rows="3"></textarea>')
                    $('#answerArea').attr("class","1");

                }
                else if(option1[count].Option1 != 0)
                {
                    console.log('in 1st else if condition');
                    $('#answerArea').attr("class","2");
                    if(option1[count].Option1 != 0)
                    {
                        console.log('in 1st else-if\'s 1st condition');
                        $('#answerArea').append('<input type="checkbox" id="optionArea1' + count1 + '" name="optionArea1' + count1 + '" value="1" class="align-left"> <label class="align-left" for="optionArea1' + count1 + '" id="optionLabel1' + count1 + '" >'+ option1[count].Option1 +'</label> <br id="tag">');
                        
                    }
                    else {}
                    if(option2[count].Option2 != 0)
                    {

                        $('#answerArea').append('<input type="checkbox" id="optionArea2' + count1 + '" name="optionArea2' + count1 + '" value="2" class="align-left"> <label class="align-left" for="optionArea2' + count1 + '" id="optionLabel2' + count1 + '" >'+ option2[count].Option2 +'</label> <br id="tag">');
                        
                    }
                    else {}
                    if(option3[count].Option3 != 0)
                    {

                        $('#answerArea').append('<input type="checkbox" id="optionArea3' + count1 + '" name="optionArea3' + count1 + '" value="3" class="align-left"> <label class="align-left" for="optionArea3' + count1 + '" id="optionLabel3' + count1 + '" >'+ option3[count].Option3 +'</label> <br id="tag">');
                        
                    }
                    else {}
                    if(option4[count].Option4 != 0)
                    {

                        $('#answerArea').append('<input type="checkbox" id="optionArea4' + count1 + '" name="optionArea4' + count1 + '" value="4" class="align-left"> <label class="align-left" for="optionArea4' + count1 + '" id="optionLabel4' + count1 + '" >'+ option4[count].Option4 +'</label> <br id="tag">');
                        
                    }
                    else {}
                    if(option5[count].Option5 != 0)
                    {

                        $('#answerArea').append('<input type="checkbox" id="optionArea5' + count1 + '" name="optionArea5' + count1 + '" value="5" class="align-left"> <label class="align-left" for="optionArea5' + count1 + '" id="optionLabel5' + count1 + '" >'+ option5[count].Option5 +'</label> <br id="tag">');
                        
                    }
                    else {}
                }
            }
            else 
            {   
                alert('in the big else')
                $('#answerArea').append('<h1>Thank You</h1>');
                $('#next').remove();
            }
            


        }

        function displayNext() {
            console.log('In display Next count is ',count);

            // This count 1 is to place near the id attribute so that those id's start from 1;
            count1 = count + 1;
            console.log('In display Next count1 is ',count1);


            // This check wheather what we are giving is a textarea or an Option
            let whichOption = $('#answerArea').attr('class');
            // alert("which option is "+whichOption);
            let ans;
            if(whichOption == 1)
            {
                ans = saveAnswer(count);
            }
            else {
                ans = saveOption(count);
                // alert('not a textarea');
            }

            if( ans == 1){
                deletePrevious();
            }

            // $("#display").append('<div class="questions" id="questionArea"></div>');
            
            // ********************* Appending the questions over here *********************
            $("#questionArea").append('<p class="para" id="' + count1 + '">' + questionArray[count].Questions + '</p>');
            // alert("option is"+questionArray[count].Option1);
            

            // ************** Appending the Options over here !!! *********************
            
            let option1Len = option1[count].Option1; 
            let option2Len = option2[count].Option2; 
            let option3Len = option3[count].Option3; 
            let option4Len = option4[count].Option4; 
            let option5Len = option5[count].Option5; 
            
            // console.log("option1Len is ",option1Len);
            if(count <= questionArrayCount)
            {
                if(option1[count].Option1 == 0)
                {        
                    $('#answerArea').append('<textarea name="" class="" id="T' + count1 + '" cols="30" rows="3"></textarea>')
                    $('#answerArea').attr("class","1");

                }
                else if(option1[count].Option1 != 0)
                {
                    console.log('in 1st else if condition');
                    $('#answerArea').attr("class","2");
                    if(option1[count].Option1 != 0)
                    {
                        console.log('in 1st else-if\'s 1st condition');
                        $('#answerArea').append('<input type="checkbox" id="optionArea1' + count1 + '" name="optionArea1' + count1 + '" value="1" class="align-left"> <label class="align-left" for="optionArea1' + count1 + '" id="optionLabel1' + count1 + '" >'+ option1[count].Option1 +'</label> <br id="tag">');
                        
                    }
                    else {}
                    if(option2[count].Option2 != 0)
                    {

                        $('#answerArea').append('<input type="checkbox" id="optionArea2' + count1 + '" name="optionArea2' + count1 + '" value="2" class="align-left"> <label class="align-left" for="optionArea2' + count1 + '" id="optionLabel2' + count1 + '" >'+ option2[count].Option2 +'</label> <br id="tag">');
                        
                    }
                    else {}
                    if(option3[count].Option3 != 0)
                    {

                        $('#answerArea').append('<input type="checkbox" id="optionArea3' + count1 + '" name="optionArea3' + count1 + '" value="3" class="align-left"> <label class="align-left" for="optionArea3' + count1 + '" id="optionLabel3' + count1 + '" >'+ option3[count].Option3 +'</label> <br id="tag">');
                        
                    }
                    else {}
                    if(option4[count].Option4 != 0)
                    {

                        $('#answerArea').append('<input type="checkbox" id="optionArea4' + count1 + '" name="optionArea4' + count1 + '" value="4" class="align-left"> <label class="align-left" for="optionArea4' + count1 + '" id="optionLabel4' + count1 + '" >'+ option4[count].Option4 +'</label> <br id="tag">');
                        
                    }
                    else {}
                    if(option5[count].Option5 != 0)
                    {

                        $('#answerArea').append('<input type="checkbox" id="optionArea5' + count1 + '" name="optionArea5' + count1 + '" value="5" class="align-left"> <label class="align-left" for="optionArea5' + count1 + '" id="optionLabel5' + count1 + '" >'+ option5[count].Option5 +'</label> <br id="tag">');
                        
                    }
                    else {}
                }
            }
            else 
            {   
                alert('in the big else')
                $('#answerArea').append('<h1>Thank You</h1>');
                $('#next').remove();
            }
            

            count++;

        }

        function deletePrevious() {
            // alert('in delete');
            previousCount = count;
            $('#intro').remove();
            previousParaCountId = "#" + previousCount;
            previousTextareaCountId = "#T"+ previousCount;

            previousOption1CountId = "#optionArea1"+ previousCount; 
            previousOption2CountId = "#optionArea2"+ previousCount; 
            previousOption3CountId = "#optionArea3"+ previousCount; 
            previousOption4CountId = "#optionArea4"+ previousCount; 
            previousOption5CountId = "#optionArea5"+ previousCount; 

            previousOptionLabel1CountId = "#optionLabel1"+ previousCount; 
            previousOptionLabel2CountId = "#optionLabel2"+ previousCount; 
            previousOptionLabel3CountId = "#optionLabel3"+ previousCount; 
            previousOptionLabel4CountId = "#optionLabel4"+ previousCount; 
            previousOptionLabel5CountId = "#optionLabel5"+ previousCount; 



            $(previousParaCountId).remove();
            $(previousTextareaCountId).remove();


            $(previousOption1CountId).remove();
            $(previousOption2CountId).remove();
            $(previousOption3CountId).remove();
            $(previousOption4CountId).remove();
            $(previousOption5CountId).remove();

            $(previousOptionLabel1CountId).remove();
            $(previousOptionLabel2CountId).remove();
            $(previousOptionLabel3CountId).remove();
            $(previousOptionLabel4CountId).remove();
            $(previousOptionLabel5CountId).remove();
            
            for ( let i=0; i<5; i++)
            {
                $('#tag').remove();    
            }         

        }

        function deleteCurrent() {
            // alert('in delete');
            count;
            previousCount = count;
            $('#intro').remove();
            previousParaCountId = "#" + previousCount;
            previousTextareaCountId = "#T"+ previousCount;

            previousOption1CountId = "#optionArea1"+ previousCount; 
            previousOption2CountId = "#optionArea2"+ previousCount; 
            previousOption3CountId = "#optionArea3"+ previousCount; 
            previousOption4CountId = "#optionArea4"+ previousCount; 
            previousOption5CountId = "#optionArea5"+ previousCount; 

            previousOptionLabel1CountId = "#optionLabel1"+ previousCount; 
            previousOptionLabel2CountId = "#optionLabel2"+ previousCount; 
            previousOptionLabel3CountId = "#optionLabel3"+ previousCount; 
            previousOptionLabel4CountId = "#optionLabel4"+ previousCount; 
            previousOptionLabel5CountId = "#optionLabel5"+ previousCount; 



            $(previousParaCountId).remove();
            $(previousTextareaCountId).remove();


            $(previousOption1CountId).remove();
            $(previousOption2CountId).remove();
            $(previousOption3CountId).remove();
            $(previousOption4CountId).remove();
            $(previousOption5CountId).remove();

            $(previousOptionLabel1CountId).remove();
            $(previousOptionLabel2CountId).remove();
            $(previousOptionLabel3CountId).remove();
            $(previousOptionLabel4CountId).remove();
            $(previousOptionLabel5CountId).remove();
            
            for ( let i=0; i<5; i++)
            {
                $('#tag').remove();    
            }         

        }

        // This saves the answer in the database fetched from the textarea ?
        function saveAnswer(count) {
            let count1 = count + 1;
            let textareaId = "#T"+count;
            let answer = $(textareaId).val();
            // alert('answer is '+answer);
            // alert('in saveData');
            $.ajax({
                url: "saveAnswer.php",
                type: "post",
                data: {
                    counter: count,
                    answer: answer

                },
                success: function (data, status) {
                    // console.log(data);
                    // alert(noOfRows);
                    $("#results").html(data);   
                    // alert(status);

                }
            });
            // deletePrevious();
            return 1;
        }

        function saveOption(count) {
            let count1 = count + 1;
            let textareaId = "#T"+count;
            let answer = $(textareaId).val();
            var val = [];
            $(':checkbox:checked').each(function (i) {
                val[i] = $(this).val();
            });
            // alert('options answer is '+ val);
            // alert('in saveData');
            $.ajax({
                url: "saveAnswer.php",
                type: "post",
                data: {
                    counter: count,
                    answer: val

                },
                success: function (data, status) {
                    // console.log(data);
                    // alert(noOfRows);
                    $("#results").html(data);
                    // alert(status);

                }
            });
            // deletePrevious();
            return 1;
        }

        // function saveOption(counter) {
        //     alert('in save option');
        //     var val = [];
        //     $(':checkbox:checked').each(function (i) {
        //         val[i] = $(this).val();
        //     });

        //     alert('value of checkbox is '+val);

            
        // }


    </script>

</body>

</html>