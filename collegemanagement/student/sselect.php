<?php include("logincheck.php");?>

<?php
include("php_with_sql.php");
$sql = "SELECT s.*,c.cname , b.bname 
        FROM student s 
        INNER JOIN courses c ON c.id=s.C_id
        INNER JOIN books b ON b.id=s.b_id";
?>

<?php include("header.php");?>
<h3 style="color:red;">STUDENT LIST</h3>

   <TABLE border="1" align="center" bgcolor= '#CCCCCC'>
  <tr><th>ID</th><th>NAME</th><th>COURSE</th><th>BOOK</th><th>ACTION</th></tr>
<?php
    if($result = $con-> query($sql))

  {
      while ($row = $result->fetch_assoc())
    {
?>

   <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['cname']?></td>
        <td><?php echo $row['bname']?></td>
         <td>
          <a href="delstudent.php?id=<?php echo $row['id']?>" onclick="return confirm('Are you sure')">Delete</a>
         </td>
     </tr>
  <?php
       }
    }    
  ?>

</TABLE>

<TABLE border="1" align="center" bgcolor= 'coral'>
  <tr><th><a href="dashboard.php">Welcome Page</a></th><th><a href="addstudent.php">ADD STUDENT</a></th></tr>
</TABLE>
<?php include("footer.php");?>
