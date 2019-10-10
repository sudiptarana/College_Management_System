<?php include("logincheck.php");?>
<?php include("header.php");?>
<?php include("php_with_sql.php")?>
<?php  $sql = "SELECT * FROM courses" ?>
<h2>ADD STUDENT</h2>
  <form name="addcfrm" action="sinsert.php" method="post">
  	
  	<input type="text" name="NAME" placeholder="Enter the student name"><br><br>
    

  	<select name = "C_ID">
  		<?php
  		if ($result=$con->query($sql)){
  	    while ($row=$result->fetch_assoc()) {
  	    	?>
  	    	<option value="<?php echo $row['ID']?>"><?php echo $row['COURSE_NAME']?></option>
  	    	<?php
  	    }
  		}

  		?>
  	</select><br><br>
      

  	<input type="submit" name="" value="Add">
  	<input type="reset" name="" value="Cancel">
  </form>
<?php include("footer.php")?>