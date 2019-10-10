<?php
  include("php_with_sql.php");
  if(isset($_GET['id']) && !empty($_GET['id']))
  {
     //echo "<pre>";print_r($_GET);exit;
     $id=$_GET['id'];
     $sql = "DELETE FROM courses WHERE id=$id";
     //echo $sql;
     if($con->query($sql))
     	header("Location:select.php");
     else
     	echo "Try Again";
  }

?>