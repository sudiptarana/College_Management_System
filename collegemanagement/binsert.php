<?php
 include("php_with_sql.php");
 if(isset($_POST) && !empty($_POST)){
     //echo "<pre>";print_r($_POST);exit;

   $bname = $_POST['bname'];

   $sql = "INSERT INTO books(bname) VALUES('$bname')";
   //echo $sql;
   if($con->query($sql))
     header("Location:bselect.php");
   else
   	echo "Try again";
 }
?>