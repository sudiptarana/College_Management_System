<?php
 include("php_with_sql.php");
 if(isset($_POST) && !empty($_POST)){
     //echo "<pre>";print_r($_POST);exit;

   $cname = $_POST['cname'];

   $sql = "INSERT INTO courses(cname) VALUES('$cname')";
   //echo $sql;
   if($con->query($sql))
     header("Location:select.php");
   else
   	echo "Try again";
 }
?>