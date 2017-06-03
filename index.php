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
			<h2>Home</h2>
				<li>
					In jeder Datei wird eine Session gestartet, wenn sie noch nicht aktiv ist!
				</li><br>
				<li> 
				In den Dateien register.php und login.php wird am Anfang ein PDO Objekt erzeugt und am Ende zerstört!
				</li><br>	
				<li> 
				In der Datei register.php wird mit POST Email und Passwort an register.php?register=1 geschickt. 
				Wenn $_POST['register']=1 dann wird zuerst mit einem prepared statement überprüft, ob die Email schon in der Datenbank ist.
				Wenn nicht, dann wird ein neuer Benutzer angelegt und ein redirect an index.php gemacht!!!! Der Benutzer wird auch eingeloggt, das heißt 
				$_SESSION['user_id'] auf den Index des Benutzers in der Datenbank gesetzt. 
				</li><br>	
				<li>
				Wenn der Benutzer eingeloggt ist, kann er im Menü "Admin-Area" aufrufen und die Seite admin.php aufrufen. (Tipp: if(isset($_SESSION['user_id']))).
				In der Datei admin.php wird der Inhalt nur angezeigt, wenn der Benutzer eingeloggt ist!!!!
				</li><br>	
				<li> 
				Wenn der Benutzer nicht eingeloggt ist, kann er im Menü "Login" aufrufen und die Seite login.php aufrufen (Tipp: if(isset($_SESSION['user_id']))).
				</li><br>					
				<li> 
				In der Datei login.php wird mit POST Email und Passwort an register.php?login=1 geschickt. 
				Wenn $_POST['login']=1 dann wird zuerst mit einem prepared statement überprüft ob die Email und das Passwort dazu in der Datenbank sind.
				Wenn ja wird $_SESSION['user_id'] auf die User ID in der Datenbank gesetzt. 
				</li><br>					
				<li> 
				Wenn der Benutzer eingeloggt ist, kann er im Menü "Admin-Area" aufrufen und die Seite admin.php aufrufen. (Tipp: if(isset($_SESSION['user_id']))).
				In der Datei admin.php wird der Inhalt nur angezeigt, wenn der Benutzer eingeloggt ist!!!!
				</li><br>	
				<li> 
				In der seite logout.php wird session_destroy() aufgerufen wenn $_SESSION['user_id'] existiert und die Session beendet = Logout
				</li><br>	
				
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="http://imsc.uni-graz.at/kucher" target="_blank">[Andreas Kucher]</a>
			</p>
		</div>
	</div>
</body>
</html>