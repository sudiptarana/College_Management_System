<?php 

		$pic = array('fit (1).jpg', 'fit (2).jpg','fit (3).jpg','fit (4).jpg','fit (5).jpg',);
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
				echo "<li style=\"display:inline;\"> <img src =\"$pic[$i]\" width=\"250\" height=\"150\"></li>";
		?>
	</ul>
</marquee>
</body>
</html>