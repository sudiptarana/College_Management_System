<?php
session_start();
include("php_with_sql.php");
if(isset($_POST)&& !empty($_POST))
{

  //echo"<pre>";print_r($_POST);echo "</pre>";

  $email= $_POST['EMAIL'];
  $password= md5($_POST['PASSWORD']);
 $sql = "SELECT * FROM users WHERE EMAIL= '$email' AND PASSWORD= '$password' ";
//echo $sql;
   if ($result=$con->query($sql))
   {
        $row = $result->fetch_assoc();
        if(!empty($row))
        {
            //echo "welcome".$row['NAME'];exit;
            $_SESSION['user']= $row;
            header("Location:dashboard.php");
        }
        else
        {
            echo "Email/password is wrong";
        }
    }
}   
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Login</title>

<style type=text/css> 
div 
{ 
  text-align: center;
  border:2px dashed #006E6D;
   color: red; 
  background-color: black;
 
} 
 
form
{
padding: 10px;
}
</style>
    
</head>

<body bgcolor="black">
<div>
    <h3>Login</h3>
    <br>

    <form name="userfrm" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
  	
      <input type="email" name="EMAIL" placeholder="Enter email"><br><br>
      <input type="password" name="PASSWORD" placeholder="Enter password"><br><br>

  	  <input type="submit" name="" value="SIGN IN"> &nbsp &nbsp 
      <input type="reset" name="" value="Cancel">

      </form> <br><br>

      <marquee><P> NOT REGISTERED? CLICK TO <a href="signup.php">SignUp</a></p></marquee>
</div>
</body>
</html>