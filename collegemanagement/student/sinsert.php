<?php
include("php_with_sql.php");
if(isset($_POST)&& !empty($_POST)){

    $name= $_POST['name'];
    $course= $_POST['c_id'];
    $book= $_POST['b_id'];


   $sql = "INSERT INTO student( name,c_id,b_id ) VALUES('$name','$course','$book')";

if ($con->query($sql))
	header("Location:sselect.php");
else
	echo"Try again";
}
?>