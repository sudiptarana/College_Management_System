<?php  include("logincheck.php");  ?>
<?php  include("header.php");      ?>
	<h2>Add Books</h2>
   <form name="addcfrm" action="binsert.php" method="post">
   	  <input type="text" name="bname" placeholder="Enter Books Name"><br><br>
   	  <input type="submit" name="" value="Add"> 
   	  <input type="reset" name="" value="Cancel">
   </form>
<?php include("footer.php") ?>