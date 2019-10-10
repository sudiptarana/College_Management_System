<?php include("logincheck.php");?>

<?php
include("php_with_sql.php");
$sql = "SELECT * FROM tutors";
?>

<?php include("header.php");?>
<h3 style="color:red;">Teacher List</h3>

   <TABLE border="1" align="center" bgcolor= '#CCCCCC'>
	<tr><th>ID</th><th>NAME</th><th>QUALIFICATIONS</th><th>SALARY</th><th>ACTION</th></tr>
<?php
if($result = $con-> query($sql))

{
  while ($row = $result->fetch_assoc())
  {
   ?>

   <tr>
   	    <td><?php echo $row['id']?></td>
   	     <td><?php echo $row['tname']?></td>
          <td><?php echo $row['qualifications']?></td>
           <td><?php echo $row['salary']?></td>
   	     <td>
          <a href="deltutors.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure')">Delete</a>
          <a href="edittutors.php?id=<?php echo $row['id']?>">Edit</a>
   	     </td>
   	 </tr>
  <?php
       }
    } 	 
  ?>

</TABLE>

<TABLE border="1" align="center" bgcolor= 'coral'>
  <tr><th><a href="dashboard.php">WELCOME PAGE</a></th><th><a href="addtutors.php">ADD TEACHER</a></th></tr>
</TABLE>
<?php include("footer.php");?>
