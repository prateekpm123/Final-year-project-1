<?php 
	include 'class.php';
	include 'test.php';
	include 'insert.class.php';
	include 'update.class.php'
?>


<!DOCTYPE html>
<html>
<head>
	<title>Classes in PHP</title>
</head>
<body>

<?php 
	
	$q_no = "id";
	$formId = "formId";
	$first = new Insert();
	$first->setInsert($formId, $q_no);
?>	
</body>
</html>