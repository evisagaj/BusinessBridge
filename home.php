<!DOCTYPE html>
<?php
if(!isset($_SESSION)) {
		session_start();
	}
	require('dbconnect.php');
?>
<html>
 <head>
 <link rel="stylesheet" href="style.css" type="text/css" />	
    <title> Business Bridge </title>
 </head>
<body>
        <?php require('menu.php'); ?>
		<div id="content">
				<h1>Business Bridge, die Webseite die Albanien braucht</h1>
				<div id="image">
				<img src="on.jpg"/>
				</div>
				<h3> Jetzt  deine Firma registrieren, um Produkten zu kaufen und verkaufen. </h3>
				
		</div>
	</div>
</body>
</html>