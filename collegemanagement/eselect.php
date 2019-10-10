<?php include("logincheck.php");?>

<?php
include("php_with_sql.php");
$sql = "SELECT * FROM other_employee";
?>

<?php include("header.php");?>
<h3 style="color:red;">Other EMPLOYEE LIST</h3>

   <TABLE border="1" align="center" bgcolor= '#CCCCCC'>
	<tr><th>ID</th><th>NAME</th><th>DEPARTMENT</th><th>ACTION</th></tr>
<?php
if($result = $con-> query($sql))

{
  while ($row = $result->fetch_assoc())
  {
   ?>

   <tr>
   	    <td><?php echo $row['id']?></td>
   	     <td><?php echo $row['ename']?></td>
          <td><?php echo $row['department']?></td>
   	     <td>
          <a href="delother_employee.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure')">Delete</a>
          <a href="editother_employee.php?id=<?php echo $row['id']?>">Edit</a>
   	     </td>
   	 </tr>
  <?php
       }
    } 	 
  ?>

</TABLE>

<TABLE border="1" align="center" bgcolor= 'coral'>
  <tr><th><a href="dashboard.php">WELCOME PAGE</a></th><th><a href="addother_employee.php">ADD EMPLOYEE</a></th></tr>
</TABLE>
<?php include("footer.php");?>
