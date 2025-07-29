
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ma page inscription</title>
	<style>
		.annuler{
			text-decoration: none;
			color: white;
		}
		.erreur{
	color: red;
	position: relative;
	font-family:arial;
	font-size: 14px;
  text-align:center;
  font-weight:bold;
  }
	</style>
</head>
<body class="body">
	<section>
  <div class="formulaire1">
  <form class="form1" id="formm" action="verifier.php"   method="post">
    <h1 class="connex">Inscription</h1>
    <div class="form">
      <input class="input1" name="nut" type="text"  placeholder="Nom d'utilisateur">
	  <input class="input1" name="mdp" type="text"  placeholder="Mot de passe">
	  <input class="input1"  name="rmdp" type="text"  placeholder="confirmez votre mot de passe">
    </div>
	<?php 
	if(isset($_GET['erreur'])){
   echo '<p class="erreur">la confirmation du mot de passe est incorrecte</p>'; }
   if(isset($_GET["erreur1"])){
	echo '<p class="erreur">Le nom d utilisatur existe </p>'; 
   }
?>


	<div class="bloc">
  <button class="inscrir" name="register" type="submit">S'inscrire</button>
	<button class="annuler"><a class="annul" href="index.php">Annuler</a></button>
  </div>
   </form>
<div class="bas">
  <p>Vous avez deja un compte <a href="connexion.php">Connexion</a> </p>
</div>
</div>
</section>






</body>
</html>

