<?php

session_start();

$con = mysqli_connect('localhost','root','');
if($con){
  echo "successful";
}else{
  echo "no connection";
}
?>


<html>

<head>
	<title> User Login and Registration </title>
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

        <!-- Custom CSS -->
        <link href="css/style.css" rel='stylesheet' type='text/css' />

        <!-- font-awesome icons CSS -->
        <link href="css/font-awesome.css" rel="stylesheet"> 
        <!-- //font-awesome icons CSS -->

         <!-- side nav css file -->
         <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
         <!-- side nav css file -->
         
         <!-- js-->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/modernizr.custom.js"></script>

        <!--webfonts-->
        <link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
        <!--//webfonts--> 

        <!-- Metis Menu -->
        <script src="js/metisMenu.min.js"></script>
        <script src="js/custom.js"></script>
        <link href="css/custom.css" rel="stylesheet">
        <!--//Metis Menu -->


</head>

	<body>
		<section>
      
               
     

    </section>

		
		

		<div class="container">
			<div class="login-box">
			<div class="row">
				<div class="col-md-6 login-left">
					<h2> Login Here </h2>
					<form action="validation.php" method="post">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary" name="submit"> Sign in </button>

					</form>
				</div>

				
			</div>
		</div>
						

	</div>

	
      


	</body>
</html>