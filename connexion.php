
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ma page connexion</title>
  <style>
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
  <div class="formulaire" >
  <form class="form1" id="formm" action="verefiercnx.php"   method="post">
    <h1 class="connex">Connexion</h1>
    <div class="form">
      <input class="input1" name="username" type="text"  placeholder="Nom d'utilisateur">
			<input class="input1" name="mdp" type="text"  placeholder="Mot de passe">
    </div>

    <?php
if(isset($_GET['erreur'])){
   echo '<p class="erreur"> Nom d\'utilisateur ou mot de passe incorrect</p>'; }
?>
    
    <div class="bloc">
  <button name="login" type="submit">Se connecter</button>
  <button class="annuler"><a class="annul" href="index.php">Annuler</a></button>
   </div>



    <a href="#">Mot de passe oublié ?</a>
</form>
<div class="bas">
  <p>Créer un compte <a href="inscription.php">Inscription</a> </p>
</div>
</div>
</section>






</body>
</html>