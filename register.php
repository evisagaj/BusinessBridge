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
    <title> Business Bridge Startseite </title>
 </head>
<body>
        <?php require('menu.php'); ?>
		<div id="content">
			<h2> Register as a Costumer </h2>
			<?php
			if(isset($_GET['register']))
			{
				$email = $_POST['email'];
				$password = $_POST['password'];
				$vname = $_POST['vname'];
				$fname = $_POST['fname'];
				$phone = $_POST['phone'];
				
				$statement = $pdo->prepare("SELECT * FROM user1 WHERE email = ?");
				$statement ->bindParam(1,$email);
				
				$result = $statement->execute();
				if($statement->rowCount() > 0 ) {
                    echo 'Diese E-Mail Addresse ist besetzt. <br>';
					?>
					 <a href="login.php"> Logge Dich ein! </a> 
			<?php 
			    } else{
				    $insert = "INSERT INTO user1 (email,password,vname,fname,phone, userlevel) VALUES (?,?,?,?,?,1)";
     				$prepStmt = $pdo->prepare($insert);
					//$prepStmt ->bindParam(1, $userID);
					$prepStmt ->bindParam(1, $email);	
					$prepStmt ->bindParam(2, $password);
					$prepStmt ->bindParam(3, $vname);
					$prepStmt ->bindParam(4, $fname);
					$prepStmt ->bindParam(5, $phone);
					$prepStmt -> execute();
					
					echo "<h2> Willkommen, $vname! Du kannst dich jetzt  einloggen und Produkten kaufen und verkaufen. </h2>";
				}
			}
			else{
			?>
				<form action="?register=1" method="post">
					E-Mail: <br> <input type="email" size="40" maxlength="250" name="email"><br><br>
					Passwort:<br> <input type="password" size="40"  maxlength="250" name="password"><br><br>
					Vorname: <br> <input type="vname" size="40" maxlength="250" name="vname"><br><br>
					Nachname: <br> <input type="fname" size="40" maxlength="250" name="fname"><br><br>
					Telefonnummer: <br> <input type="phone" size="40" maxlength="250" name="phone"><br><br>
					<input id="button" type="submit" value="Submit">
				</form>
		</div>
	</div>
</body>
</html>
<?php
			}
$pdo = null;
?>