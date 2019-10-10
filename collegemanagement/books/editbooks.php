<?php  include("logincheck.php"); ?>
<?php
  include("php_with_sql.php");
  if(isset($_GET['id']) && !empty($_GET['id']))
  {
     //echo "<pre>";print_r($_GET);exit;
     $id = $_GET['id'];
     $sql = "SELECT * FROM books WHERE id=$id";
     if($result = $con->query($sql))
     {
     	$row = $result->fetch_assoc();
     }
  }

  if(isset($_POST) && !empty($_POST)){
    //echo "<pre>";print_r($_POST);exit;

    $id=$_POST['id'];
    $bname =$_POST['bname'];

    $sql = "UPDATE books SET bname='$bname' WHERE id=$id";
    if($con->query($sql))
    	 header("Location:bselect.php");
    else
    	echo "Try Agaian";
  }

?>
<?php  include("header.php"); ?>
	<h2>Edit Course</h2>
   <form name="editfrm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
   	  <input type="hidden" name="id" value="<?php echo $row['id']?>">
   	  <input type="text" name="bname" placeholder="Enter Books Name" value="<?php echo $row['bname']?>"><br><br>
   	  <input type="submit" name="" value="Add"> 
   	  <input type="reset" name="" value="Cancel">
   </form>
<?php include("footer.php"); ?>