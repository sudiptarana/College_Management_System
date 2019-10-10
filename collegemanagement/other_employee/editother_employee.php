<?php  include("logincheck.php"); ?>
<?php
  include("php_with_sql.php");
  if(isset($_GET['id']) && !empty($_GET['id']))
  {
     //echo "<pre>";print_r($_GET);exit;
     $id = $_GET['id'];
     $sql = "SELECT * FROM other_employee WHERE id=$id";
     if($result = $con->query($sql))
     {
     	$row = $result->fetch_assoc();
     }
  }

  if(isset($_POST) && !empty($_POST)){
    //echo "<pre>";print_r($_POST);exit;

    $id=$_POST['id'];
   $ename = $_POST['ename'];
   $department= $_POST['department'];


    $sql = "UPDATE other_employee SET ename='$ename',department='$department' WHERE id=$id";
    if($con->query($sql))
    	 header("Location:eselect.php");
    else
    	echo "Try Agaian";
  }

?>
<?php  include("header.php"); ?>
	<h2 style="color:red;">Edit other_employee</h2>
   <form name="editfrm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

   	  <input type="hidden" name="id" value="<?php echo $row['id']?>">
   	 <input type="text" name="ename" placeholder="Enter Tutor Name" value="<?php echo $row['ename']?>"><br><br>
       <input type="text" name="department" placeholder="Enter department" value="<?php echo $row['department']?>"><br><br>


   	  <input type="submit" name="" value="Add"> 
   	  <input type="reset" name="" value="Cancel">
   </form>
<?php include("footer.php"); ?>