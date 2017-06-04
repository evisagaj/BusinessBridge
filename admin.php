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
    <title>My First Website</title>
 </head>
<body>
        <?php require('menu.php'); ?>
		<div id="content">
		</div>
	</div>
</body>
</html>