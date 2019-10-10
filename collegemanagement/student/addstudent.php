<?php include("logincheck.php");?>
<?php include("header.php");?>
<?php include("php_with_sql.php")?>
<?php  $sql = "SELECT courses.*,books.*
               FROM courses 
               INNER JOIN books ON courses.id=books.id"; ?>

<h2 style="color:red;">ADD STUDENT</h2>
  <form name="addcfrm" action="sinsert.php" method="post">
  	
  	<input type="text" name="name" placeholder="Enter the student name"><br><br>
    

  	<select name = "c_id">
  		<?php
  		if ($result=$con->query($sql)){
  	    while ($row=$result->fetch_assoc()) {
  	    	?>
  	    	<option value="<?php echo $row['id']?>"><?php echo $row['cname']?></option>
  	    	<?php
  	    }
  		}

  		?>
  	</select><br><br>


    <select name = "b_id">
      <?php
      if ($result=$con->query($sql)){
        while ($row=$result->fetch_assoc()) {
          ?>
          <option value="<?php echo $row['id']?>"><?php echo $row['bname']?></option>
          <?php
        }
      }

      ?>
    </select><br><br>
      

  	<input type="submit" name="" value="Add">
  	<input type="reset" name="" value="Cancel">
  </form>
<?php include("footer.php")?>