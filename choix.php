<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet"href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ma page</title>
	<style>
		#heure{
			padding: 10px;
			font-size: 20px;
     }
     #date{
     	padding: 10px;
			font-size: 29px;

     }
     #service{
	padding: 10px;
			font-size:35px;


     }
	 a{
       color: white;
	   text-decoration: none;

	 }

	</style>
</head>
<body class="body"> 
<header>
		
	<img class="logo" src="logohead.png">
		<h1 class="nom">Auto-Expert</h1>

<span class="cnx">connecte</span>
<button class="conn"><a class="lisa" href="logout.php">Déconnexion</a></button>
<?php $id=$_GET["id"];?>
<button class="root"><a class="root1" href="index.php?id=<?php echo $id;?>">Acceuil</a></button>
</header>	

<?php

$servernam="localhost";//des variable nesecaire pore la connexion avec la basse de donné
$password='';
$username="root";
$bdd="rdv";
$con=mysqli_connect($servernam,$username,$password,$bdd);//por permettre a php daceder a la base de doné basse 1

// Vérification de la connexion
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}


// Requête pour récupérer les dates existantes dans la table
$sql = "SELECT heure FROM informa";
$result = mysqli_query($con, $sql);
$heures_res = array();
while ($row = mysqli_fetch_array($result)) {
    $heures_res[] = $row['heure'];
}
mysqli_close($con);
?>


<div class="div20">

<div>
  <img class="photo" src="image.jpg">
  <p class="a1">Votre <br>sécurité <br>est  </p>
  <p class="a2">notre <br>priorité.</p>
</div>


<div>
<form class="form2" method="post" action="paiment.php">
	
		  	<h2 class="info6">Informations pesonnelles:</h2>
	<div class="info1">
		 <input type="text" placeholder="Nom" name="nom" value="" >
		 <input type="text" placeholder="Prénom" name="prenom">
		 <input type="tel" placeholder="Tel" name="tel">
		 <input type="email" placeholder="E-mail" name="email">
		 <input type="hidden" name="id" value="<?php echo $id ; ?>">
    </div>
	<h2 class="info7">Informations véhicules:</h2>
	<div class="info2">
		 
		<select class="marque" required name="marque">
			<span>selectioner</span>
			<option placeholder="Matricule">TOYOTA</option>
			<option>Nissan</option>
			<option>Hyundai</option>
		</select>
		
			<input type="text" placeholder="Matricule" name="matricule" required>
	
			<input type="text" placeholder="Numéro de série" name="numserie" required>
    </div>

	<h2 class="info8">Services:</h2>
	<div class="info3">
	  	<select class="tailleser" id="service" name="service">
	  	<option>vidange</option>
	  	<option>batterie </option>
	  	<option>Pneumatique</option>
	  	<option>Echapement</option>
	  	<option>Révision</option>
	  	<option>Suspension</option>
	  	<option> Freinage </option>
	  	<option> Mécanique</option>
	  	</select>
    </div>


	
	  <h2 class="info9" for="date">Date :</h2>
	  <div class="info4">
	  <input class="tailleser" id="date" type="date" name="date" id="date" maxvalue="30/06/2023" required>
      </div>
	  
	  <h2 class="info10" for="heure">Heure :</h2>
	  <div class="info5">
	   <select class="tailleser" id="heure" name="heure" >
	  <option value="">Sélectionnez un horaire</option>
	   <option value="08:00" <?php if (in_array('08:00', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';}?>>08:00</option>
	   <option value="08:30" <?php if (in_array('08:30', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>08:30</option>
	   <option value="09:00" <?php if (in_array('09:00', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>09:00</option>
	   <option value="09:30" <?php if (in_array('09:30', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';}?>>09:30</option>
	   <option value="10:00" <?php if (in_array('10:00', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>10:00</option>
	   <option value="10:30" <?php if (in_array('10:30', $heures_res)){echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>10:30</option>
	   <option value="11:00" <?php if (in_array('11:00', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';}?>>11:00</option>
	   <option value="11:30" <?php if (in_array('11:30', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>11:30</option>
	   <option value="12:00" <?php if (in_array('12:00', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';}?>>12:00</option>
	   <option value="13:00" <?php if (in_array('13:00', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>13:00</option>
	   <option value="13:30" <?php if (in_array('13:30', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>13:30</option>
	   <option value="14:00" <?php if (in_array('14:00', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>14:00</option>
	   <option value="14:30" <?php if (in_array('14:30', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>14:30</option>
	   <option value="15:00" <?php if (in_array('15:00', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>15:00</option>
	   <option value="15:30" <?php if (in_array('15:30', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>15:30</option>
	   <option value="16:00" <?php if (in_array('16:00', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>16:00</option>
	   <option value="16:30" <?php if (in_array('16:30', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';}?>>16:30</option>
	   <option value="17:00" <?php if (in_array('17:00', $heures_res)) {echo 'style="background-color: red;"disabled';} else{echo 'style="background-color: green;"';} ?>>17:00</option>
	   </select>
	   </div>
    </div>
    <div class="butt">
    	<button type="submit" >Confirmer</button>
		<button class="annuler"><a class="annul" href="index.php?id=<?php echo $id;?>">Annuler</a></button>
    </div>
	</form>
	</div> 
</div>
	
	<script>
		const telInput = document.querySelector('input[type=tel]');

const matriculeInput = document.querySelector("input[name='matricule']");
var numSerieInput = document.getElementsByName('numserie')[0];
matriculeInput.addEventListener("input", function() {
const matriculeValue = this.value.trim();
const matriculeRegex = /^([0-9]{5})\s([0-9]{3})\s([0-9]{2})$/;

if (matriculeRegex.test(matriculeValue)) {
// Envoie de la saisie au fichier.php via AJAX
// Et mise à jour visuelle de la bordure du champ en vert, par exemple
this.style.borderColor = "blue";
} else {
// Mise à jour visuelle de la bordure du champ en rouge
this.style.borderColor = "red";
}
});
// Ajout de l'événement de saisie
numSerieInput.addEventListener('input', function(event) {
// Récupération de la valeur saisie
var numSerie = event.target.value.trim();

// Vérification de la validité du numéro de série algérienne
var regex = /^[a-zA-Z]{2}[0-9]{6}$/;
var isValid = regex.test(numSerie);

// Modification de la couleur de la bordure en fonction de la validité
if (isValid) {
numSerieInput.style.borderColor = 'blue';
} else {
numSerieInput.style.borderColor = 'red';
}
});

telInput.addEventListener('input', function() {
const regex = /^0(5|6|7)[0-9]{8}$/;
if (regex.test(this.value)) {
this.style.borderColor = 'blue';
} else {
this.style.borderColor = 'red';
}
});
</script>

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
      <div class="div4"><img class="email" src="gmail.png"><p class="ecrit">Contacter nous</p></div>
	
	</div>

  <div class="main1">
    <h4> Horaires d'overture</h4>
    <div class="div1"><img class="calen"  src="calendrier.png"><p class="ecrit"> ouvert 6/7j </p></div>
    <div class="div2"><img class="time" src="lhorloge.png" ><p class="ecrit">de 9h à 17h</p></div>
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

</body>


</html>