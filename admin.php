<!DOCTYPE html>
<?php
if(!isset($_SESSION)) {
		session_start();
	}
?>
<html>
 <head>
   <?php require('header.php'); ?>
   
   
    <title>My First Website</title>
 </head>
 
<body>

<!-- webpage content goes here in the body -->
        <?php require('menu.php'); ?>
		<div id="content">
			<h2> Willkommen, Admin. </h2>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[your name]</a>
			</p>
		</div>
	</div>
</body>
</html>