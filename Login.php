<?php

	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf_8">
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div id="container">
		<nav>
			<ul>
				<li><a href="Home.html">Home</a></li>
				
				<li><a href="Produits.html">Produits</a>
				<!-- First Tier Drop Down -->
				<ul>
					<li><a href="couteaux.html">COUTEAUX</a></li>
					<li><a href="ustensile.html">Ustensile</a></li>
					<li><a href="equipement.html">Equipement</a></li>
				</ul>        
				</li>
				<li><a href="Contact.html">Contact</a>
				<!-- First Tier Drop Down -->
				<ul>
					<li><a href="avis.html">Avis</a></li>
					<li><a href="Contact.html">Nous Contacter</a></li>
								
                </ul>
				</li> 		
				
				<li><a href="Panier.html">Panier</a>
					<!-- First Tier Drop Down -->
					<ul>
						<li><a href="commande.html">Commander</a></li>
						<li><a href="#">Voir le Panier</a></li>
						
					</ul>        
					</li>

					<li><a href="Blog.html">Blog</a></li>

				<li><a href="Login.html">Login</a>
					<!-- First Tier Drop Down -->
					<ul>

						<?php
							if(isset($_SESSION["useruid"])){
								echo "<li><a href='profile.php'> Profile page </a> </li>";
								echo "<li><a href='logout.php'> Log out </a> </li>";
							}
							else{

								echo "<li><a href='signup.php'>Sign in </a></li>";
								echo "<li><a href='login.php'>Log in </a></li>";

							}

						?>
						
						
					</ul>        
					</li>
			</ul>
		</nav>

	<section class="signup-form">
		
		<div class="signup-form-form">
			<h2>Log In</h2>
			<form action="login.inc.php" method="post">

				<div class="txt_field">
				<input type="text" name="uid" > 
				<span></span>
				<label>username</label>
				</div>
				
				<div class="txt_field">
				<input type="password" name="pwd">
				<span></span>
				<label>password</label>
				</div> 
				<div class="pass"></div>
				<input type="submit" id="search" value="login">
				<div class="signup_link"></div>
				<a href="signup.php">Not a member?,SignUp</a>

				
			</form>
		</div>

		<?php
		if(isset($_GET["error"])){
			if ($_GET["error"] == "emptyinput") {
				echo "<p>Remplisez toutes les champs</p>";
		}
		else if ($_GET["error"] == "wronglogin"){
			echo "<p>Incorrect login information!</p>";
		}
		
	}
	
	?>
	</section>

	</body>
</html>
