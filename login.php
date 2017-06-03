<?php
if(!isset($_SESSION)) {
		session_start();
	}
	var_dump($_SESSION);
	if(isset($_SESSION["userID"]))
		header("Location: index.php");
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
   <?php require('header.php'); ?>
   
   
    <title> Business Bridge </title>
 </head>
 
<body>

<!-- webpage content goes here in the body -->
        <?php require('menu.php'); ?>
		<div id="content">
			<h2> Logge Dich ein </h2>
			
		<?php
		if(isset($_GET['login'])){
			//Dateneingabe
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
			$_SESSION['userlevel'] = $_POST['userlevel'];
			$_SESSION['userID'] = $res[0];

			if($_SESSION['userlevel'] = 1){
			header('Location: shopnow.php');
			}
			else{
				header('Location: admin.php');
			}
			//if($this->session->userdata('logged_in'))
			//{
				//$session_data = $this->session->userdata('logged_in');
				//$data['$res[3]'] = $session_data['$res[3]'];

				//$data = array(
                 //'session_id'=>"",
               //  'username'=>$session_data['$res[3]'],
				// 'email'=>$session_data['$res[1]'],
				// 'userlevel'=>$session_data['$res[6]'],
                 //'user_data'=>$session_data['username']."Logged in Account"
				//);
			
			//}
			//else{
			//	echo "Falsch";
			//}
			}
		}
		?>
				<form action="?login=1" method="post">
					E-Mail: <br> <input type="email" size="40" maxlength="250" name="email"><br><br>
					Dein Passwort:<br> <input type="password" size="40"  maxlength="250" name="password"><br>
					<input type="submit" value="Send">
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
$pdo->connection = null;
?>