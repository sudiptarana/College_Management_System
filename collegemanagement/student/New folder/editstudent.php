<?php include("logincheck.php");?>
<?php
include("php_with_sql.php");

if(isset($_GET['id']) && !empty($_GET['id']))
{
	$id = $_GET['id'];

    if ($result = $con->query("SELECT * FROM student WHERE ID=$id"))
     {$row= $result->fetch_assoc();$c_id = $row['C_ID'];}
}

if (isset($_POST)&& !empty($_POST)) 
{
    $id=$_POST['id'];
    $name= $_POST['name'];
    $cname= $_POST['cname'];
    $c_id;


   if($cname == "None" || ($name == "" && $cname == "None"))
            header("location:sselect.php");
  else
  {
      if($result = $con->query("SELECT ID FROM courses WHERE COURSE_NAME='$cname'"))
            {
                $row = $result->fetch_assoc();
                $c_id = $row['ID'];
            }

      $sql = "UPDATE student 
        SET NAME='$name' , C_ID ='$c_id'
          WHERE ID=$id";

	     if ($con->query($sql))
		       header("Location:sselect.php");
      else
    	     echo "Try Agaian";
  }
}
?>

<?php include("header.php");?>


	<h1>MODIFY STUDENT</h1>
    <form name="editfrm" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

  	<input type="hidden" name="id" value="<?php echo $row['ID']?>">
  	<input type="text" name="name"   value="<?php echo $row['NAME']?>"
    <br><br>

    <select name = "cname">
        <option style="color: red" value="None">None</option> 
          <?php
            if ($result=$con->query("SELECT * FROM courses"))
            {
              while ($row=$result->fetch_assoc()) 
              {
          ?>
                <option value="<?php echo $row['COURSE_NAME']?>"><?php echo $row['COURSE_NAME']?></option>
          <?php
              }
            }

          ?>
    </select><br><br>
    
  	<input type="submit" name="" value="Add">
  	 <input type="button" name="" value="Cancel" onclick="document.location.href='sselect.php'"> 
  </form>
<?php include("footer.php");?>