<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf_8">
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head><body>



	<div id="container">
		<nav>
			<ul>
				<li><a href="Home.html">Home</a></li>
				
				<li><a href="Produits.html">Produits</a>
				<!-- First Tier Drop Down -->
				<ul>
					<li><a href="#">COUTEAUX</a></li>
					<li><a href="#">Ustensile</a></li>
					<li><a href="#">Equipement</a></li>
				</ul>        
				</li>
				<li><a href="Contact.html">Contact</a>
				<!-- First Tier Drop Down -->
				<ul>
					<li><a href="#">Avis</a></li>
					<li><a href="#">Nous Contacter</a></li>
								
                </ul>
				</li> 		
				
				<li><a href="Panier.html">Panier</a>
					<!-- First Tier Drop Down -->
					<ul>
						<li><a href="#">Commander</a></li>
						<li><a href="#">Voir le Panier</a></li>
						
					</ul>        
					</li>

					<li><a href="Blog.html">Blog</a></li>

				<li><a href="Login.html">Login</a>
					<!-- First Tier Drop Down -->
					<ul>

						
						<li><a href="signup.php"> Sign in </a></li>
						<li><a href="login.php"> Log in </a></li>
						
					</ul>        
					</li>
			</ul>
		</nav>







	<section class="signup-form">
		
		<div class="signup-form-form">
			<h1>Sign Up</h1>
			<form action="includes/signup.inc.php" method="post">
				
				<input type="text" name="name" placeholder="Full name" id="nameholder">
				<input type="text" name="email" placeholder="Email" id="nameholder1">
				<input type="text" name="uid" placeholder="username" id="nameholder2">
				<input type="password" name="pwd" placeholder="password" id="passholder">
				<input type="password" name="pwdrepeat" placeholder="repeat passeword" id="passholder1">
				<button type="submit"  name="submit" class="block">Sign up</button>
				
			</form>
		</div>

		<?php
		if(isset($_GET["error"])){
		if ($_GET["error"] == "emptyinput") {
			echo "<p>Remplisez toutes les champs</p>";
		}
		else if($_GET["error"]=="invaliduid"){
			echo "<p>choose a proper username</p>";
		}
		else if($_GET["error"]=="invalidemail"){
			echo "<p>email incoorecte</p>";
		}
		else if($_GET["error"]=="passwordsdontmatch"){
			echo "<p>les deux mot de passe ne sont pas même</p>";
		}
		else if($_GET["error"]=="stmtfailed"){
			echo "<p>Something went wrong,try again</p>";
		}
		else if($_GET["error"]=="usernametaken"){
			echo "<p>this user name already taken</p>";
		}
		else if($_GET["error"]=="none"){
			echo "<p>YOU HAVE SIGNED UP </p>";
		}
	}
	
	?>
	</section>

	

</body>
<footer></footer>
