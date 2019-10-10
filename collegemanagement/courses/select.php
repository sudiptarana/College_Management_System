<?php  include("logincheck.php");  ?>
<?php
 include("php_with_sql.php");
 $sql = "SELECT * FROM courses";
?>
 <?php include("header.php")?>
  <h3 style="color:red;">COURSE LIST</h3>
 <TABLE border="1" align="center" bgcolor= '#CCCCCC'>
   	<tr><th>ID</th><th>Course Name</th><th>Actions</th></tr>
	<?php
	 if($result = $con->query($sql))
	 {
	   while($row = $result->fetch_assoc())
	   {
	?>
	    <tr>
	    	<td><?php echo $row['id']?></td>
	    	<td><?php echo $row['cname']?></td>
	    	<td><a href="delcourse.php?id=<?php echo $row['id']?>" onclick="return confirm('Are youe Sure?')">Delete</a> | 
	    	<a href="editcourse.php?id=<?php echo $row['id']?>">Edit</a></td>
	    </tr>   	 
	<?php   
        }
	 }
	?>
    </table>
   <TABLE border="1" align="center" bgcolor= 'coral'>
  <tr><th><a href="dashboard.php">Welcome Page</a></th><th><a href="addcourse.php">ADD COURSE</a></th></tr>
</TABLE>
  <?php include("footer.php") ?>