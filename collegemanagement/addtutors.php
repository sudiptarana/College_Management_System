<?php  include("logincheck.php");  ?>
<?php  include("header.php");      ?>
	<h2 style="color:red;">Add Teacher</h2>
   <form name="addcfrm" action="tinsert.php" method="post">
   	  <input type="text" name="tname" placeholder="Enter Tutor Name"><br><br>
   	   <input type="text" name="qualifications" placeholder="Enter qualifications"><br><br>
   	    <input type="text" name="salary" placeholder="Enter salary"><br><br>

   	  <input type="submit" name="" value="Add"> 
   	  <input type="reset" name="" value="Cancel">
   </form>
<?php include("footer.php") ?>