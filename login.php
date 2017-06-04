<?php
if(!isset($_SESSION)) {
		session_start();
	}	
	var_dump($_SESSION);
	if(isset($_SESSION["userID"])){
		header("Location: home.php");
	}
	require('dbconnect.php');
	?>
<!DOCTYPE html>
<?php

	$pdo = new PDO('mysql:host=localhost;port=3306;dbname=webshop', 'root', '');
	try {
	$pdo = new PDO('mysql:host=localhost;dbname=webshop;port=3306', 'root', '');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo $e->getMessage();
		exit();
	}
?>
<html>
 <head>
<link rel="stylesheet" href="style.css" type="text/css" />	
    <title> Business Bridge </title>
 </head>
<body>
        <?php require('menu.php'); ?>
		<div id="content">
			<h2> Logge Dich ein </h2>
			
		<?php
		if(isset($_GET['login'])){
			$email = $_POST['email'];
			$password = $_POST['password'];

			$statement = $pdo->prepare("SELECT * FROM user1 WHERE email = ?");
			$statement ->bindParam(1,$email);
			$result = $statement->execute();
			 
			$res = $statement->fetch();
			$data = $res[1] ."\n" . $res[2] . "\n";
			
			if($res[1] == $email && $res[2] == $password){
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['vname'] = $_POST['vname'];
			$_SESSION['userlevel'] = $res[6];
			$_SESSION['userID'] = $res[0];
			
			header('Location: home.php');
			}
		}
		?>
				<form action="?login=1" method="post">
					E-Mail: <br> <input type="email" size="40" maxlength="250" name="email"><br><br>
					Dein Passwort:<br> <input type="password" size="40"  maxlength="250" name="password"><br><br>
					<input id="button" type="submit" value="Send">
				</form>
 
		</div>
	</div>
</body>
</html>
<?php
$pdo->connection = null;
?>