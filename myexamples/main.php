<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	
	<title>Main Page</title>
</head>
<body>
	<div class="container center-div shadow">
		<div class="Heading text-center text-uppercase text-white mb-5">Guys, share with your friends my 
			<?php echo $_SESSION['user']; ?> Technical Channel </div>
		<a href="logout.php" class="btn btn-danger">Logout</a>
	</div>

</body>
</html>