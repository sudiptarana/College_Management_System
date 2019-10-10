<?php
include("php_with_sql.php");
if(isset($_POST)&& !empty($_POST))
{
//echo "<pre>";print_r($_post);echo "</pre>";

$name= $_POST['NAME'];
$email= $_POST['EMAIL'];
$password= md5($_POST['PASSWORD']);

   $sql = "INSERT INTO users( NAME,EMAIL,PASSWORD ) VALUES('$name','$email','$password')";

//echo $sql;

if ($con->query($sql))
	header("Location:login.php");
else
	echo"Please try again.";
}

?>
