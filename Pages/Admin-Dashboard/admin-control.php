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
    <link rel="stylesheet" href="admin-control.css">

</head>

<body>

    <?php

        include_once('C:/xampp/htdocs/Final Year Project/Final-year-project-1/includes/Navbar.php');

    ?>
    <div class="row">
        <div class="col-lg-2 col-sm-2 col-xm-2 left-side">
            <h4> Workspace</h4>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="" role="tab" aria-controls="" aria-selected="true">Teacher's form</a>

              <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="" role="tab" aria-controls="" aria-selected="false">Students Form</a>

              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="" role="tab" aria-controls="" aria-selected="false">Parent's form</a>
            </div>
        </div>

        <div class="col-lg-10 col-sm-10 right-side"> 
            <div class="" id="display">

            </div>
            <div class="row" id="cardArea">
                <!-- <div id="cardArea"> -->                

                    <!-- <div class="col-lg-2 col-md-3 card-col-4"> -->
                        <div class="my-card newcard">
                            <div class="my-card-body">
                                <p class="new"><a href="#" onclick="newcard();insertTheFormDetails();">+ New</a></p>
                            </div>
                        </div>
                    <!-- </div> -->
                <!-- </div> -->
                
            </div> 

            <h5 class="pooja"><i>Versions</i></h5>
            <hr>
            <iframe class="iframe" src="teacher_version.html" height="400" width="1000"></iframe>
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
    <script src="admin-control.js"></script>

</body>

</html>