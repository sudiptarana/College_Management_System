<?php
include("php_with_sql.php");
if(isset($_POST)&& !empty($_POST)){

    $name= $_POST['NAME'];
    $course= $_POST['C_ID'];

   $sql = "INSERT INTO student( NAME,C_ID ) VALUES('$name','$course')";

if ($con->query($sql))
	header("Location:sselect.php");
else
	echo"Try again";
}
?>