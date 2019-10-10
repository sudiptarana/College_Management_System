<?php include("logincheck.php");?>

<?php include("php_with_sql.php");
$sql = "SELECT s.*,c.COURSE_NAME FROM student s INNER JOIN courses c ON c.ID=s.C_ID";
?>

<?php include("header.php");?>
<h3>STUDENT LIST</h3>
   <TABLE border="1">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>C_ID</th>
        <TH>COURSE_NAME</TH>
        <th>ACTION</th>
     </tr>

<?php
     if($result = $con-> query($sql))

       {
           while ($row = $result->fetch_assoc())
       {
?>
     <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['NAME']?></td>
            <td><?php echo $row['C_ID']?></td>
            <td><?php echo $row['COURSE_NAME']?></td>
            
        <td>
            <a href="delstudent.php?id=<?php echo $row['ID']?>" onclick="return confirm('Are you sure?')">Delete</a>

            <a href="editstudent.php?id=<?php echo $row['ID']?>">Edit</a>
   	     </td>
   	 </tr>
<?php
       }
    } 	 
?>

</TABLE>
<a href="dashboard.php">Dashboard</a> | <a href="addstudent.php">Add student</a>
<?php include("footer.php");?>