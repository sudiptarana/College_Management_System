<?php
 include("php_with_sql.php");
 if(isset($_POST) && !empty($_POST)){
     //echo "<pre>";print_r($_POST);exit;

    $tname = $_POST['tname'];
   $qualifications= $_POST['qualifications'];
   $salary = $_POST['salary'];


   $sql = "INSERT INTO tutors (tname,qualifications,salary) VALUES('$tname','$qualifications','$salary')";
   //echo $sql;
   if($con->query($sql))
     header("Location:tselect.php");
   else
   	echo "Try again";
 }
?>