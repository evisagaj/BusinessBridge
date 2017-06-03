<!DOCTYPE html>
<?php
if(!isset($_SESSION)) {
		session_start();
	}
	
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
   <?php require('header.php'); ?>
   
   
    <title> Business Bridge Startseite </title>
 </head>
 
<body>

<!-- webpage content goes here in the body -->
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
				//$rows = $result->rowCount();xml_error_string
				// echo $statement->rowCount();
				if($statement->rowCount() > 0 ) {
                    echo 'Diese E-Mail Addresse ist besetzt. <br>';
					?>
					 <a href="login.php"> Logge Dich ein! </a> 
			<?php 
			    } else{
				    $insert = "INSERT INTO user1 (email,password,vname,fname,phone, userlevel) VALUES (?,?,?,?,?,0)";
     				$prepStmt = $pdo->prepare($insert);
					//$prepStmt ->bindParam(1, $userID);
					$prepStmt ->bindParam(1, $email);	
					$prepStmt ->bindParam(2, $password);
					$prepStmt ->bindParam(3, $vname);
					$prepStmt ->bindParam(4, $fname);
					$prepStmt ->bindParam(5, $phone);
					$prepStmt -> execute();
				
					//$sql = "INSERT INTO users1(email,password,vname,fname,phone)
					//VALUES('".$email."','".$password."',".$vname."','".$fname."','".$phone."')";
					//$pdo -> exec($sql);
					
					echo "<h2> Willkommen, $vname! </h2>";
				}
			}
			else{
			?>
				<form action="?register=1" method="post">
					E-Mail: <br> <input type="email" size="40" maxlength="250" name="email"><br><br>
					Passwort:<br> <input type="password" size="40"  maxlength="250" name="password"><br>
					Vorname: <br> <input type="vname" size="40" maxlength="250" name="vname"><br><br>
					Nachname: <br> <input type="fname" size="40" maxlength="250" name="fname"><br><br>
					Telefonnummer: <br> <input type="phone" size="40" maxlength="250" name="phone"><br><br>
					<input type="submit" value="Submit">
				</form>
 
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[your name]</a>
			</p>
		</div>
	</div>
</body>
</html>
<?php
			}
$pdo = null;
?>