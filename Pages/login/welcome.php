<?php
session_start();

echo "<h1>Welcome ".$_SESSION['uname']."</h1>";

echo "<a href='product.php'>Product</a><br>";

echo "<br><a href='logout.php'><input type=button value=logout name=logout</a>";
?>