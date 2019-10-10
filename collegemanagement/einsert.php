<?php
 include("php_with_sql.php");
 if(isset($_POST) && !empty($_POST)){
     //echo "<pre>";print_r($_POST);exit;

    $ename = $_POST['ename'];
   $department= $_POST['department'];


   $sql = "INSERT INTO other_employee (ename,department) VALUES('$ename','$department')";
   //echo $sql;
   if($con->query($sql))
     header("Location:eselect.php");
   else
   	echo "Try again";
 }
?>