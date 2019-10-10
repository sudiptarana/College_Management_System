<?php  include("logincheck.php"); ?>
<?php
  include("php_with_sql.php");
  if(isset($_GET['id']) && !empty($_GET['id']))
  {
     //echo "<pre>";print_r($_GET);exit;
     $id = $_GET['id'];
     $sql = "SELECT * FROM tutors WHERE id=$id";
     if($result = $con->query($sql))
     {
     	$row = $result->fetch_assoc();
     }
  }

  if(isset($_POST) && !empty($_POST)){
    //echo "<pre>";print_r($_POST);exit;

    $id=$_POST['id'];
   $tname = $_POST['tname'];
   $qualifications= $_POST['qualifications'];
   $salary = $_POST['salary'];


    $sql = "UPDATE tutors SET tname='$tname',qualifications='$qualifications',salary='$salary' WHERE id=$id";
    if($con->query($sql))
    	 header("Location:tselect.php");
    else
    	echo "Try Agaian";
  }

?>
<?php  include("header.php"); ?>
	<h2 style="color:red;">Edit Tutor</h2>
   <form name="editfrm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

   	  <input type="hidden" name="id" value="<?php echo $row['id']?>">
   	 <input type="text" name="tname" placeholder="Enter Tutor Name" value="<?php echo $row['tname']?>"><br><br>
       <input type="text" name="qualifications" placeholder="Enter qualifications" value="<?php echo $row['qualifications']?>"><br><br>
        <input type="text" name="salary" placeholder="Enter salary" value="<?php echo $row['salary']?>"><br><br>


   	  <input type="submit" name="" value="Add"> 
   	  <input type="reset" name="" value="Cancel">
   </form>
<?php include("footer.php"); ?>