		<div id="page">
		<div id="logo">
			<h1><a href="/" id="logoLink"> Business Bridge Startseite </a></h1>
		</div>
		<div id="nav">
			<ul>
				<li><a href="home.php"> Home </a></li>			
				<?php if(!isset($_SESSION["userID"])) { ?>	<li><a href="login.php"> Logge Dich ein </a></li><?php } ?>
				<?php if(isset($_SESSION["userID"]) && ($_SESSION['userlevel'] == 0)) { ?> <li><a href="admin.php"> Admin-Area </a></li><?php } ?>
				<li><a href="register.php"> Registere Dich </a></li>
				<?php if(isset($_SESSION["userID"])) { ?> <li><a href="logout.php"> Logout </a></li> <?php } ?>
			</ul>	
		</div>