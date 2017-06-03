<!DOCTYPE html>
<?php
if(!isset($_SESSION)) {
		session_start();
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
				
				<p> 
				<h3> Business Bridge ist die Webseite, die Albanien braucht. </br> </h3>
				Wenn Deine Firma Produkte kaufen/verkaufen will, wenn Du Produkte kaufen willst, 
				registriere Dich jetzt! 
				Du kannst Dich als Kunde registrieren, aber wenn Dein Unternehmen bei uns Produkte kaufen und anbieten will, kontaktiere ClickService,
				um zu registrieren.
				</p>
				<p> Kontakt zu ClickService: office@clickservice.at </br>
				<a href="http://clickservice.at/"> Mehr Informationen zu ClickService. </a>
				</p>
		</div>
		<div id="footer">
			<p>
				Webpage made by <a href="http://imsc.uni-graz.at/kucher" target="_blank">[Andreas Kucher]</a>
			</p>
		</div>
	</div>
</body>
</html>