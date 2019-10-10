<!DOCTYPE html>
<html>
<head>
    
    <title>Sign Up</title>

    <style type=text/css> 
div 
{ 
  text-align: center;
  border:2px solid red;
  color: #Eb4B3C; 
  background-color:black;
} 
</style> 
    
</head>
<body bgcolor="#FFC599">
<div>
   <h3>  User Signup  </h3> <br>

    <form name="userfrm" action="register.php" method="post" color ="red">
  	
  	<input type="text" name="NAME" placeholder= "Enter the student name">
    <br><br>
    <input type="email" name="EMAIL" placeholder="Enter email">
    <br><br>
    <input type="password" name="PASSWORD" placeholder="Enter password">
    <br><br>

  	<input type="submit" name="" value="SIGN UP"> &nbsp &nbsp 
    <input type="reset" name="" value="Cancel">
    </form> <br><br>
      <marquee><P> ALREADY REGISTERED? CLICK TO <a href="login.php">LogIn</a></p></marquee>
</body>
</html>