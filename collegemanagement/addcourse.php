<?php  include("logincheck.php");  ?>
<?php  include("header.php");      ?>
	<h2>Add Course</h2>
   <form name="addcfrm" action="insert.php" method="post">
   	  <input type="text" name="cname" placeholder="Enter Course Name"><br><br>
   	  <input type="submit" name="" value="Add"> 
   	  <input type="reset" name="" value="Cancel">
   </form>
<?php include("footer.php") ?>