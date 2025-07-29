<!DOCTYPE html>
<html>
<head>
	<style>
		* {
	box-sizing: border-box;
}

body {
	font-family: 'Open Sans', sans-serif;
	background: #537291;
}

.login {
	max-width: 400px;
    height: 330px;
	margin: 50px auto;
	background: #fff;
	border-radius: 10px;
	padding: 20px;
	text-align: center;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    margin-top: 110px;
}

h1 {
	margin-top: 0;
	font-size: 25px;
	font-weight:900;
	color: #666;
    text-decoration: underline;
    text-underline-offset: 5px; /* la distance entre souligner et titre */
    text-decoration-thickness: 5px;  /*pour personnaliser l'apparence du souligne */

}

form {
	margin-top: 50px;
}

input[type="text"],
input[type="password"] {
	width: 90%;
    height: 40px;
	padding: 10px;
	border-radius: 5px;
	border: none;
	margin-bottom: 20px;
    font-size: 16px;
}

input[type="text"]:focus,
input[type="password"]:focus {
   /* definit une bordure en relief et une ombre pour les champs de saisie de text et mdps*/
    
	outline: none;
	box-shadow: 0px 0px 10px rgba(3, 2, 43, 0.3); /* afficher une couleur lorsque on clique sur le champ */
}
.erreur{
color: red;
position: relative;
font-family:arial;
font-size: 14px;
text-align:center;
font-weight:bold;
}
.btn {
	display: inline-block;
	padding: 10px 20px;
	background: #3498db;
	color: #eeecec;
	border-radius: 5px;
	border: none;
	cursor: pointer;
	font-size: 16px;
    width: 180px;
}
input[type="text"]:hover,input[type="password"]:hover{ /* pour le zoom des champs */
    transform: scale(1.1);
    transition: transform 0.2s ease-in-out;
}
	</style>
	<title>Page Admin</title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	
</head>
<body>
	<?php
	?>
	<div class="login">
		<h1> Authentifier Vous</h1>
		<form action="verifieradmin.php" method="post">
			<input type="text" name="id" placeholder="Identifiant"></br>
			<input type="password" name="mdp" placeholder="Mot de passe"></br>
			<?php
if(isset($_GET['erreur'])){
   echo '<p class="erreur"> Identifiant de l\'admin ou mot de passe incorrect</p>'; }
?>
			<button type="submit" class="btn btn-primary btn-block btn-large">Confirmer</button>
		</form>
	</div>
</body>
</html>