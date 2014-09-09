<doctype html!>
<html>

<head>
  <meta charset="utf-8">
  <title>Harjutus2</title>
 </head>

 <body>

 	<h1>See dokument on minu esimene katsetus PHP-ga</h1>
 	<?php 
 		echo "Tere" . "Keri nahhui";
 		echo "<br>";
 		echo "<br>";
 		echo "Järgmine rida";
 	?>

 	<p>Tere siin on jälle staatiline leht</p>

 	<h2>Arvutiamine</h2>
 	<p>Siin theeme arvuatiad</p>

 	<?php echo 4 + 5; 
 	// asdasdasdasdasd //
 	# asadasdasda #?><br>
 	<?php echo 4 - 5; ?><br>
 	<?php echo 4 * 5; ?><br>
 	<?php echo 4 / 5; ?><br>

 	<h2>Muutujad</h2>
 	<?php

 	$number = 5 - 4;
 	$number2 = 9;
 	$text ="YOLOSAW#LEASD";
 	echo "
 	<ul>
 	<li>".$text."</li>
 	<li>".($number + $number2)."</li>
 	</ul>";
 	
 	?>
 </body>
 </html>