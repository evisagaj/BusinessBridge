<!DOCTYPE html>
<?php
try {
	$pdo = new PDO('mysql:host=localhost;dbname=webshop;port=3306', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo $e->getMessage();
		exit();
	}
session_start();
if($_SESSION['userlevel'] == 1) {
	echo "Hallo Kunde";
	}
?>
<html>
 <head>
   <?php require('header.php'); ?>
   
   
    <title> Business Bridge </title>
 </head>
 
<body>

<!-- webpage content goes here in the body -->
        <?php require('menu.php'); ?>
		<div id="content">
			<h2> Willkommen zu Business Bridge </h2>
				
			
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="http://imsc.uni-graz.at/kucher" target="_blank">[Andreas Kucher]</a>
			</p>
		</div>
</body>
</html>