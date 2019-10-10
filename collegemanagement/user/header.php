<!DOCTYPE html>
<html>
<head>
    
<title>User Dashboard</title>
     <style type="text/css">
      #uname{ font-size: 7pt ; float:right; color:white; }
      </style>
 </head>

<body style="background:url(img.jpg);background-repeat:no-repeat;background-size:100% 100%">
	 <div style="text-align: center ">
	 	
<header>
    <div style= "background-color: MediumSeaGreen; height: 25px;">
    <p id ="uname"><?php echo $_SESSION['user']['NAME']?> |<a href="logout.php" style="color:white"> Logout </a></p>
    </div>
</header>
