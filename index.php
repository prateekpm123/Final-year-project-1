<?php

$con = mysqli_connect('localhost','root');
if($con) {
    // echo "sucess";
}
$db = mysqli_select_db($con, 'final_year_project');
if($db) {
    // echo "sucess h1";
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home/First form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- /*
-- INSERT INTO `questions` (`Form Number`, `Version Number`, `Date`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Q7`, `Q8`, `Q9`,`Q10`,`Q11`, `Q12`, `Q13`, `Q14`, `Q15`, `Q16`, `Q17`, 
-- `Q18`, `Q19`,`Q20`,`Q21`, `Q22`, `Q23`, `Q24`, `Q25`, `Q26`, `Q27`, `Q28`, `Q29`,`Q30`,`Q31`, `Q32`, `Q33`, `Q34`, `Q35`, `Q36`, `Q37`, `Q38`, `Q39`,`Q40`,`Q41`, `Q42`, `Q43`, 
-- `Q44`, `Q45`, `Q46`, `Q47`, `Q48`, `Q49`,`Q50`,`Q51`, `Q52`, `Q53`, `Q54`, `Q55`, `Q56`, `Q57`, `Q58`, `Q59`,`Q60`) VALUES
-- ('Form1A', 1, '2020-03-03', 'What is your name?', 'What is your name?', 'What is your name?', 'What is your name?',
-- 'What is your name?', '', '', '', '', '');
*/ -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-md-8 col-lg-6">
            <h2></h2>

            <div class="row form-row">
                <form>

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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">4</label>
                    </div>

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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">4</label>
                    </div>

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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">4</label>
                    </div>                    
                    

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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">4</label>
                    </div>


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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">4</label>
                    </div>


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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">4</label>
                    </div>


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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">4</label>
                    </div>


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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">4</label>
                    </div>       


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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">4</label>
                    </div>


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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">4</label>
                    </div>


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
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                            value="option1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                            value="option2">
                        <label class="form-check-label" for="inlineRadio2">2</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">3</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                            value="option3" >
                        <label class="form-check-label" for="inlineRadio3">4</label>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-lg-3 col-md-2"></div>

    </div>

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