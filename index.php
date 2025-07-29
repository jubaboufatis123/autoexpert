<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ma page</title>
	<style>
	a{
       color: white;
	   text-decoration: none;

	 }
	 </style>
</head>
<body>
	<?php
if(isset($_GET["nom"])){
$nom=$_GET["nom"];
}else{
	$nom="";	
}
if(isset($_GET["mdp"])){
$mod=$_GET["mdp"];
}else{
	$mod="";	
}
if(isset($_GET["id"])){
	$id=(int)$_GET["id"];
	}else{
		$id="";	
	}
	
$servernam="localhost";
$username="root";
$password="";
$bdd="rdv";
$con=mysqli_connect($servernam,$username,$password,$bdd);
if(!$con){
die("problème de connexion".mysqli_connect_error());
}
$sql="SELECT id FROM inscription WHERE nom='$nom'AND motdepass='$mod' ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)!=0){
	while($row=mysqli_fetch_assoc($result)){
		$id=(int)$row["id"];
}
}

mysqli_close($con);
?>
	<header>
		<div class="cls">
	<img class="logo" src="logohead.png">
		<h1 class="nom">Auto-Expert</h1>
</div>
		<?php
		session_start();
		// vérifier si l'utilisateur est connecté
		if (isset($_SESSION['connecte']) && $_SESSION['connecte'] == true) {
			
			echo '<span class="cnx">connecte</span>';
			echo '<button class="conn"><a class="lisa" href="logout.php">Déconnexion</a></button>';
		}?>
		
		<ul>
		
		<?php
		if((isset($id))&&(isset($_SESSION['connecte']))){
			echo '<button class="root2"><a class="consulte" href="Resultat.php?id='. $id .'">Consulter</a></button>';

		}
		?>

		
		<?php
if (isset($_SESSION['connecte'])) {
echo '<button class="root"><a class="root1" href="choix.php?id='. $id .'">Rendez-vous</a></button>';
} else {
// Si l'utilisateur n'est pas connecté, rediriger vers "connexion.php"

echo '<li><a  class="root3" href="inscription.php">Inscription</a></li>';
echo '<li><a class="root3" href="connexion.php">Connexion</a><li></li>';
}?>
<?php
if(isset($_SESSION["connecte"])){
?>
<style>
	.cls{
		position: relative;
		left:30px;
	}
</style>

<?php
}
?>
	</ul>
	</header><br>
	<section>
<p class="bienvenu">vous etes le bien venu</p>
</section>
<br><br>
   <img class="photo1" src="acceuilsite1.png">
	<!--<video class="video" loop autoplay muted>
		<source src="Foncez.mp4" type="video/mp4">
	</video>
	<br></br><br>-->
	</section>
	<u><h1 class="prestation">NOS PRESTATION</h1></u>
	
   
 
	<div class="root-bloc">
		<div class="inner-bloc">
			<img class="image" src="echapement.jpg">
			<h2 class="echapneu">Echappement</h2>
			<div id="inm6">
				<div id="text">echapement</div>
			  </div>
			  <div style="padding:20px">
				
				<button class="pub"><a class="couleur" href="echapement.html">voir plus</a></button>
		
			  </div> 
		</div>
		<div class="inner-bloc">
			<img class="image" src="batterie.jpg">
			<h2 title="fgdfgdfgfg" >batterie</h2>
			<div id="inm5">
				<div id="text">battrie</div>
			  </div>
			  
			  <div style="padding:20px">
				<button class="pub"><a class="couleur" href="batterie.html">voir plus</a></button>
				
			  </div>
			  
		</div>
		<div class="inner-bloc ">
			<img  class="image" src="révision.jpg">
			<h2>Révision</h2>
			<div id="inm3" >
				<div id="text">revision</div>
			  </div>
			  <div style="padding:20px">
				<button class="pub"><a class="couleur" href="révision.html">voir plus</a></button>
			  </div>
			  
			
		</div>
	</div>

	<div class="root-bloc">
		<div class="inner-bloc ">
			<img class="image" src="pneu.jpg">
			<h2 class="echapneu">Pneumatique</h2>
			<div id="inm7">
				<div id="text">pneumatique</div>
			  </div>
			  
			  <div style="padding:20px">
				<button class="pub"><a class="couleur" href="pneumatique.html">voir plus</a></button>
			  </div>
		</div>
		<div class="inner-bloc">
			<img class="image"  src="vidangelogo.jpg">
			<h2  >Vidange</h2>
			<div id="inm4" >
				<div id="text">vidange</div>
			  </div>
			  
			  <div style="padding:20px">
				<button class="pub"><a class="couleur" href="vidange.html">voir plus</a></button>
			  </div>
			  
		</div>
		<div class="inner-bloc">
			<img  class="image" class="image" src="mecanique.jpg">
			<h2 class="mecsup">Mecanique</h2>
			
			  
			  <div style="padding:20px">
				<button class="pub"><a class="couleur" href="mécanique.html">voir plus</a></button>
			  </div>
		</div>
	</div>


	<div class="root-bloc">
		<div class="inner-bloc ">
			<img class="image" src="freinage.jpg">
			<h2>Freinage</h2>
			<div id="inm" >
			  </div>
			  
			  <div style="padding:20px">
				<button class="pub"><a class="couleur" href="freinage.html">voir plus</a></button>
			  </div>
		</div>
		<div class="inner-bloc">
			<img class="image" src="suspension.jpg">
			<h2 class="mecsup">Suspension</h2>
			<div>
			  </div>
			  
			  <div style="padding:20px">
				<button class="pub"><a class="couleur" href="suspension.html">voir plus</a></button>
			  </div>
		</div>
	</div>
	<br>
	</br>
<section class="videovoiture">
	<video class="video" loop autoplay muted>
		<source src="video.mp4" type="video/mp4">
	</video>
	
	<h1 class="choisir">POURQUOI NOUS CHOISIR ?</h1>
	<br>
	<div class="border2">
	<hr class="border">
    <hr class="border">
    </div>
	<br><br>
	<div class="descrp">
    <p class="descrp1">Nous prenons soin de votre voiture : Vidange, Batterie, Freinage, Révision, Suspension, Mécanique… </p><br>
	<p class="descrp2"> Auto-Expert et son équipe de techniciens experts vous accueillent 7 jours sur 7 et vous assure </p><br>
	<p class="descrp3">sécurité et confort de conduite avec votre voiture.</p>
    </div>
	<br></br></br>

	<div class="choix">
       <div class="ch"><p class="chiffre">100%</p>
	    <p class="phrase">Satisfaction client</p></div>
       <div class="ch"><p class="chiffre">10</p>
	    <p class="phrase">Nombre de voiture<br> réparer par jour</p></div>
	   <div class="ch"><p class="chiffre">100%</p>
	    <p class="phrase1">Fiable</p></div>
	   <div class="ch"><p class="chiffre">3</p>
	    <p class="phrase">mois de garantie</p></div>
	</div>
</section>
	

	
<footer>
  <div class="pied">

  <div class="main">
      <h4>A propos</h4>

      <div class="nomsite">
      <div class="div5" ><img class="logo1" src="loogoo.png"></div>
      <div><p class="ecrit">AutoExpert</p></div>
      </div>

      <div class="div3"><img class="phone" src="appel-telephonique.png" ><p class="ecrit">05 57 89 32 00 </p></div>
      <div class="div4"><img class="email" src="gmail.png"><p class="ecrit"> AutoExpert@gmail.com</p></div>
	  <div class="div4"><img class="email" src="gmail.png"><p class="ecrit"><a href="contact.php?id=<?php echo $id;?>">Contacter nous</a></p></div>
	</div>

  <div class="main1">
    <h4> Horaires d'overture</h4>
    <div class="div1"><p class="ecrit"> ouvert 6/7j </p></div>
    <div class="div2"><p class="ecrit">de 8h à 17h</p></div>
  </div>

  <div class="main1">
    <h4>Marques</h4>
    <div class="div6"><img class="toyota" src="toyota.png"><p class="ecrit">Toyota </p></div>
    <div class="div7"><img class="nissan" src="nissan.png"><p class="ecrit">Nissan</p></div>

    <div class="div8"><img class="hyundai" src="icons8-hyundai-48.png"><p class="ecrit">Hyundai</p></div>
    
  </div>

  <div class="main1">
    <h4>Suivez nous!!</h4>
      <ul class="liste">
        <li class="liste1"><a class="lien" href="https://www.facebook.com/">facebook</a></li>
        <li class="liste1"><a class="lien" href="https://www.twitter.com/">Twitter</a></li>
        <li class="liste1"><a class="lien" href="https://www.instagram.com/">Instagram</a></li>
      </ul>
  </div>
</div>
 
 <div class="div9"><img src="localisateur.png" class="locale" ><p class="ecrit"class="tizi">Tizi-Ouzo Ouadhia</p></div>

  <div class="bottom-bar">
    <p>Tous droits réservés &copy; 2023</p> 
  </div>

</footer>


<!--  <div class="locale" ><img class="localisation" src="location-dot-solid.svg" >Tizi-Ouzo Ouadhia </div>  -->














</body>
</html>