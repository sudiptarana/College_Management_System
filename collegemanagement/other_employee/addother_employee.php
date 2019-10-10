<?php  include("logincheck.php");  ?>
<?php  include("header.php");      ?>
	<h2 style="color:red;">Add other_employee</h2>
   <form name="addcfrm" action="einsert.php" method="post">
   	  <input type="text" name="ename" placeholder="Enter other_employee Name"><br><br>
   	   <input type="text" name="department" placeholder="Enter department"><br><br>

   	  <input type="submit" name="" value="Add"> 
   	  <input type="reset" name="" value="Cancel">
   </form>
<?php include("footer.php") ?>