	<?php
	try {
	$pdo = new PDO('mysql:host=localhost;dbname=webshop;port=3306', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo $e->getMessage();
		exit();
	}
	?>