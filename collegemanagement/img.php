<?php 

		$pic = array('1.jpg', '2.jpg','3.jpg','4.jpg','5.jpg',);
		shuffle($pic);

?>

<!DOCTYPE html>
<html>
<head>
<title>Randome image</title>

<body>
	<marquee>
	<ul >
		<?php 
			for($i=0 ; $i<5;$i++)
				echo "<li style=\"display:inline;\"> <img src =\"$pic[$i]\" width=\"250\" height=\"130\"></li>";
		?>
	</ul>
</marquee>
</body>
</html>