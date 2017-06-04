
		<div id="menu">
			<ul>
				<li><a href="home.php"> Home </a></li>			
				<?php if(!isset($_SESSION["userID"])) { ?>	<li><a href="login.php"> Logge Dich ein </a></li><?php } ?>
				<?php if(isset($_SESSION["userID"]) && ($_SESSION['userlevel'] == 0)) { ?> <li><a href="admin.php"> Admin-Area </a></li><?php } ?>
				<?php if(!isset($_SESSION['userID'])) { ?>  <li><a href="register.php"> Registere Dich </a></li> <?php } ?>
				<?php if(isset($_SESSION['userID']) && ($_SESSION['userlevel'] == 1)) { ?> <li><a href="store.php"> Store </a></li><?php } ?> 
				<?php if(isset($_SESSION["userID"])) { ?> <li><a href="logout.php"> Logout </a></li> <?php } ?>
			</ul>	
		</div>